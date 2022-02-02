$(document).ready(function() {
    cargaMisSolicitudes();
});

function cargaMisSolicitudes() {
    consultaAsyncOfertaAsignAlu().then(function (datos) {
        console.log(datos);
        buildHTMLMisCursos(datos.misCursos);
        buildHTMLEnviadas(datos.enviados);
        buildHTMLSolicitudesCanceladas(datos.cancelados);
    })
}


function buildHTMLMisCursos(lista) {
    let template = "";
    let contador =0;
    $("#countOferta").html(lista.length);
    if(lista.length >0) {
        lista.forEach(
            (doc)=>{

                let lugares = doc.validacion_constancia ==="1" ? `<a class=" position-absolute my-3 mx-3" href="./constancias"><span class="badge bg-primary" role="button"><i class="fas fa-file-contract"></i> CONSTANCIA</span></a> `: "";

                let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
                let botonPdf = doc.link_temario_pdf ==="" ? ``:`<button type="button" class="btn btn-outline-primary" onclick="viewPDFModal('${doc.link_temario_pdf}','${doc.nombre_curso}');"  data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-file-pdf"></i></button>`;
                contador++;
                template+= `
                <div class="card small single_course pb-1 text-center" style="width: 18rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img}); ">
                    </div>
                    ${lugares}
                    <h5 class="name text-center pt-lg-3">${doc.nombre_curso}</h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo}</h6>
                    <div class="name">
                            <h6 class="mb-1 px-1">Prof. ${doc.nombre_completo}</h6>
                        </div>
                    <div class="py-1">
                        <div class="list-group list-group-horizontal mb-1 px-2 text-center small" role="tablist">
                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-${contador}" data-bs-toggle="list" href="#list-1-${contador}" role="tab">
                                <i class="fas fa-paper-plane"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list2-${contador}" data-bs-toggle="list" href="#list-2-${contador}" role="tab">
                                <i class="fas fa-caret-square-right"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list3-${contador}" data-bs-toggle="list" href="#list-3-${contador}" role="tab">
                                <i class="fas fa-check-double"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list4-${contador}" data-bs-toggle="list" href="#list-4-${contador}" role="tab">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                        </div>
                        <div class="tab-content  px-2 text-justify small">
                            <div class="tab-pane fade show active" id="list-1-${contador}"  aria-labelledby="list1-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del ${getLegibleFecha(doc.fecha_inicio_inscripcion)}<br> al ${getLegibleFecha(doc.fecha_lim_inscripcion)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-2-${contador}"  aria-labelledby="list2-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item  justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del ${getLegibleFecha(doc.fecha_inicio)}<br> al ${getLegibleFecha(doc.fecha_fin)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-3-${contador}"  aria-labelledby="list3-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del ${getLegibleFecha(doc.fecha_inicio_actas)}<br> al ${getLegibleFecha(doc.fecha_inicio_actas)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-4-${contador}"  aria-labelledby="list4-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-comment-dollar"></i>Costo:<strong> $${doc.costo_real}</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-chalkboard"></i>${getTipoCurso(doc.tipo_curso)} (${doc.no_sesiones} Sesiones)<strong>${getModalidadCurso(doc.modalidad)}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-block justify-content-center py-3">
                         <div class="btn-group btn-group-sm" role="group" aria-label="...">
                           <button type="button" class="btn btn-outline-primary" onclick="viewDescuentos('${doc.id_curso}','${doc.costo_real}');" data-bs-toggle="modal" data-bs-target="#modalDescuentos"><i class="fas fa-tag"></i></button>
                            ${botonPdf}
                          <button type="button" class="btn btn-outline-primary" onclick="consultaHorarioGpoListModal('${doc.id_grupo}','${doc.modalidad}')"   data-bs-toggle="modal" data-bs-target="#modalHorario"><i class="fas fa-clock" ></i></button>
                          <button type="button" class="btn btn-outline-primary" onclick="viewDetailsOferta('${doc.descripcion}','${doc.dirigido_a}','${doc.objetivo}','${doc.notas}','${doc.antecedentes}','${doc.id_curso}','${doc.nombre_curso}');" data-bs-toggle="modal" data-bs-target="#detallesCurso" > <i class="fas fa-list"></i></button>
                        </div>
                         <button class="btn btn-primary mr-3 me-1  btn-sm" onclick="viewFicchaInscripcion(${doc.id_inscripcion});"><i class="fas fa-clipboard-check"></i> Ficha Insc.</button>
                    </div>
                </div>`;
            }
        );
        $("#containerCardsAsig").html(template);
        let mensajeAdvertencia = `<span class="badge bg-danger">!</span> Considere que su inscripcion puede ser <strong>rechazada</strong>`;
        $("#alertOferta").html(mensajeAdvertencia);
    }else{
        template+= `<div class="alert alert-success w-100" role="alert">
                      <h4 class="alert-heading">No hay Inscripciones Acreditadas.</h4>
                      <p>Lo sentimos, aun no tienes algun curso. Si ya enviaste solicitud, espera a que sea acreditado por los administradores.
                      Ten en cuenta que parte importante de algunos cursos es la documentacion, asi que asegurate de que haber enviado tus documentos.</p>
                      <hr>
                      <p class="mb-0">Si tienes alguna duda de los cursos, porfavor comunicare directamente al centro de computo.</p>
                    </div>`;
        $("#swiperCardsContainer").addClass("d-none");
        $("#containerCardsAsig").html(template);
    }
}

function buildHTMLEnviadas(lista) {
    let template = "";
    let contador =0;
    if(lista.length >0) {
        lista.forEach(
            (doc)=>{

                let lugares = doc.validacion_constancia ==="1" ? `<a class=" position-absolute my-3 mx-3" href="./constancias"><span class="badge bg-primary" role="button"><i class="fas fa-file-contract"></i> CONSTANCIA</span></a> `: "";

                let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
                let botonPdf = doc.link_temario_pdf ==="" ? ``:`<button type="button" class="btn btn-outline-primary" onclick="viewPDFModal('${doc.link_temario_pdf}','${doc.nombre_curso}');"  data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-file-pdf"></i></button>`;
                contador++;
                template+= `
                <div class="card small single_course pb-1 text-center" style="width: 18rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img}); ">
                    </div>
                    ${lugares}
                    <h5 class="name text-center pt-lg-3">${doc.nombre_curso}</h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo}</h6>
                    <div class="name">
                            <h6 class="mb-1 px-1">Prof. ${doc.nombre_completo}</h6>
                        </div>
                    <div class="py-1">
                        <div class="list-group list-group-horizontal mb-1 px-2 text-center small" role="tablist">
                            <a class="list-group-item list-group-info list-group-item-action active" id="list1-send${contador}" data-bs-toggle="list" href="#list-1-send${contador}" role="tab">
                                <i class="fas fa-paper-plane"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list2-send${contador}" data-bs-toggle="list" href="#list-2-send${contador}" role="tab">
                                <i class="fas fa-caret-square-right"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list3-send${contador}" data-bs-toggle="list" href="#list-3-send${contador}" role="tab">
                                <i class="fas fa-check-double"></i>
                            </a>
                            <a class="list-group-item list-group-info list-group-item-action" id="list4-send${contador}" data-bs-toggle="list" href="#list-4-send${contador}" role="tab">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                        </div>
                        <div class="tab-content  px-2 text-justify small">
                            <div class="tab-pane fade show active" id="list-1-send${contador}"  aria-labelledby="list1-send${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del ${getLegibleFecha(doc.fecha_inicio_inscripcion)}<br> al ${getLegibleFecha(doc.fecha_lim_inscripcion)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-2-send${contador}"  aria-labelledby="list2-send${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item  justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del ${getLegibleFecha(doc.fecha_inicio)}<br> al ${getLegibleFecha(doc.fecha_fin)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-3-send${contador}"  aria-labelledby="list3-send${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del ${getLegibleFecha(doc.fecha_inicio_actas)}<br> al ${getLegibleFecha(doc.fecha_inicio_actas)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-4-send${contador}"  aria-labelledby="list4-send${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-comment-dollar"></i>Costo:<strong> $${doc.costo_real}</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-chalkboard"></i>${getTipoCurso(doc.tipo_curso)} (${doc.no_sesiones} Sesiones)<strong>${getModalidadCurso(doc.modalidad)}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-block justify-content-center py-1">
                         <div class="btn-group btn-group-sm" role="group" aria-label="...">
                           <button type="button" class="btn btn-outline-primary" onclick="viewDescuentos('${doc.id_curso}','${doc.costo_real}');" data-bs-toggle="modal" data-bs-target="#modalDescuentos"><i class="fas fa-tag"></i></button>
                            ${botonPdf}
                          <button type="button" class="btn btn-outline-primary" onclick="consultaHorarioGpoListModal('${doc.id_grupo}','${doc.modalidad}')"   data-bs-toggle="modal" data-bs-target="#modalHorario"><i class="fas fa-clock" ></i></button>
                          <button type="button" class="btn btn-outline-primary" onclick="viewDetailsOferta('${doc.descripcion}','${doc.dirigido_a}','${doc.objetivo}','${doc.notas}','${doc.antecedentes}','${doc.id_curso}','${doc.nombre_curso}');" data-bs-toggle="modal" data-bs-target="#detallesCurso" > <i class="fas fa-list"></i></button>
                        </div>
                        <div class="d-flex  justify-content-center py-1">
                            <button class="btn btn-primary mr-3 me-1  btn-sm" onclick="viewFicchaInscripcion(${doc.id_inscripcion});"><i class="fas fa-clipboard-check"></i> Ficha Insc.</button>
                            <button class="btn btn-danger mr-3 me-1  btn-sm" onclick="cancelarSolicitud(${doc.id_inscripcion});"><i class="far fa-times-circle text"></i> Cancelar</button>
                        </div>
                    </div>
                </div>`;
            }
        );
        $("#swiperCardsContainer").html(template);
    }else{
        template+= `<div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                      <strong>Sin solicitudes </strong> No hay solicitudes pendientes por aprobar. Si deseas inscribirte a algun curso,
                      revisa <a href="./home"> tu inicio</a> los grupos abiertos.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
        $("#swiperCardsContainer").html(template);
    }
}

function buildHTMLSolicitudesCanceladas(lista) {
    let template = "";
    if (lista.length > 0) {
        template+= `<div class="list-group small">`;
        lista.forEach(
            doc=>{
                template+= `
                            <a href="#" class="list-group-item list-group-item-action" onclick="viewFicchaInscripcion('${doc.id_inscripcion}');" >
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><i class="fas fa-rocket"></i> ${doc.nombre_curso}</h6>
                                    <span class="badge text-primary"><mark class="small bg-danger text-light">CANCELADA</mark></span>
                                </div>
                                <p class="mb-1">
                                    Grupo ${doc.grupo} ${doc.semestre} <br>
                                    Prof. ${doc.profesor} <br>
                                    <i class="far fa-times-circle"></i> Cancelado el ${doc.fecha_conclusion}
                                </p>
                            </a>
                        `;

            }
        );
        template+= `</div>`;
    }
    else{
        template+= `<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <strong>Sin solicitudes</strong> Ninguna Solicitud ha sido cancelada.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
    }
    $("#containerSolEnviadas").html(template);
}

function cancelarSolicitud(idSolicitud) {
    sweetConfirm('Cancelar Solicitud', '¿Estas seguro de que cancelar la solicitud? Ya NO podrás enviar solicitud de nuevo.', async function (confirmed) {
        if (confirmed) {
            cancelarSolicitudAlumno(idSolicitud).then(function (result) {
                if (result.messageType == 1){
                    alertaEmergente(result.messageText);
                    cargaMisSolicitudes();
                }

                else if (result.messageType == 0){
                    alerta("Peticion no procesada",result.messageText, "error");

                }
                else { alerta("Error Interno",result.messageText, "error"); }
            })
        }
    });
}