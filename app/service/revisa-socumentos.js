// lo que sejecuta primero
var SOLICITUDES = null;
$(document).ready(function () {
    consultaDocsPorRevisar();
});

function consultaDocsPorRevisar() {
    //llamado a ffuncion asincrona
    consultaAsyncDocsInscRevisa(0).then(function (result) {
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
                let btnAcredita = SOL.estatusInscripcion ==="0" ? '<a href="#" class="btn btn-success"><i class="fas fa-check-square"></i>Acreditar</a>':'';
                template += `
            <div class="list-group-item list-group-item-action" idInsc="${SOL.id_inscripcion}" id="heading${cont}" data-bs-toggle="collapse" 
            data-bs-target="#collapse${cont}" aria-expanded="true"  aria-controls="collapseOne" role="button" onclick="showDocs('${cont}',this);">
                <div class="d-flex w-100 justify-content-between">
                    <div class="d-flex px-2 py-1 mb-0">
                        <div class="px-3 d-flex align-items-center">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">${SOL.nombre_completo}</h6>
                            <p class="text-xs text-secondary mb-0">${SOL.nombre_curso} [${SOL.grupo}]</p>
                        </div>
                    </div>
                    <small><span class="badge bg-danger" id="contadorBadgeCol-${cont}">${SOL.n_revisa}</span></small>
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
                                <div class="row py-1 m-2">
                                    <p>
                                        ${btnAcredita}
                                        <a href="#" class="btn btn-primary" onclick="goDetailsAlumno('${SOL.id_alumno}');"><i class="fas fa-user"></i></a>
                                        <a href="#" class="btn btn-secondary" onclick="goFichaInsc('${SOL.id_inscripcion}');"><i class="far fa-id-card"></i></a>
                                        <a href="#" class="btn btn-danger" onclick="cancelarInscripcion(1)"><i class="fas fa-ban"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 mt-1">
                                <div class="tab-content text-justify" id="nav-tabContent">
                                    <div class="tab-pane show " id="list-1-${cont}" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="col-12 col-md-12">
                                            <div class="card mb-3">
                                                <div class="py-2">
                                                    <div class="row py-1 m-2">
                                                        <h5 class="text-secondary">Ficha de Inscipción: No${SOL.id_inscripcion}</h5>
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
                      <h4 class="alert-heading">Excelente trabajo!</h4>
                      <p>No tenemos documentos por revisar. Se han revisado todos los documentos o los alumnos no han 
                      enviado la documentación aun.</p>
                      <hr>
                      <p class="mb-0">Si desea ver la documentación pendiente por cada Solicitud de Inscripcion de <a href="./lista-grupos">clic aqui</a> y elija un grupo.</p>
                    </div>`;
    }
    $("#containerFichas").html(template);
    $("#contadorDocs").html(sumaDocs);
}

$(document).on("click", ".deleteDepto", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    var route= "./webhook/delete-depto.php";

});

function cancelarInscripcion(idFicha) {
    sweetConfirm('Cancelar Inscripcion', '¿Estas seguro de que deseas CANCELAR esta inscripción?', function (confirmed) {
        if (confirmed) {
            /*
                        eliminaPreferencia(id,route).then(function () {
                consultaDeptos();
            });
            * */

        }
    });
}

function showDocs(contador, collapse) {
    let ElementDOM = $(collapse)[0];
    let idAcordion = $(ElementDOM).attr("id");
    let idInsc = $(ElementDOM).attr("idInsc");

     if (!$('#'+idAcordion).hasClass("collapsed")){
         consultaAsyncDocsRevisa(idInsc,1).then(function (response) {
             console.log(response);
            let templateDocs = buildTBLDocsSolicitados(response);
             let container = $("#containerDocs-"+contador);
             container.html(templateDocs);
         })
     }
}


function goFichaInsc(idInscripcion) {
 let url = 'ficha-inscripcion';
 redirect_by_post(url, {  id: idInscripcion }, false);
}

function goDetailsAlumno(idAlumno){
    let url = 'detalles-alumno';
    redirect_by_post(url, {  id: idAlumno }, false);
}

/*
ARCHIVO > estado
0. enviado para verificar (default)
1. verificado y aprobado
2. verificado y rechazado
3. incorrecto
4. falso
5. caducado
6. eliminado
* */