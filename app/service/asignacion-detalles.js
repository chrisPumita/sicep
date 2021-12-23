let ID_ASIG = $("#idAsignacion").val();

$(document).ready(function() {
    consultaListaProfesores();
    loadGeneraciones();

    loadSolicitudes(ID_ASIG);
    loadInscripcionesConfirmadas(ID_ASIG);
});

window.onload = function(){
    consultaInfoAsignacion(ID_ASIG,1);
}


//Consulta de asignacion con funcion asincrona

function consultaInfoAsignacion(idAsig,filtro) {
    consultaDetallesAsignaciones(idAsig,filtro).then(function (e) {
        if (e.length==1){
            loadDataAsignacion(e[0]);
        }
    });
}

function loadDataAsignacion(asig){
    consultaGrupos(asig.id_curso).then(function () {

        $("#fondoImg").css("background", "url('"+asig.banner_img+"') center fixed no-repeat");

        $("#profesorAsig").prepend("<option value='0' selected>Ninguno</option>");
        $("#grupos").prepend("<option value='0' selected>Ninguno</option>");
        $("#generacion").prepend("<option value='0' selected>Ninguno</option>");
        $("#semestre").prepend("<option value='0' selected>Ninguno</option>");

        $("#liCursoAction").on("click", );
        $('#liCursoAction').attr('onClick', 'openCurso('+asig.id_curso+');');
        $("#nameAsignacion").html(asig.nombre_curso);
        $("#nameCursoTittle").html(asig.nombre_curso);
        $("#nameBreadCurso").html(asig.nombre_curso);
        $("#grupoBread").html('GPO-'+asig.grupo+' - GEN'+ asig.generacion);
        $("#profesorAsigActual").val(asig.prefijo+' '+asig.nombre_completo);
        $("#lblProfesorName").html(asig.prefijo+' '+asig.nombre_completo);

        let estatusAsig = estadoAsig(asig.estado_asig);
        $("#statusFlag").html(estatusAsig);
        $("#lblGrupo").html(asig.grupo);
        $("#lblGeneracion").html(asig.generacion);
        $("#lblModalidad").html(getModalidadCurso(asig.modalidad));
        $("#lblCupo").html(asig.cupo +' lugares');
        $("#lblCampusCede").html(getCampusCede(asig.campus_cede));
        $("#lblSemestre").html(asig.semestre);
        $("#lblCostoFinal").html('$ '+asig.costo_real);
        $("#lblNotas").html(asig.notas);
        //Fechas
        $("#lblInsc").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_inscripcion) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_lim_inscripcion));
        $("#lblClases").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin));
        $("#lblCalif").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_actas) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin_actas));


        $("#grpoActual").val(asig.grupo);
        $("#genActual").val(asig.generacion);
        $("#semestreActual").val(asig.semestre);
        $("#idCursoGrupo").val(asig.id_curso);
        $("#modalidad").val(asig.modalidad);
        $("#numCupo").val(asig.cupo);
        $("#campus").val(asig.campus_cede);
        $("#notas").val(asig.notas);
        $("#costo").val(asig.costo_real);
        $("#lblCostoFinalCallout").html('$ '+asig.costo_real);
        $("#costoRecom").val(asig.costo_sugerido);

        $("#InicioCurso").val(asig.fecha_inicio);
        $("#finCurso").val(asig.fecha_fin);
        $("#inicioInsc").val(asig.fecha_inicio_inscripcion);
        $("#finInsc").val(asig.fecha_lim_inscripcion);
        $("#inicioCal").val(asig.fecha_inicio_actas);
        $("#finCal").val(asig.fecha_fin_actas);
        consultaTblDescuentosAplicados(asig.id_curso,asig.costo_real);
    })
}

//CRUD DESCUENTOS
function consultaTblDescuentosAplicados(idCurso,costoAplicado) {
    consultaDescuentos(idCurso).then(function (e) {
        buildTBLHtmlDescuentos(e,costoAplicado);
    });
}

function buildTBLHtmlDescuentos(DESCUENTOS,costoAplicado) {
    let template ="";
    let btnidCurso =0;
    if (DESCUENTOS.length > 0) {
        template += `<table class="table table-hover table-striped" >
                            <thead>
                            <tr>
                                <th>DIRIGIDO A</th>
                                <th>DESCUENTO</th>
                                <th>T.DESC</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-Desc">`;
        DESCUENTOS.forEach(
            (des)=>
            {
                btnidCurso = des.id_curso_fk;
                let costoFinal = parseFloat(costoAplicado);
                let DescApli = parseFloat(des.porcentaje_desc);
                let DescTotal = (costoFinal*DescApli)/100;
                let totalDesc = costoFinal-DescTotal;
                let descApli = parseInt(des.porcentaje_desc)!="0" ? `<span class="badge bg-info"><i class="fas fa-tag"></i> ${des.porcentaje_desc}% OFF</span>`: 'N/A';

                template += `<tr id_procedencia="${des.id_tipo_procedencia_fk}">
                                <td>${des.tipo_procedencia}</td>
                                <td>${descApli}</td>
                                <td>-$ ${DescTotal}</td>
                                <td>$ ${totalDesc}</td>
                            </tr>`;
            }
        );

        template += `      </tbody>
                        </table>
                        <button class="btn btn-primary w-50" onclick="openCurso(${btnidCurso});">
                            <i class="fas fa-percent"></i> Editar
                        </button>`;
    }
    else{
        template = `<div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                      <strong> ATENCION: </strong>
                       Nadie podra inscribirse a este curso, agregue al menos un grupos de alumnos de los que se pueden inscribir,
                       al mismo tiempo puede agregarles el descuento que desee. Este se aplicara de forma automatica al momento de
                       abrir grupos para nuevas generaciones.
                      </div>
                    </div>`;
    }
    $("#containerDescuentos").html(template);
}

$("#frm-update-detalles-asig").on("submit", function(e){
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-update-detalles-asig"));
    formData.append("dato", "valor");
    $.ajax({
        url: "./webhook/update-detalles-asig.php",
        type: "post",
        dataType: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(res){
            alertaEmergente(res.Mensaje);
        }
    }).done(function(response){
        consultaInfoAsignacion(ID_ASIG,1);
    });
    $("#editarDetallesAsig").modal('hide');
});

$("#frm-update-detalles-asig-fechas").on("submit", function(e){
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-update-detalles-asig-fechas"));
    formData.append("dato", "valor");
    $.ajax({
        url: "./webhook/update-detalles-asig-fechas.php",
        type: "post",
        dataType: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(res){
            alertaEmergente(res.Mensaje);
        }
    }).done(function(response){
        consultaInfoAsignacion(ID_ASIG,1);
    });
    $("#editarDetallesAsigFechas").modal('hide');
});

function openCurso(id) {
    let url = "./detalles-curso#sectionDescuentos";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}