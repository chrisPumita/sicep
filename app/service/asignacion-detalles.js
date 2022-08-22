let ID_ASIG = $("#idAsignacion").val();
$(document).ready(function() {
    consultaListaProfesores();
    loadGeneraciones();
    loadSemestre();
    loadSolicitudes(ID_ASIG);
});

window.onload = function(){
    consultaInfoAsignacion(ID_ASIG,1);
}

//Consulta de asignacion con funcion asincrona
function consultaInfoAsignacion(idAsig,filtro) {
    consultaInfoAsignacionAjax(idAsig,filtro).then(function (e) {
        if (e.length==1){
            loadDataAsignacion(e[0]);
        }
    });
}

function loadDataAsignacion(asig){
    consultaGrupos(asig.id_curso).then(function () {

        $("#fondoImg").css("background", "url('"+asig.banner_img+"')");

        $("#profesorAsig").prepend("<option value='0' selected>Ninguno</option>");
        $("#grupos").prepend("<option value='0' selected>Ninguno</option>");
        $("#generacion").prepend("<option value='0' selected>Ninguno</option>");
        $("#semestre").prepend("<option value='0' selected>Ninguno</option>");
        let visible = asig.visible_publico === "1" ? '<i class="fas fa-eye text-primary"></i> VISIBLE' : '<i class="fas fa-eye-slash text-danger"></i> NO PUBLICADO';
        $("#liCursoAction").on("click", );
        $('#liCursoAction').attr('onClick', 'openCurso('+asig.id_curso+');');
        $("#nameAsignacion").html(asig.nombre_curso);
        $("#nameCursoTittle").html(asig.nombre_curso);
        $("#nameBreadCurso").html(asig.nombre_curso);
        $("#lblVisible").html(visible);
        $("#grupoBread").html('GPO-'+asig.grupo+' - GEN'+ asig.generacion);
        $("#profesorAsigActual").val(asig.prefijo+' '+asig.nombre_completo);
        $("#lblProfesorName").html(asig.prefijo+' '+asig.nombre_completo);

        let estatusAsig = estadoAsig(asig.estado_asig);
        $("#statusFlag").html(estatusAsig);
        if (asig.estado_asig === "-1"){
            $("#statusArchive").remove();
        }

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
        $("#modalidad-edita").val(asig.modalidad);
        $("#numCupo").val(asig.cupo);
        $("#campus").val(asig.campus_cede);
        $("#notas").val(asig.notas);
        $("#costo").val(asig.costo_real);
        $("#lblCostoFinalCallout").html('$ '+asig.costo_real);
        $("#costoRecom").val(asig.costo_sugerido);
        $("#visibilidad").val(asig.visible_publico);

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
    //Ruta del Webbhook
    let ruta = "./webhook/update-detalles-asig.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        idAsignacion : $("#idAsignacion").val(),
        idProfesorAsig : $("#profesorAsig").val(),
        idGrupo : $("#grupos").val(),
        idGeneracion : $("#generacion").val(),
        semestre : $("#semestre").val(),
        costo : $("#costo").val(),
        modalidad : $("#modalidad-edita").val(),
        visibilidad : $("#visibilidad").val(),
        cupo: $("#numCupo").val(),
        campus :$("#campus").val(),
        notas : $("#notas").val()
    };
    //Llamado de la funcion Async y resolviendo la promesa
    enviaForm(params,ruta).then(function () {
        $("#editarDetallesAsig").modal('hide');
        consultaInfoAsignacion(ID_ASIG,1);
    });
    e.preventDefault();
});

$("#frm-update-detalles-asig-fechas").on("submit", function(e){
    //Ruta del Webbhook
    let ruta = "./webhook/update-fechas-asignacion.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        idAsignacion : $("#idAsignacion").val(),
        inicioCurso: $("#InicioCurso").val(),
        finCurso:$("#finCurso").val(),
        inicioInsc:$("#inicioInsc").val(),
        finInsc: $("#finInsc").val(),
        inicioCal: $("#inicioCal").val(),
        finCal: $("#finCal").val()
    };
    //Llamado de la funcion Async y resolviendo la promesa
    enviaForm(params,ruta).then(function () {
        $("#editarDetallesAsigFechas").modal('hide');
        consultaInfoAsignacion(ID_ASIG,1);
    });
    e.preventDefault();
});

function openCurso(id) {
    let url = "./detalles-curso#sectionDescuentos";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}


function archivarCurso() {
    var id = ID_ASIG;
    let route= "./webhook/archive_asig.php";
    sweetConfirm("Archivar", '¿Estas seguro de que deseas archivar esta inscripcion?', function (confirmed) {
        if (confirmed) {
            enviaForm({id:id},route).then(function () {
                consultaInfoAsignacion(ID_ASIG,1);
            });
        }
    });
}

function cancelarCurso() {
    var id = ID_ASIG;
    let route= "./webhook/delete_asig.php";
    sweetConfirm("Cancelar Grupo", '¿Esta seguro de que deseas archivar esta asignacion de grupo?', function (confirmed) {
        if (confirmed) {
            enviaForm({id:id},route).then(function (result) {
                setTimeout( function() { window.location.href = "./lista-grupos"; }, 2000 );
            });
        }
    });
}