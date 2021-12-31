//Llamamdo de la pagina
$(document).ready(function() {
    console.log("FUNCIONANDO");
    cargaAsignacionesActuales();
});

function cargaAsignacionesActuales() {
    consultaAsyncHistorialAsign(3,1).then(function (datos) {
        console.log(datos);
        buildHTMLCards(datos);
    })
}

function buildHTMLCards(lista) {
    let template = "";
    let contador =0;
    lista.forEach(
        (doc)=>{
            let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
            let btnSolic = parseInt(doc.solicitudesPendientes) >0 ? `
                        <button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                <i class="fas fa-clipboard-check"></i>Solicitudes <span class="badge bg-danger">4</span>
                        </button>`
                :`
                <button class="btn btn-primary mr-3 me-1 mb-1" disabled data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                <i class="fas fa-clipboard-check"></i>Sin solicitudes
                        </button>`;
            let visible = doc.visible_publico === "1" ? '':'<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>';
            contador++;
            template+= `
                <div class="card single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)} ${visible}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img}); ">
                    </div>
                    <span class="badge bg-info ">${doc.inscritos}/${doc.cupo} Disponibles</span>
                    <h5 class="name text-center pt-lg-3">${doc.nombre_curso}</h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo}</h6>
                    <div class="recent-message d-flex px-3">
                        <div class="avatar avatar-lg">
                            <img src="${doc.img_perfil}">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">${doc.nombre_completo}</h5>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="list-group list-group-horizontal mb-1 px-2 text-center" role="tablist">
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
                        <div class="tab-content text-justify">
                            <div class="tab-pane fade show active" id="list-1-${contador}" role="tabpanel" aria-labelledby="list1-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-paper-plane"></i> Inscripciones<br> del ${getLegibleFecha(doc.fecha_inicio_inscripcion)}<br> al ${getLegibleFecha(doc.fecha_lim_inscripcion)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-2-${contador}" role="tabpanel" aria-labelledby="list2-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-caret-square-right text-success"></i> Periodo escolar <br> del ${getLegibleFecha(doc.fecha_inicio)}<br> al ${getLegibleFecha(doc.fecha_fin)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-3-${contador}" role="tabpanel" aria-labelledby="list3-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong><i class="fas fa-check-double text-info"></i> Calificaciones<br> del ${getLegibleFecha(doc.fecha_inicio_actas)}<br> al ${getLegibleFecha(doc.fecha_inicio_actas)}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-4-${contador}" role="tabpanel" aria-labelledby="list4-${contador}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-tag"></i>Costo:<strong> $${doc.costo_real}</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <i class="fas fa-chalkboard"></i>${getTipoCurso(doc.tipo_curso)} (${doc.no_sesiones} Sesiones)<strong>${getModalidadCurso(doc.modalidad)}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(${doc.id_asignacion});">
                                <i class="fas fa-plus"></i> Mas info
                        </button>
                        ${btnSolic}
                    </div>
                </div>`;
        }
    );
    $("#containerCardsAsig").html(template);
}

function openAsig(id) {
    let url = "./detalles-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}