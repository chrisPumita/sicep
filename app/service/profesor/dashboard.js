window.onload = function(){
    cargaEstadisticas();
    cargaGruposActuales();
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

async function cargaGruposActuales() {
    consultaAsyncHistorialAsign(5,99).then(function (datos) {
        console.log(datos);
        buildHTMLCardsDashboard(datos);
    })
}

function buildHTMLCardsDashboard(lista) {
    let template = "";
    let contador =0;
    lista.forEach(
        (doc)=>{
            let colorStatusCurso = getEstatusAsignacionColorIndicator(doc.statusAsignacion);
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
                    <h6 class="name text-center text-secondary">Grupo ${doc.grupo} (${doc.semestre})</h6>
                    <ul class="list-group small">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="fas fa-chalkboard"></i>${getTipoCurso(doc.tipo_curso)} (${doc.no_sesiones} Sesiones)<strong>${getModalidadCurso(doc.modalidad)}</strong>
                        </li>
                    </ul>
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
                        <button class="btn btn-primary mr-3 me-1 mb-1" onclick="openMyAsig(${doc.id_asignacion});">
                                <i class="fas fa-plus"></i> Mas info
                        </button>
                    </div>
                </div>
            </div>`;
        }
    );
    $("#swiperCardsContainer").html(template);
}


function openMyAsig(id) {
    let url = "./detalles-mi-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}
