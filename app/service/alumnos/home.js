$(document).ready(function() {
    cargaAsignacionesAlumno();
    cargaListaDoscPndientes();
});

function cargaAsignacionesAlumno() {
    consultaAsyncOfertaAsignAlu().then(function (datos) {
        console.log(datos);
        buildHTMLCards(datos.oferta);
        buildHTMLMisCursosTable(datos.misCursos);
        buildHTMLSolicitudesEnviadas(datos.enviados,datos.cancelados);
    })
}

function buildHTMLSolicitudesEnviadas(lista,cancelados) {
    let template = "";
    if (lista.length > 0) {
        template+= `<div class="list-group small">`;
        lista.forEach(
            doc=>{
                template+= `
                            <a href="#" class="list-group-item list-group-item-action" onclick="viewFicchaInscripcion('${doc.id_inscripcion}');" >
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><i class="fas fa-rocket"></i> ${doc.nombre_curso} <span class="small">[Gpo ${doc.grupo}]</span></h6>
                                    <span class="badge text-primary">Enviada</span>
                                </div>
                                <p class="mb-1">
                                Grupo ${doc.grupo}<br>
                                    Prof. ${doc.profesor} <br>
                                    <i class="far fa-paper-plane"></i> enviada el ${doc.fecha_solicitud}
                                </p>
                            </a>
                        `;

            }
        );
        if (cancelados.length > 0){
            cancelados.forEach(
                doc=>{
                    template+= `
                            <a href="#" class="list-group-item list-group-item-action" onclick="viewFicchaInscripcion('${doc.id_inscripcion}');" >
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><i class="fas fa-rocket"></i> ${doc.nombre_curso} <span class="small">[Gpo ${doc.grupo}]</span></h6>
                                    <span class="badge text-primary"><mark class="small bg-danger text-light">CANCELADA</mark></span>
                                </div>
                                <p class="mb-1">
                                    Prof. ${doc.profesor} <br>
                                    <i class="far fa-times-circle"></i> Cancelado el ${doc.fecha_conclusion}
                                </p>
                            </a>
                        `;

                }
            );
        }
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
                            <th><i class="fas fa-folder-open"></i> DOCUMENTOS</th>
                            <th><i class="fas fa-ellipsis-h"></i></th>
                        </tr>
                        </thead>
                        <tbody>`;
                        lista.forEach(
                            (curso)=>{
                                cont++;
                                let botonPdf = curso.link_temario_pdf ==="" ? ``:`<button type="button" class="btn btn-outline-primary" onclick="viewPDFModal('${curso.link_temario_pdf}','${curso.nombre_curso}');"  data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-file-pdf"></i></button>`;
                                template+= `<tr folio="${curso.id_inscripcion}">
                                            <td>${curso.nombre_curso} (${getTipoCurso(curso.tipo_curso)})
                                            <p>Modalida: ${getModalidadCurso(curso.modalidad)}</p></td>
                                            <td>${curso.profesor}</td>
                                            <td style="width: 10rem;">
                                                <p class="mb-0 text-xs">Grupo: ${curso.grupo}</p>
                                                <p class="mb-0 text-xs">Generacion: ${curso.generacion}</p>
                                                <p class="mb-0 text-xs">Semestre: ${curso.semestre}</p>
                                            </td>
                                            <td style="width: 10rem;">
                                                Registrada el ${getLegibleFechaHora(curso.fecha_solicitud)}
                                            </td>   
                                            <td>
                                                <span class="badge bg-success">${curso.n_enviados}/${curso.n_sol} Acreditados</span> 
                                                <span class="badge bg-danger"><i class="fas fa-exclamation-triangle"></i> ${curso.n_retornados} Rechazados</span>
                                                <span class="badge bg-info"><i class="fas fa-clock"></i> ${curso.n_revisa} Por revisar</span>
                                            </td>                                         
                                            <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="...">${botonPdf}
                                              <button type="button" class="btn btn-outline-primary" onclick="consultaHorarioGpoListModal('${curso.id_grupo}','${curso.modalidad}')"   data-bs-toggle="modal" data-bs-target="#modalHorario"><i class="fas fa-clock" ></i></button>
                                              <button type="button" class="btn btn-outline-primary" onclick="viewDetailsOferta('${curso.descripcion}','${curso.dirigido_a}','${curso.objetivo}','${curso.notas}','${curso.antecedentes}','${curso.id_curso}','${curso.nombre_curso}');" data-bs-toggle="modal" data-bs-target="#detallesCurso" > <i class="fas fa-list"></i></button>
                                              <button type="button" class="btn btn-primary btnViewFichaInsc"><i class="fas fa-clipboard-check"></i></button>
                                            </div>
                                               
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
                let botonPdf = doc.link_temario_pdf ==="" ? ``:`<button type="button" class="btn btn-outline-primary" onclick="viewPDFModal('${doc.link_temario_pdf}','${doc.nombre_curso}');"  data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-file-pdf"></i></button>`;
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
                        <div class="tab-content text-justify small">
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
                    <div class="col-sm-12 d-block justify-content-center ">
                         <div class="btn-group btn-group-sm" role="group" aria-label="...">
                           <button type="button" class="btn btn-outline-primary" onclick="viewDescuentos('${doc.id_curso}','${doc.costo_real}');" data-bs-toggle="modal" data-bs-target="#modalDescuentos"><i class="fas fa-tag"></i></button>
                          ${botonPdf}
                          <button type="button" class="btn btn-outline-primary" onclick="consultaHorarioGpoListModal('${doc.id_grupo}','${doc.modalidad}')"   data-bs-toggle="modal" data-bs-target="#modalHorario"><i class="fas fa-clock" ></i></button>
                          <button type="button" class="btn btn-outline-primary" onclick="viewDetailsOferta('${doc.descripcion}','${doc.dirigido_a}','${doc.objetivo}','${doc.notas}','${doc.antecedentes}','${doc.id_curso}','${doc.nombre_curso}');" data-bs-toggle="modal" data-bs-target="#detallesCurso" > <i class="fas fa-list"></i></button>
                        </div>
                         <button class="btn btn-primary mr-3 me-1  btn-sm" onclick="openAsig(${doc.id_asignacion});">
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
    if (lista.length > 0) {
        let listaAgrupada = agrupar(lista);
    let contador = 0;
    template+= `<div class="accordion accordion-flush" id="accordionFlushExample">`;
        listaAgrupada.forEach(curso=>{
            contador++;
            template+= `<div class="accordion-item">
                        <button class="list-group-item list-group-item-action collapseTittle"  data-bs-toggle="collapse" 
                        data-bs-target="#flush-collapse${contador}" aria-expanded="false" aria-controls="flush-collapse${contador}">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><i class="fas fa-chalkboard"></i> Grupo ${curso.grupo} </h6>
                                <small><span class="badge bg-primary">${curso.DOCS.length}</span></small>
                            </div>
                            <p class="mb-1">
                               ${curso.curso}
                            </p>
                        </button>
                        <div id="flush-collapse${contador}" class="accordion-collapse collapse" aria-labelledby="flush-heading${contador}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-group">`;
                                curso.DOCS.forEach(doc=>{
                                    let estadoFile = getTipoEstado(doc.estatusFile,doc.estadoRevisado);
                                    let colorBadge = "", icon;
                                    switch (estadoFile) {
                                        case 0: //archivo enviado
                                            colorBadge = "info";
                                            icon = '<i class="fas fa-paper-plane"></i>';
                                            break;
                                        case 1: // archivo recivido
                                            colorBadge = "success";
                                            icon = '<i class="fas fa-check-square"></i>';
                                            break;

                                        case -1:
                                            //archivo con detallle
                                            colorBadge = "warning";
                                            icon = '<i class="fas fa-upload"></i>';
                                            break;

                                        default:
                                            colorBadge = "danger";
                                            icon = '<i class="fas fa-exclamation-circle"></i>';
                                            fechaInfo = "El archivo fue rechazado y regresado al alumno.";
                                            break;
                                    }
                                    template+= `
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center " onclick="viewFicchaInscripcion(${doc.id_inscripcion});" role="button">
                                        <span>${doc.nombre_doc}</span>
                                        <span class="badge bg-${colorBadge} badge-pill badge-round ml-1 small">${icon}</span>
                                    </li>`;
                                })

                               template+= ` </ul>
                            </div>
                        </div>
                    </div>`;
        });
    template+= ` </div>`;
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
function viewDetailsOferta(desc,dirigido,objetivo,notas,antecedentes, idCurso, nombreCurso) {
    $("#modalDetails").html(desc);
    $("#modalObjetivo").html(objetivo);
    $("#modalAntecede").html(antecedentes);
    $("#modalDirige").html(dirigido);
    $("#idDetailsOferta").html(nombreCurso);
    $("#modalNotas").html(notas ===""? "SIN NOTAS": notas);
    //buscar el horario del curso
    cargaTemarioOferta(idCurso);
}

function agrupar(listaDocs) {
    var nuevoArray    = []
    var arrayTemporal = []
    for(var i=0; i<listaDocs.length; i++){
        if(listaDocs[i].estatusFile!=1){
            arrayTemporal = nuevoArray.filter(resp => resp["id"] == listaDocs[i]["id_inscripcion"]);
            if(arrayTemporal.length>0){
                nuevoArray[nuevoArray.indexOf(arrayTemporal[0])]["DOCS"].push(listaDocs[i])
            }else{
                nuevoArray.push({
                    "id" : listaDocs[i]["id_inscripcion"] , "curso" : listaDocs[i]["nombre_curso"] , "grupo" : listaDocs[i]["grupo"] ,
                    "DOCS" : [listaDocs[i]]});
            }
        }
    }
    return nuevoArray;
}

function cargaListaDoscPndientes() {
    consultaAsyncDocsRevisaAlu(0,1).then(function (result) {
        buildHTMLListDoscPend(result);
    })
}

$(document).on("click", ".btnViewFichaInsc", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
});

function viewFicchaInscripcion(id) {
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
}

function openAsig(id) {
    //inscripcion
    var url = './inscripcion';
    redirect_by_post(url, {  id: id }, false);
}

function viewDescuentos(idCurso,costoAplicado) {
    consultaTblDescuentosAplicadosAlumno(idCurso,costoAplicado);
}

function cargaTemarioOferta(idCurso) {
    consultaTemarioOferta(idCurso).then(function (e) {
        buildTBLHtmlTemarioModal(e);
    });
}

function buildTBLHtmlTemarioModal(TEMAS) {
    let template;
    if (TEMAS.length > 0) {
        template= `
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>INDICE</th>
                        <th>TEMA</th>
                        <th>DESCRIPCIÓN</th>
                    </tr>
                    </thead>
                <tbody>`;
        TEMAS.forEach(
            (tema)=>
            {
                template+= `
                        <tr id_tema="${tema.id_tema}">
                            <td>${tema.indice}</td>
                            <td>${tema.nombre}</td>
                            <td>${tema.resumen}</td>
                        </tr>`;
            }
        );
        template+= `
                </tbody>
              </table>`;
    }
    else{
        template= `
                <div class="alert alert-light alert-dismissible show fade">
                   No tenemos temas registrados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblTemario").html(template);
}

function consultaHorarioGpoListModal(idGpo,modalidad) {
    consultaHorarioOferta(idGpo).then(function (e) {
        console.log(e);
        buildHTMLHorarioContainers(e,modalidad)
    });
}

function buildHTMLHorarioContainers(HORARIOS,MODALIDAD) {
    //Separando los tipo de horario
    $("#containerTblPresencial").html("");
    $("#containerTblVirtual").html("");
    if (MODALIDAD === "0"){
        //Presencial
        buildHtmlHPContainer(HORARIOS.HP);
    }
    else if (MODALIDAD === "1"){
        buildHtmlHVContainer(HORARIOS.HV);
    }else{
        buildHtmlHPContainer(HORARIOS.HP);
        buildHtmlHVContainer(HORARIOS.HV);
    }


}
function buildHtmlHVContainer(HVirtual) {
    //TRabajando con virtuales
    let template = `<h5 class="text-secondary"><i class="far fa-clock"></i> Horario Virtual</h5>`;
    if (HVirtual.length>0){
        template +=`
                    <table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACION</th>
                            <th>PLATAFORMA</th>
                            <th>SALA</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HVirtual.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_virtual}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                            <td>${h.plataforma}</td>
                            <td>${h.reunion}</td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>`;
    }
    else{
        template += ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin registro</h4>
                        <p>Aun no hemos registrado los horarios. Porfavor de estar pendiente al sitio para poder ver el 
                        horario establecido.</p>
                          </div>
                        </div>`;
    }
    $("#containerTblVirtual").html(template);
}

function buildHtmlHPContainer(HPresencial) {
    //TRabajando con presenciales
    let template = `<h5 class="text-secondary"><i class="far fa-clock"></i> Horario Precencial</h5>`;
    if (HPresencial.length>0){
        template +=`
                    
                    <table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>SALON</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACION</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HPresencial.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_pres}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.edificio}-${h.grupo} (${h.campus})</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>`;
    }
    else{
        template += ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin registro</h4>
                        <p>Aun no hemos registrado los horarios. Porfavor de estar pendiente al sitio para poder ver el horario establecido.</p>
                          </div>
                        </div>`;
    }
    $("#containerTblPresencial").html(template);
}