$(document).ready(function() {
    cargaMisAsignacionesActuales();
});

function cargaMisAsignacionesActuales() {
    consultaAsyncHistorialAsign(5,99).then(function (datos) {
        buildHTMLCardsAsigProf(datos);
    })
}

function buildHTMLCardsAsigProf(lista) {
    let template = "";
    let contador =0;
    if(lista.length > 0) {
        lista.forEach(
            (doc)=>{
                console.log(doc);
                let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
                let btnTemario = doc.link_temario_pdf === "" ?"": `<button class="btn btn-primary mr-3 me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalPdftemario" onclick="viewTemario('${doc.link_temario_pdf}')">
                                                    <i class="fas fa-file-pdf"></i> Temario</button>  `;
                let visible = doc.visible_publico === "1" ? '':'<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>';
                contador++;
                template+= `
                <div class="card single_course pb-3" style="width: 22rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)} ${visible}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img}); ">
                    </div>
                    <h5 class="name text-center pt-lg-3">${doc.codigo} ${doc.nombre_curso}</h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo} (${doc.semestre})</h6>
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
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center">
                    ${btnTemario}                      
                        
                        <button class="btn btn-primary viewCourse me-1 mb-1" <a class="btn btn-primary" 
                            onclick="viewDetailsOfertaPropuesta('${doc.descripcion}','${doc.dirigido_a}','${doc.objetivo}','${doc.antecedentes}','null','null','${doc.id_curso}','${doc.banner_img}','${doc.nombre_curso}','${doc.notas}');">
                            <i class="far fa-eye"></i></button>
                            <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openMyAsig(${doc.id_asignacion});">
                                <i class="fas fa-plus"></i> Mas info
                        </button>
                    </div>
                </div>`;
            }
        );
    }
    else{
        template+= `<div class="alert alert-success w-100" role="alert">
              <h4 class="alert-heading">No hay grupos asignados</h4>
              <p>No ecnontramos grupos activos. Aun no tiene niguna Asignación. El proceso lo realiza el administrador, espere
              a que se realicen las asignaciones y aparacerean aqui.</p>
            </div>`;
    }

    $("#containerCardsAsig").html(template);
}

function openMyAsig(id) {
    let url = "./detalles-mi-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

function viewTemario(link) {
    let tmpPdf = `<embed src="${link}" type="application/pdf" width="100%" height="600px"/>`;
    $("#filePdfView").html(tmpPdf);
}