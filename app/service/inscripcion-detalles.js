$(document).ready(function () {
    consultaInfoInscripcion();
});

function consultaInfoInscripcion() {
    //llamado a ffuncion asincrona
    consultaAsyncFichaInsc(ID_INSC,0).then(function (result) {
        buildHTMLFicha(result);
        if (result.C_SS != null) {
            let cardHTML = buildCardSerSoc(result.C_SS);
            $("#acountSS").html(cardHTML);
        }
        if (parseInt(result.DATOS.autorizacion_inscripcion)>=0){
            if (result.VALIDACION!=null){
                let cardInscripcionAcredita = buildCardInscripcion(result.VALIDACION);
                $("#cardPago").html(cardInscripcionAcredita);
            }
        }
        else{
            let cardCancelado = buildCardInscripcionCancelacion(result.DATOS);
            $("#cardPago").html(cardCancelado);
        }

        let tablDocs = buildTBLDocsSolicitados(result.DOCS);
        $("#containerDocs").html(tablDocs);
    })
}

function buildCardInscripcionCancelacion(DATOS){
    let template = `<div class="card">
                            <div class="card-body py-3 px-2">
                                <div class="d-flex">
                                    <div class="m-auto">
                                        <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h3>CANCELADO</h3>
                                        <h6>Cancelado el <span id="cardPagoTotal">${getLegibleFechaHora(DATOS.fecha_conclusion)}</span></h6>
                                        <div class="d-flex justify-center align-items-center">
                                        <h6>El alumno tendra que volver a enviar solicitud</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
    return template;
}

function buildCardInscripcion(DATOS){
    return `
        <div class="card">
            <div class="card-body py-3 px-4">
                <div class="d-flex align-items-center">
                    <div class="col-2 m-auto">
                        <img src="../assets/images/icons/checked1.svg" width="80" alt="svg ok">
                    </div>
                    <div class="col-7 m-auto" role="button" onclick="viewDetailsPago();">
                        <h5>Inscripción acreditada</h5>
                        <input type="hidden" value="1" id="valAcredCurso">
                        <h5><strong>${DATOS.prefijo}. ${DATOS.nombre_completo}</strong></h5>
                        <h6>${DATOS.depto_name}</h6>
                    </div>
                    <div class="col-3 m-auto">
                    <button class="btn btn-danger btn-block btnCancelSubscripcion"><i class="fas fa-ban"></i> Cancelar</button>
                    </div>
                </div>
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
    $("#idFechaSol").html('Recibida el '+getLegibleFechaHora(DATOS.fecha_solicitud));
    $("#fichaNameCurso").html(DATOS.codigo+' '+DATOS.nombre_curso);
    $("#fichaGrupo").html(DATOS.grupo);
    $("#fichasemestre").html(DATOS.semestre);
    $("#fichaGen").html(DATOS.generacion);
    $("#fichaCampus").html(getCampusCede(DATOS.campus_cede));
    $("#fichaProfe").html(DATOS.profesor);
    //COSTOS
    $("#fichaCoste").html('$ '+DATOS.costo_real+' MXN');
    //-50% ($500.00 MXN)
    let descuento = DATOS.DESCUENTO === null ? 'No Aplica': ''+DATOS.DESCUENTO+' % <cite>('+DATOS.tipo_procedencia+')</cite>';
    let totalPago = DATOS.DESCUENTO === null ? '$ '+DATOS.costo_real+' MXN': '$ '+calculaDescuento(DATOS.costo_real,DATOS.DESCUENTO)+' MXN';
    $("#fichaDesc").html(descuento);
    $("#fichaTotal").html(totalPago);
    $("#cardPagoTotal").html(totalPago);
    $("#fichaNotas").html(DATOS.notasInscripcion.length>0?DATOS.notasInscripcion.length:'Sin nota alguna');
}


function buildCardSerSoc(SS) {
    return `<div class="card-body pb-3">
                                <div class="m-auto">
                                    <h5>Información de Servicio Social</h5>
                                    Este alumno está registrado con una cuenta de Servicio Social 
                                    <span class="badge bg-primary">${estadoServSoc(SS.estatusSS)}</span>
                                </div>

                                <div class="row py-3">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Inicio de servicio</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold">${getLegibleFechaHora(SS.fecha_inicio_serv)}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Fin de servicio</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold">${getLegibleFechaHora(SS.fecha_termino_serv)}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold">${SS.notas}</div>
                                    </div>                                   
                                </div>
                            </div>`;
}

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnValidatePago", function ()
{
    let valorAccion = $("#status-pago").val();
    let id = ID_INSC;
    let action, mje;
    if (valorAccion === "1"){
        mje = "Acreditar el pago del curso";
        action = "ACREDITAR";
    }
    else if (valorAccion === "2"){
        mje = "Acreditar la inscripcion<br> SIN PAGO";
        action = "ACREDITAR";
    }
    else{
        mje = "Cancelar inscripción";
        action = "CANCELAR";
    }

    sweetConfirm(mje, '¿Estas seguro de que deseas '+action+' esta inscripcion?', function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            confirmaCuentaAdmin("1",valorAccion,id).then(function (result) {
                if (result == -1){
                    titulo= "Contraseña invalida";
                    texto= "Porfavor llena los datos que se solicitan";
                    tipo = "warning";
                    alerta(titulo,texto,tipo);
                }
                else if (result.validacion) {
                    alertaEmergente(result.mensaje);//reload
                    consultaInfoInscripcion();
                    loadContaores();
                }
                else if (!result.validacion){
                    titulo= result.mensaje;
                    texto= "Contraseña Incorrecta";
                    tipo = "warning";
                    alerta(titulo,texto,tipo);
                }
            })
        }
    });
});


$(document).on("click", ".btnCancelSubscripcion", function ()
{
    sweetConfirm('Cancelar inscripción', '¿Estas seguro de que deseas CANCELAR esta inscripcion?', function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            alert("PRESIJNO YES");
        }
    });
});


function viewDetailsPago() {
    alert("VER DETALLES");
}

$(document).on("click", ".btnActionFicha", function ()
{
    fichaInsc();
});

//printerFicha

function fichaInsc() {
    let id = ID_INSC;
    var url = './ficha_inscripcion/index.php';
    redirect_by_post(url, {  id: id }, true);
}