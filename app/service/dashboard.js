console.log("DASHBOAR ACTIVE");
window.onload = function(){
    cargaEstadisticas();
    cargaGruposActuales();
    cargaCursosActivos();
}

function cargaEstadisticas() {
    contadoresDashboard().then(function (result) {
        buildPanelEstadistica(result);
    })
}

function buildPanelEstadistica(datos) {
    $("#panelCursosCount").html(datos.countCursos);
    $("#panelAlumnosCount").html(datos.countAlumnos);
    $("#panelSolCount").html(datos.countSolic);
    $("#panelConstanciasCount").html(datos.countConstancias);
    loadEstadisticaHM(datos.conteoHM);
    loadInscripciones(datos.countRegistros);
    loadUltimosPagos(datos.ultimosPagos);
}

function loadEstadisticaHM(DATA) {
    let H = DATA.find(x=>x.sexo === "0");
    let M = DATA.find(x=>x.sexo === "1");
    let optionsVisitorsProfile  =
        {
        series: [parseFloat(H.PORCENTAJE), parseFloat(M.PORCENTAJE)],
        labels: ['Hombres ('+H.suma+')', 'Mujeres ('+M.suma+')'],
        formatter: function (val) {
            return val + " %"
        },
        colors: ['#196398','#CDAC12'],
        chart: {
            type: 'donut',
            width: '100%',
            height:'350px'
        },
        legend: {
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '30%'
                }
            }
        }
    }
    var chartVisitorsProfile = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsVisitorsProfile);
    chartVisitorsProfile.render();
}

function loadInscripciones(DATA) {
    datos = [];
    meses = [];
    DATA.forEach(item => {
        datos.push(item.Valor);
        meses.push(item.Mes +' '+item.anio);
    });

    var optionsProfileVisit = {
        annotations: {
            position: 'back'
        },
        dataLabels: {
            enabled:false
        },
        chart: {
            type: 'bar',
            height: 300
        },
        fill: {
            opacity:1
        },
        plotOptions: {
        },
        series: [{
            name: 'Solicitudes',
            data: datos
        }],
        colors: '#196398',
        xaxis: {
            categories: meses,
        },
    }
    var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), optionsProfileVisit);
    chartProfileVisit.render();
}

async function cargaGruposActuales() {
    consultaAsyncHistorialAsign(3,1).then(function (datos) {
        let lista = datos.filter(x=>parseInt(x.statusAsignacion)<10);
        buildHTMLCardsDashboard(lista);
    })
}

function buildHTMLCardsDashboard(lista) {
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
            <div class="swiper-slide">
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
                </div>
            </div>`;
        }
    );
    $("#swiperCardsContainer").html(template);
}

function loadUltimosPagos(DATA) {
    console.log(DATA);
    let template = ``;
    if (DATA.length > 0) {
        DATA.forEach(
            (pago)=>
            {
                template += `<a href="#" class="list-group-item list-group-item-action" onclick="goFichaInsc('${pago.id_inscripcion_fk}');"
                data-bs-toggle="tooltip" data-bs-placement="top" title="${pago.notas}">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><i class="fas fa-tag"></i> Inscripcion No ${pago.id_inscripcion_fk} </h6>
                                                    <small>$${pago.monto_pago_realizado}</small>
                                                </div>
                                                <small>${pago.nombre_completo} | ${pago.fecha_validacion}</small>
                                            </a>`;
            }
        );
        template +=`<div class="row py-3">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <a href="#" class="btn btn-primary me-1 mb-1">Ver todos</a>
                        </div>
                    </div>`;
    }
    else{
        template = `<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">No hay pagos aun</h4>
                      <p>No se han registrado Pagos en los ultimos 30 Días.</p>
                      <hr>
                      <p class="mb-0">Si desea ver todos los pagos registrados, de clic <a href="#">aqui</a></p>
                    </div>`;
    }
    $("#listaUltimosPagos").html(template);
}

function cargaCursosActivos() {
    //llamado a funcion asincrona de cursos
    cargaCursos(0,1).then(function (JSONData) {
        console.log(JSONData);
        let listaHtml = buildCaroucelDashboardCursos(JSONData);
        $("#caroucel-courses-dashboard").html(listaHtml);
    });
}

function buildCaroucelDashboardCursos(CURSOS) {
    let template = "";
    if (CURSOS.length > 0) {
    template +=  `<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carouselfade">
                        <ol class="carousel-indicators">`;
    for (let i = 0; i < CURSOS.length; i++){
        let active = i==0 ? 'class="active"':'';
        template +=  `<li data-bs-target="#carouselExampleFade" data-bs-slide-to="${i}" ${active}></li>`;
    }

        template +=  ` </ol>
                    <div class="carousel-inner"> `;
        for (let i = 0; i < CURSOS.length; i++){
            let active = i==0 ? 'active':'';
            template +=  `<div class="carousel-item ${active}">
                            <div class="overlay" style="z-index: 0; opacity: 0.5;" ></div>
                            <img src="${CURSOS[i].banner_img}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>${CURSOS[i].nombre_curso}</h5>
                                <p>Creado por ${CURSOS[i].nombre_completo}</p>
                                <a href="#" class="btn btn-primary viewCourse me-1 mb-1" onclick="viewCurso(${CURSOS[i].id_curso})"><i class="far fa-eye"></i> Ver más..</a>
                                <a href="#" class="btn btn-primary viewCourse me-1 mb-1" onclick="openGroup(${CURSOS[i].id_curso})"><i class="fas fa-users"></i> Abrir Grupo</a>
                            </div>
                        </div>`;
        }
        template +=  `
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                           data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>`;
    }
    else{
        template = `<div class="alert alert-danger " role="alert">
                        <div class="d-flex align-items-center">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <p>No hay ningun curso disponible. Porfavor acredite un curso para comenzar a operar.</p>  
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <a href="./lista-cursos">
                            <button type="button" class="btn btn-primary btn-sm">Ver cursos</button>
                            </a>
                        </div>
                       
                    </div>`;
    }

    return template;
}


function openAsig(id) {
    let url = "./detalles-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}


function viewCurso(id) {
    var url = './detalles-curso';
    redirect_by_post(url, { id: id }, false);
}

function openGroup(id) {
    let url = "./nueva-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

function goFichaInsc(idInscripcion) {
    let url = 'ficha-inscripcion';
    redirect_by_post(url, {  id: idInscripcion }, false);
}