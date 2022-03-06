
$(document).ready(function() {
    cargaCursosWeb(0,1).then(function (result) {
        buildCursosCaroucelHtml(result);
    });
    consultaAsyncHistorialAsign(3,1).then(function (datos) {
        let lista = datos.filter(x=>parseInt(x.visible_publico)==1);
        lista = lista.filter(x=>parseInt(x.statusAsignacion)<99);
        buildHTMLCardsDashboard(lista);
    })
});

function buildCursosCaroucelHtml(CURSOS) {
    let template ="";
    CURSOS.forEach(
        (curso)=>{
            template+= `
                <div class="card swiper-slide pt-4">
                    <div class="card card-profile mt-4 w-100" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                            <div class="banner rounded-3 border border-5 d-block blur-shadow-image" style="background-image: url(${curso.banner_img.slice(1)}); ">
                            </div>
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);"></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex mt-n6 mx-auto">
                                <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Refresh">
                                    <i class="fas fa-file-pdf"></i> Temario
                                </a>
                                <button class="btn btn-link text-secondary me-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit">
                                    <i class="fas fa-list"></i> Mas detalles...
                                </button>
                            </div>
                            <h6 class="font-weight-normal mt-1">${getTipoCurso(curso.tipo_curso)}</h6>
                            <h5 class=""> <a href="" class="linkPage">${curso.nombre_curso}</a> </h5>
                            <p class="mb-0"></p>
                            <p></p>
                            <ul class="list-group text-sm-start small">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-bullseye small px-2"></i>${curso.descripcion}
                                </li>
                                <li class="list-group-item d-flex  align-items-center">
                                    <i class="fas fa-users small px-2"></i>${curso.dirigido_a}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>`;
        }
    );
    $("#swiperCardsContainer").html(template);
}

function buildHTMLCardsDashboard(ASIGNACIONES) {
    let template = "";
    let contador =0;
    $("#countAsig").html(ASIGNACIONES.length);
    if (ASIGNACIONES.length > 0) {
        ASIGNACIONES.forEach(
            (doc)=>{
                let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
                let visible = doc.visible_publico === "1" ? '':'<span class="badge bg-danger "><i class="fas fa-eye-slash"></i></span>';
                //doc.inscritos}/${doc.cupo
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

                let btnSolic = porcentaje <50 ? `
                        <a href="./login.php" class="btn btn-primary mr-3 me-1 mb-1" > <i class="fas fa-clipboard-check"></i> Inscribirse </a>`
                    :``;
                contador++;
                template+= `
            <div class="swiper-slide">
                <div class="card single_course pb-3 w-100">
                    <span class="badge bg-dark position-absolute my-3 mx-3 end-0">
                        <div class="blob ${colorStatusCurso} positionBadge"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${getEstatusAsignacionPlano(doc.statusAsignacion)} ${visible}
                    </span>
                    <div class="banner" style="background-image: url(${doc.banner_img.slice(1)}); ">
                    </div>
                    ${lugares}
                    <h5 class="pt-2"> <a href="" class="linkPage">${doc.nombre_curso}</a> </h5>
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo}</h6>
                    <h6 class="font-weight-normal">${doc.nombre_completo}</h6>
                    <div class="py-3 small">
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
                </div>
            </div>`;
            }
        );
        $("#swiperCardsContainerAsig").html(template);
    }
    else{
        template+= `<div class="alert alert-warning mx-5 my-5 text-light" role="alert">
                      <h4 class="alert-heading">Aun no tenemos grupos disponibles</h4>
                      <p>Lo sentimos, aun no tenemos grupos habilitados para su inscripción. Pero no te preocupes, pronto abriremos
                      nuevos grupos.</p>
                      <hr>
                      <p class="mb-0">Si tienes alguna duda de los cursos, porfavor comunicare directamente al centro de computo.</p>
                    </div>`;
        $("#swiperContainer").addClass("d-none");
        $("#alertOferta").html(template);
    }
}


//get courses
async function cargaCursosWeb(filtro, valueID) {
    return await cargaCursosWebAjax(filtro,valueID);
}
/*Async regresa lista del historial de asignaciones*/
async function consultaAsyncHistorialAsign(filtro,idFiltro) {
    return await consultaAsyncHistorialAsignAJAX(filtro,idFiltro);
}

//Funcion ajax de asignaciones
async function consultaAsyncHistorialAsignAJAX(filtro,idFiltro){
    return $.ajax({
        url: "app/webhook/lista-historico-asig.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            idFiltro:idFiltro
        },
        error: function() {
            alert("Error al tratar de traer las asignaciones historicas");
        }
    });
}

async function cargaCursosWebAjax(filtro, valueID) {
    return $.ajax({
        url: "app/webhook/lista-cursos.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            valueID : valueID
        },
        error: function() {
            alert("Error occured")
        }
    });
}