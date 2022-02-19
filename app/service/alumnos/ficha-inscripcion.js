
$(document).ready(function() {
    consultaInfoInscripcionAlumno();
});


function consultaInfoInscripcionAlumno() {
    //llamado a ffuncion asincrona
    consultaAsyncFichaInscAlumno(ID_FICHA,0).then(function (result) {
        $("#tiitleCurso").html(result.DATOS.nombre_curso);
        buildHTMLFicha(result);

        if (parseInt(result.DATOS.autorizacion_inscripcion)>=0){
            let cardInscripcionAcredita
            if (result.VALIDACION!=null){
                cardInscripcionAcredita = buildCardInscripcion(result.VALIDACION);
            }
            else{
                cardInscripcionAcredita = buildCardEnviada(result.VALIDACION);
            }

            $("#cardPago").html(cardInscripcionAcredita);
        }
        else{
            let cardCancelado = buildCardInscripcionCancelacion(result.DATOS);
            $("#cardPago").html(cardCancelado);
            $("#containerTblDocs").remove();
            $("#btnPrinter").remove();
        }
        let tablDocs = buildTBLDocsSolicitadosAlumno(result.DOCS);
        $("#containerDocs").html(tablDocs);
    })
}

function buildCardInscripcionCancelacion(DATOS){
    let template = `<div class="d-flex">
                        <div class="m-auto">
                            <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                        </div>
                        <div class="col-8 m-auto">
                            <h3>CANCELADO</h3>
                            <h6>Tu solicitud fue cancelada el <span id="cardPagoTotal">${getLegibleFechaHora(DATOS.fecha_conclusion)}</span></h6>
                            <div class="d-flex justify-center align-items-center">
                            <h6>Ya no puedes inscribirte al curso</h6>
                            </div>
                        </div>
                    </div>`;
    return template;
}

function buildCardEnviada(DATOS){
    let template = `<div class="d-flex">
                                    <div class="m-auto">
                                        <img src="../assets/images/icons/mail2.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Enviada</h5>
                                        <h6>Tu solicitud ha sido enviada, pero aun no se ha revisado.</h6>
                                    </div>
                                </div>`;
    return template;
}

function buildCardInscripcion(DATOS){
    return `<div class="d-flex">
                <div class="col-auto m-auto">
                    <img src="../assets/images/icons/checked1.svg" width="80" alt="svg ok">
                </div>
                <div class="col-8 m-auto">
                    <h5>Inscripción <strong>acreditada</strong></h5>
                    <h6>Se acredito el  ${getLegibleFechaHora(DATOS.fecha_validacion)}</h6>
                </div>
            </div>`;
}

function buildHTMLFicha(FICHA) {
    let DATOS = FICHA.DATOS;
    $("#avatarImage").attr("src",DATOS.perfil_image);
    $("#breadName").html(DATOS.nombre_completo);
    $("#fichaName").html(DATOS.nombre_completo);
    $("#fichaCarrera").html(DATOS.carrera_especialidad);
    $("#fichaProcedencia").html(DATOS.tipo_procedencia);
    $("#fichaValidaAlumno").html(cuentaAlumnoDraw(DATOS.estatusAlumno));
    //Data
    $("#fichaSexo").html(sexoPersona(DATOS.sexo));
    $("#fichaTelefono").html(DATOS.telefono);
    $("#fichaCorreo").html(DATOS.email);
    $("#fichaLocalidad").html(DATOS.municipio+', '+DATOS.edoRep);
    //Academica
    $("#carrera").html(DATOS.carrera_especialidad);
    $("#fichaNameUni").html(DATOS.nombreUni+' ('+DATOS.siglas+')');
    $("#fichaMatricula").html(DATOS.matricula);
    $("#fichaAltaCuenta").html('Registrada el '+getLegibleFechaHora(DATOS.fecha_registro));
    //DETALLES DEL CURSO
    $("#bannerCurso").attr("src",DATOS.banner_img);
    $("#idFechaSol").html('Enviada el '+getLegibleFechaHora(DATOS.fecha_solicitud));
    $("#fichaNameCurso").html(DATOS.codigo+' '+DATOS.nombre_curso);
    $("#fichaGrupo").html(DATOS.grupo);
    $("#fichasemestre").html(DATOS.semestre);
    $("#fichaGen").html(DATOS.generacion);
    $("#fichaCampus").html(getCampusCede(DATOS.campus_cede));
    $("#fichaProfe").html(DATOS.profesor);
    //COSTOS
    $("#fichaCoste").html('$ '+DATOS.costo_real+' MXN');
    let descuento = DATOS.DESCUENTO === null ? 'No Aplica': ''+DATOS.DESCUENTO+' % <cite>('+DATOS.tipo_procedencia+')</cite>';
    let totalPago = DATOS.DESCUENTO === null ? '$ '+DATOS.costo_real+' MXN': '$ '+calculaDescuento(DATOS.costo_real,DATOS.DESCUENTO)+' MXN';
    $("#fichaDesc").html(descuento);
    $("#fichaTotal").html(totalPago);
    $("#cardPagoTotal").html(totalPago);
    $("#fichaNotas").html(DATOS.notasInscripcion.length>0?DATOS.notasInscripcion.length:'Sin nota alguna');
}

/*Async regresa lista del documentos pendient3s por revisar*/
async function consultaAsyncFichaInscAlumno(idInscipcion,filtro) {
    return await consultaAsyncFichaInscAlumnoAJAX(idInscipcion,filtro);
}

//Funcion ajax de asignaciones
async function consultaAsyncFichaInscAlumnoAJAX(idInscipcion,filtro){
    return $.ajax({
        url: "../app/webhook/detalles-ficha-inscripcion.php",
        type: 'POST',
        dataType: "json",
        data: {
            idInscipcion:idInscipcion,
            filtro:filtro
        },
        success: function (response) {
               console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer los documentos por revisar");
        }
    });
}
