$(document).ready(function() {
    consultaDetallesInscripcion(ID_ASIG);
});

function consultaDetallesInscripcion(idAsig) {
    consultaAsyncDetailsAsigInscribe(idAsig).then(function (result) {
        loadDataAsignacion(result.datos,result.descuento);
    })

}

function loadPrecioDes(desc,costo) {
    let porcentaje_desc = parseInt(desc);
    let costoFinal = parseFloat(costo);
    let DescApli = parseFloat(porcentaje_desc);
    let DescTotal = (costoFinal*DescApli)/100;
    let totalDesc = costoFinal-DescTotal;
    let descApli = parseInt(porcentaje_desc)>0 ? `*Aplica ${porcentaje_desc}% de descuento` : '';
    let tachado = parseInt(porcentaje_desc)>0 ? `<span class="tachado">$ ${costo}</span> <mark class="small bg-success text-light">$ ${totalDesc}</mark></h2> ` : '$ '+costo;
    $("#lblDescuentoAplciado").html(descApli);
    $("#lblCostoFinalCallout").html(tachado);
}


function loadDataAsignacion(asig,descuento){
        $("#nameAsignacion").html(asig.nombre_curso);
        $("#lblProfesorName").html(asig.nombre_completo);
        $("#nameCursoTittle").html(asig.nombre_curso);
        $("#lblSesiones").html(asig.no_sesiones);
        $("#lblCostoFinalCallout").html("$ "+asig.costo_real);

        $("#lblGrupo").html(asig.grupo);
        $("#lblGeneracion").html(asig.generacion);
        $("#lblModalidad").html(getModalidadCurso(asig.modalidad));
        $("#lblCupo").html(asig.cupo +' lugares');
        $("#lblCampusCede").html(getCampusCede(asig.campus_cede));
        $("#lblSemestre").html(asig.semestre);
        $("#lblCostoFinal").html('$ '+asig.costo_real);
        let notas = asig.notas === "" ? "Sin nota alguna": asig.notas;
        $("#lblNotas").html(notas);
        //Fechas
        $("#lblInsc").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_inscripcion) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_lim_inscripcion));
        $("#lblClases").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin));
        $("#lblCalif").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_actas) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin_actas));
    consultaTblDescuentosAplicadosAlumno(asig.id_curso,asig.costo_real);
        loadPrecioDes(descuento,asig.costo_real);
}


//bntInpcion


$(document).on("click", ".bntInpcion", function ()
{
    //data-bs-toggle="modal" data-bs-target="#solicitud"
    sweetConfirm('Confirma tu inscripción', '¿Estas seguro de que inscribirte a este curso?', async function (confirmed) {
        if (confirmed) {
            let result = await inscribeCursoAjax();
            if (result.messageType == 1){
                alertaEmergente(result.messageText);
                $('#solicitud').modal("show");
                $('#btnsend').remove();
                $('#alertConfimInscripcion').html("Te has inscrito correcpatemte. Espera la acreditación de tu solicitud.");
                let template = `<h4 class="card-title">Estado actual</h4>
                                    <div class="d-flex">
                                        <div class="avatar avatar-xl">
                                            <img src="../assets/images/icons/checked1.svg" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <h6 class="text-muted mb-0" >Solicitud enviada Porfavor revisa tu el estado de tu solicitud de inscripción en <a href="./mis-cursos">"Mis Cursos"</a>.</h6>
                                        </div>
                                    </div>
`;
                $('#costeInscrito').html(template);

                $("#imgAlertInscripcion").attr("src","../assets/images/icons/checked1.svg");
            }
            else if (result.messageType == 0){
                alerta("Inscripcion no completada",result.messageText, "error");

            }
            else { alerta("Inscripcion no completada",result.messageText, "error"); }
        }
    });
});

async function inscribeCursoAjax(){
    return $.ajax({
        url: "../app/webhook/alumno.inscribeCurso.php",
        type: 'POST',
        data: {idAsig:ID_ASIG},
        dataType: "json",
        success: function (response) {
            //  console.log(response);
        },
        error: function() {
            alerta("Error al tratar de inscribirte");
        }
    });
}