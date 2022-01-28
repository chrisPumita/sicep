$(document).ready(function() {
    cargaAsignacionesAlumno();
    cargaListaDoscPndientes();
});

function cargaAsignacionesAlumno() {
    consultaAsyncOfertaAsignAlu().then(function (datos) {
        console.log(datos);
        buildHTMLCards(datos.oferta);
        buildHTMLMisCursosTable(datos.misCursos);
        buildHTMLSolicitudesEnviadas(datos.enviados);
    })
}

function buildHTMLSolicitudesEnviadas(lista) {
    let template = "";
    console.log(lista);
    if (lista.length > 0) {
        template+= `<div class="list-group small">`;
        lista.forEach(
            doc=>{
                template+= `
                            <a href="#" class="list-group-item list-group-item-action" >
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><i class="fas fa-rocket"></i> ${doc.nombre_curso} <span class="small"> (grupo ${doc.grupo})</span></h6>
                                    <span class="badge text-primary">folio ${doc.id_inscripcion}</span>
                                </div>
                                <p class="mb-1">
                                    Prof. ${doc.profesor} <br>
                                    <i class="far fa-paper-plane"></i> enviada el ${doc.fecha_solicitud}
                                </p>
                            </a>
                        `;

            }
        );
        template+= `</div>`;
    }
    else{
        template+= `<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <strong>Sin solicitudes</strong> No hay solicitudes pendientes.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
    }
    $("#containerSolEnviadas").html(template);
}
function buildHTMLMisCursosTable(lista) {
    let template = "";
    let cont = 0;
    if (lista.length > 0) {
        template+= `<table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>PROFESOR</th>
                            <th>DETALLES</th>
                            <th>ESTADO</th>
                            <th>TEMARIO</th>
                        </tr>
                        </thead>
                        <tbody>`;
                        lista.forEach(
                            (curso)=>{
                                cont++;
                                let pdfBoton = curso.link_temario_pdf.length>0 ? `<button type="button" class="btn btn-primary" 
                                        data-bs-toggle="modal" data-bs-target="#modalPdftemario" onclick="viewPDFModal('${curso.link_temario_pdf}','${curso.nombre_curso}');"><i class="fas fa-download"></i></button> `:"";
                                template+= `<tr folio="${curso.id_inscripcion}">
                                            <td>${curso.nombre_curso} (${getTipoCurso(curso.tipo_curso)})
                                            <p>Modalida: ${getModalidadCurso(curso.modalidad)}</p></td>
                                            <td>${curso.profesor}</td>
                                            <td>
                                                <p class="mb-0 text-xs">Grupo: ${curso.grupo}</p>
                                                <p class="mb-0 text-xs">Generacion: ${curso.generacion}</p>
                                                <p class="mb-0 text-xs">Semestre: ${curso.semestre}</p>
                                            </td>
                                            <td>
                                                ${estadoAsig(curso.estatusInscripcion)}
                                            </td>                                            
                                            <td>
                                                 ${pdfBoton}
                                               <button type="button" class="btn btn-primary btnViewFichaInsc"><i class="fas fa-th-list"></i></button>
                                            </td>
                                        </tr>`;
                            }
                        );

        template +=`
                        </tbody>
                    </table>`;
    }
    else {
        template +=`<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">No tienes ningún curso</h4>
                      <p>No hemos encontrado algun curso. Si ya mandaste tu solicitud, y enviado toda la documentacion requerida,
                      es posible que aun este en proceso de <strong>acreditación</strong> por lo que debes ser paciente y esperar.
                      Recuerda que es necesiario enviar todos los documentos requeridos y realizar el pago correspondiente de ser necesario.</p>
                      <hr>
                      <p class="mb-0">Si deseas revisar la documentación que se te solicita, <a href="./documentacion">da clic aqui.</a></p>
                    </div>`;
    }

    $("#containerMisCursos").html(template);
}

function buildHTMLCards(lista) {
    let template = "";
    let contador =0;
    $("#countOferta").html(lista.length);
    if(lista.length >0) {
        lista.forEach(
            (doc)=>{
                let porcentaje = (parseInt(doc.inscritos)*100)/parseInt(doc.cupo);
                let colorBadge,textoLugares;
                let disp = parseInt(doc.cupo)-parseInt(doc.inscritos);
                if(porcentaje<80){
                    colorBadge = "success";
                    textoLugares = disp+" Lugares";
                }
                else if(porcentaje>=80 && porcentaje<100){
                    colorBadge = "warning";
                    textoLugares = disp+" Lugares";
                }
                else{
                    colorBadge = "danger";
                    textoLugares = "CUPO LLENO";
                }
                let lugares = `<span class="badge bg-${colorBadge} position-absolute my-3 mx-3">${textoLugares}</span>`;

                let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
                let btnSolic = parseInt(doc.statusAsignacion) == 1 ? ``
                    :`<span class="badge bg-danger">!</span>`;
                let visible = doc.visible_publico === "1" ? '':'<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>';
                contador++;
                template+= `
            <div class="swiper-slide">
                <div class="card small single_course pb-3" style="width: 20rem;">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)} ${visible}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img}); ">
                    </div>
                    ${lugares}
                    <h5 class="name text-center pt-lg-3">${doc.nombre_curso}</h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo}</h6>
                    <div class="name">
                            <h6 class="mb-1 px-1">Prof. ${doc.nombre_completo}</h6>
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
                        <button class="btn btn-primary mr-3 me-1 mb-1"  data-bs-toggle="modal" data-bs-target="#modalInscripcion">
                                <i class="fas fa-plus"></i> Mas info
                        </button>
                         <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openAsig(${doc.id_asignacion});">
                                <i class="fas fa-clipboard-check"></i> Inscribirme ${btnSolic}
                        </button>
                    </div>
                </div>
            </div>`;
            }
        );
        $("#swiperCardsContainer").html(template);
        let mensajeAdvertencia = `<span class="badge bg-danger">!</span> Considere que su inscripcion puede ser <strong>rechazada</strong>`;
        $("#alertOferta").html(mensajeAdvertencia);
    }else{
        template+= `<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Aun no tenemos grupos disponibles</h4>
                      <p>Lo sentimos, aun no tenemos grupos habilitados para su inscripción. Pero no te preocupes, pronto abriremos
                      nuevos grupos.</p>
                      <hr>
                      <p class="mb-0">Si tienes alguna duda de los cursos, porfavor comunicare directamente al centro de computo.</p>
                    </div>`;
        $("#swiperCardsContainer").addClass("d-none");
        $("#alertOferta").html(template);
    }
}

function buildHTMLListDoscPend(lista) {
    let template = "";
    console.log(lista);
    if (lista.length > 0) {
        template+= `<div class="list-group small">`;
        lista.forEach(
          doc=>{
              let estadoFile = getTipoEstado(doc.estatusFile,doc.estadoRevisado);
              let colorBadge = "";
              switch (estadoFile) {
                  case 0: //archivo enviado
                      colorBadge = "warning";
                      break;
                  case 1: // archivo recivido
                      colorBadge = "success";
                      break;

                  case -1:
                        //archivo con detallle
                      colorBadge = "danger";
                      break;

                  default:
                      botonesPDF = "";
                      botonesAcion = "";
                      fechaInfo = "El archivo fue rechazado y regresado al alumno.";
                      break;
              }
              template+= `
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><i class="fas fa-file-upload"></i> ${doc.nombre_doc}</h6>
                                    <small><i class="fas fa-circle text-${colorBadge}"></i></small>
                                </div>
                                <p class="mb-1">
                                    ${doc.nombre_curso} (${doc.grupo})
                                </p>
                            </a>
                        `;

          }
        );
        template+= `</div>`;
    }
    else{
        template+= `<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <strong>Buenas noticias!</strong> No hay documentos pendientes por enviar
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
    }
    $("#containerDocsPend").html(template);
}

function viewPDFModal(link,curso) {
    //let template = `<embed src="${link}" frameborder="0" width="100%" height="100%">`;
    let template = `<iframe src="${link}" style="width:100%; height:100%;" frameborder="0"></iframe>`;
    $("#filePdfView").html(template);
    $("#modalTittle").html("Temario de "+curso);
}



function cargaListaDoscPndientes() {
    consultaAsyncDocsRevisaAlu(0,1).then(function (result) {
        buildHTMLListDoscPend(result);
    })
}

$(document).on("click", ".btnViewFichaInsc", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
});

function openAsig(id) {
    //inscripcion
    var url = './inscripcion';
    redirect_by_post(url, {  id: id }, false);
}