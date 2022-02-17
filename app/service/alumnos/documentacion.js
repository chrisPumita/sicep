var ID_FICHA;
$(document).ready(function () {
    consultaDocsAlumnoPorRevisar();
});
function consultaDocsAlumnoPorRevisar() {
    //llamado a ffuncion asincrona
    consultaAsyncDocsInscRevisaAlum(0).then(function (result) {
        SOLICITUDES = result;
        buildHTMLAcrrodion();
    })
}

function buildHTMLAcrrodion() {
    //Working with solicitudes OBJ
    let template = '';
    let cont = 0;
    let sumaDocs = 0;
    if(SOLICITUDES.length > 0) {
        SOLICITUDES.forEach(
            (SOL)=>
            {
                sumaDocs += parseInt(SOL.docsRevisar);
                cont++;
                let descuento = SOL.DESCUENTO === null ? 'No Aplica': '$'+calculaDescuento(SOL.costo_real,SOL.DESCUENTO)+' (-'+SOL.DESCUENTO+'%)';
                let estadoSolicitud = SOL.autorizacion_inscripcion ==="1" ? '<i class="fas fa-check-circle text-success"></i> APROBADA':'<i class="fas fa-exclamation-circle text-warning"></i> POR REVISAR  ';
                let estadoPago = SOL.pago_confirmado ==="1" ? '<i class="fas fa-hand-holding-usd text-success"></i> PAGADO':'<i class="fas fa-hand-holding-usd text-warning"></i> PAGO PENDIENTE ';
              template += `
            <div class="list-group-item list-group-item-action" idInsc="${SOL.id_inscripcion}" id="heading${cont}" data-bs-toggle="collapse" 
            data-bs-target="#collapse${cont}" aria-expanded="true"  aria-controls="collapseOne" role="button" onclick="showDocs('${cont}',this);">
                <div class="d-flex w-100 justify-content-between">
                    <div class="d-flex px-2 py-1 mb-0">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">${SOL.nombre_curso} [${SOL.grupo}]</h6>
                        </div>
                    </div>
                    <small><i class="fas fa-folder-open"></i></small>
                </div>
            </div>
            <div id="collapse${cont}" class="collapse pt-1" aria-labelledby="heading${cont}" data-parent="#cardAccordion">
                 <div class="card-content">
                    <div class="py-1 px-1">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="list-group" role="tablist">
                                    <a class="list-group-item list-group-item-action " id="list-home-list" data-bs-toggle="list" href="#list-1-${cont}"  role="tab"><i class="far fa-id-card"></i> Ficha De Inscripcion</a>
                                    <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-2-${cont}" role="tab"><i class="fas fa-folder-open"></i> Documentos </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 mt-1">
                                <div class="tab-content text-justify" id="nav-tabContent">
                                    <div class="tab-pane show " id="list-1-${cont}" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="col-12 col-md-12">
                                            <div class="card mb-3">
                                                <div class="py-2">
                                                    <div class="row py-1 m-2">
                                                        <h5 class="text-secondary">Ficha de Inscipción: No <span role="button" onclick="goFichaInsc('${SOL.id_inscripcion}');">${SOL.id_inscripcion}</span></h5>
                                                        <div class="row py-2">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">${getTipoCurso(SOL.tipo_curso)}:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">${SOL.nombre_curso} GRUPO: ${SOL.grupo}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-7 col-sm-3">
                                                                <h6 class="mb-0">Semestre</h6>
                                                            </div>
                                                            <div class="col-5 col-sm-3 text-secondary">${SOL.semestre}</div>
                                                            <div class="col-7 col-sm-3">
                                                                <h6 class="mb-0">Generación</h6>
                                                            </div>
                                                            <div class="col-5 col-sm-3 text-secondary">${SOL.generacion}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Modalidad</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">${getModalidadCurso(SOL.modalidad)}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Procedencia:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">${SOL.tipo_procedencia} </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Contacto:</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary"><a href="mailto:${SOL.email}" class="text-secondary"><i class="fas fa-paper-plane"></i> ${SOL.email}</a>
                                                             <br> <i class="fas fa-mobile-alt"></i> ${SOL.telefono}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Solicitud:</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">${getLegibleFechaHora(SOL.fecha_solicitud)}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-7 col-sm-3">
                                                                <h6 class="mb-0">Costo:</h6>
                                                            </div>
                                                            <div class="col-5 col-sm-3 text-secondary">$${SOL.costo_real}</div>
                                                            <div class="col-7 col-sm-3">
                                                                <h6 class="mb-0">Descuento:</h6>
                                                            </div>
                                                            <div class="col-5 col-sm-3 text-secondary">${descuento}</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h6 class="mb-0">Estatus de la Inscripción</h6>
                                                            </div>
                                                            <div class="col-sm-4 text-secondary">${estadoSolicitud}</div>
                                                            <div class="col-sm-4 text-secondary">${estadoPago}</div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="list-2-${cont}" role="tabpanel"  aria-labelledby="list-profile-list">
                                        <div class="table-responsive" id="containerDocs-${cont}">
                                            <h1>DOCUMENTACION</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
            }
        );
    }
    else{
        template += `<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">No hay archivos</h4>
                      <p>No has enviado solicitudes aún. Una vez envies una solicitud, aparecera aqui la documentación que debes enviar.</p>
                      <hr>
                      <p class="mb-0">Si aun no te has inscrito a algun curso/tarres ve a tu <a href="./home">inicio</a> para ver los grupos abietos a inscripción</p>
                    </div>`;
    }
    $("#containerFichas").html(template);
    $("#contadorDocs").html(sumaDocs);
}

function showDocs(contador, collapse) {
    let ElementDOM = $(collapse)[0];
    let idAcordion = $(ElementDOM).attr("id");
    let idInsc = $(ElementDOM).attr("idInsc");
    ID_FICHA = idInsc;
    if (!$('#'+idAcordion).hasClass("collapsed")){
        consultaAsyncDocsRevisaAlum(idInsc,1).then(function (response) {
            console.log(response);
            let templateDocs = buildTBLDocsSolicitadosAlumno(response);
            let container = $("#containerDocs-"+contador);
            container.html(templateDocs);
        })
    }
}

function goFichaInsc(idInscripcion) {
    let url = 'ficha-inscripcion';
    redirect_by_post(url, {  id: idInscripcion }, false);
}
