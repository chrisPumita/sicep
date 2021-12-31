<?php $titulo = "Página principal" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "includes/head.php"?>
        <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    </head>
    <body>
        <div id="app">
            <?php include "includes/sidebar.php"?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-content">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Bienvenido a SICEP</h3>
                                <p class="text-subtitle text-muted">Aqui podra ver los cursos disponibles</p>
                            </div>
                        </div>
                    </div>
                    <section class="row">
                        <div class="col-lg-12 col-lg-9">
                            <div class="callout callout-second">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                            perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                            necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- INICIA SECCION ESTADISTICAS -->
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/grado4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">CURSOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary">16</h3>
                                                    <h6 class="font-semibold text-success">Cursos propuestos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/comunidad4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">MIS ALUMNOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary">18</h3>
                                                    <h6 class="font-semibold text-success">Inscritos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5 img_bg_cards" style="background-image: url(../assets/images/icons/inscripciones4.svg);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="text-muted font-semibold">GRUPOS</h6>
                                                    <h3 class="font-extrabold mb-0 text-primary">123</h3>
                                                    <h6 class="font-semibold text-warning">Activos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Mis grupos</h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-hover table-striped" id="tbl1">
                                                <thead>
                                                    <tr>
                                                        <th>GRUPO</th>
                                                        <th>CURSO</th>                                                        
                                                        <th>TIPO</th>
                                                        <th>INSCRITOS</th>
                                                        <th>INICIO</th>
                                                        <th>TERMINO</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbl-grupos">
                                                    <tr id_grupo="3">
                                                        <th scope="row">7521</th>
                                                        <td>Induccion al computo</td>
                                                        <td>Presencial</td>
                                                        <td><span class="badge bg-success">25</span></td>
                                                        <td>15-01-2021</td>
                                                        <td>19-07-2021</td>
                                                        <!-- BOTON ACCIONES -->
                                                        <td>
                                                            <a href="./detalles-asignacion" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="<?php echo $_SESSION['img_perfil'];?>" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold"><?php echo $_SESSION['nombre_completo'];?></h5>
                                            <h6 class="text-muted mb-0"><?php echo $_SESSION['cuenta'];?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- INICIO GRAFICA CIRCULAR -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Visita a la página</h4>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div id="chart-visitors-profile" style="min-height: 317.184px;">
                                        <div id="apexchartscudxw36g" class="apexcharts-canvas apexchartscudxw36g apexcharts-theme-light" style="width: 317px; height: 317.184px;">
                                            <svg id="SvgjsSvg1108" width="317" height="317.184375" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="317" height="317.184375">
                                                    <div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                        <div class="apexcharts-legend-series" rel="1" seriesname="Hombres" data:collapsed="false" style="margin: 2px 5px;">
                                                            <span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(25, 99, 152) !important; color: rgb(25, 99, 152); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Hombres" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Hombres</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2" seriesname="Mujeres" data:collapsed="false" style="margin: 2px 5px;">
                                                            <span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(205, 172, 18) !important; color: rgb(205, 172, 18); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Mujeres" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Mujeres</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">	
                                                        .apexcharts-legend {	
                                                        display: flex;	
                                                        overflow: auto;	
                                                        padding: 0 10px;	
                                                        }	
                                                        .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {	
                                                        flex-wrap: wrap	
                                                        }	
                                                        .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
                                                        flex-direction: column;	
                                                        bottom: 0;	
                                                        }	
                                                        .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {	
                                                        justify-content: flex-start;	
                                                        }	
                                                        .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {	
                                                        justify-content: center;  	
                                                        }	
                                                        .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {	
                                                        justify-content: flex-end;	
                                                        }	
                                                        .apexcharts-legend-series {	
                                                        cursor: pointer;	
                                                        line-height: normal;	
                                                        }	
                                                        .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{	
                                                        display: flex;	
                                                        align-items: center;	
                                                        }	
                                                        .apexcharts-legend-text {	
                                                        position: relative;	
                                                        font-size: 14px;	
                                                        }	
                                                        .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                                        pointer-events: none;	
                                                        }	
                                                        .apexcharts-legend-marker {	
                                                        position: relative;	
                                                        display: inline-block;	
                                                        cursor: pointer;	
                                                        margin-right: 3px;	
                                                        border-style: solid;
                                                        }	
                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                                        display: inline-block;	
                                                        }	
                                                        .apexcharts-legend-series.apexcharts-no-click {	
                                                        cursor: auto;	
                                                        }	
                                                        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                                        display: none !important;	
                                                        }	
                                                        .apexcharts-inactive-legend {	
                                                        opacity: 0.45;	
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG1110" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)">
                                                    <defs id="SvgjsDefs1109">
                                                        <clipPath id="gridRectMaskcudxw36g">
                                                            <rect id="SvgjsRect1112" width="301" height="289" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskcudxw36g">
                                                            <rect id="SvgjsRect1113" width="299" height="291" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <filter id="SvgjsFilter1122" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                            <feFlood id="SvgjsFeFlood1123" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1123Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1124" in="SvgjsFeFlood1123Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1124Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1125" dx="1" dy="1" result="SvgjsFeOffset1125Out" in="SvgjsFeComposite1124Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1126" stdDeviation="1 " result="SvgjsFeGaussianBlur1126Out" in="SvgjsFeOffset1125Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1127" result="SvgjsFeMerge1127Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1128" in="SvgjsFeGaussianBlur1126Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1129" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1130" in="SourceGraphic" in2="SvgjsFeMerge1127Out" mode="normal" result="SvgjsFeBlend1130Out"></feBlend>
                                                        </filter>
                                                        <filter id="SvgjsFilter1135" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                            <feFlood id="SvgjsFeFlood1136" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1136Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1137" in="SvgjsFeFlood1136Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1137Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1138" dx="1" dy="1" result="SvgjsFeOffset1138Out" in="SvgjsFeComposite1137Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1139" stdDeviation="1 " result="SvgjsFeGaussianBlur1139Out" in="SvgjsFeOffset1138Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1140" result="SvgjsFeMerge1140Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1141" in="SvgjsFeGaussianBlur1139Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1142" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1143" in="SourceGraphic" in2="SvgjsFeMerge1140Out" mode="normal" result="SvgjsFeBlend1143Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <g id="SvgjsG1114" class="apexcharts-pie">
                                                        <g id="SvgjsG1115" transform="translate(0, 0) scale(1)">
                                                            <circle id="SvgjsCircle1116" r="40.2" cx="147.5" cy="143.5" fill="transparent"></circle>
                                                            <g id="SvgjsG1117" class="apexcharts-slices">
                                                                <g id="SvgjsG1118" class="apexcharts-series apexcharts-pie-series" seriesName="Hombres" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath1119" d="M 147.5 9.5 A 134 134 0 1 1 35.31957072843015 216.7908677015514 L 113.84587121852904 165.48726031046542 A 40.2 40.2 0 1 0 147.5 103.3 L 147.5 9.5 z" fill="rgba(25,99,152,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="236.84220000000002" data:startAngle="0" data:strokeWidth="2" data:value="65.7895" data:pathOrig="M 147.5 9.5 A 134 134 0 1 1 35.31957072843015 216.7908677015514 L 113.84587121852904 165.48726031046542 A 40.2 40.2 0 1 0 147.5 103.3 L 147.5 9.5 z" stroke="#ffffff"></path>
                                                                </g>
                                                                <g id="SvgjsG1131" class="apexcharts-series apexcharts-pie-series" seriesName="Mujeres" rel="2" data:realIndex="1">
                                                                    <path id="SvgjsPath1132" d="M 35.31957072843015 216.7908677015514 A 134 134 0 0 1 147.476612588142 9.500002040936693 L 147.4929837764426 103.30000061228101 A 40.2 40.2 0 0 0 113.84587121852904 165.48726031046542 L 35.31957072843015 216.7908677015514 z" fill="rgba(205,172,18,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="123.15779999999998" data:startAngle="236.84220000000002" data:strokeWidth="2" data:value="34.2105" data:pathOrig="M 35.31957072843015 216.7908677015514 A 134 134 0 0 1 147.476612588142 9.500002040936693 L 147.4929837764426 103.30000061228101 A 40.2 40.2 0 0 0 113.84587121852904 165.48726031046542 L 35.31957072843015 216.7908677015514 z" stroke="#ffffff"></path>
                                                                </g>
                                                                <g id="SvgjsG1120" class="apexcharts-datalabels">
                                                                    <text id="SvgjsText1121" font-family="Helvetica, Arial, sans-serif" x="224.10212945774853" y="184.9550812631978" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1122)" style="font-family: Helvetica, Arial, sans-serif;">65.8%</text>
                                                                </g>
                                                                <g id="SvgjsG1133" class="apexcharts-datalabels">
                                                                    <text id="SvgjsText1134" font-family="Helvetica, Arial, sans-serif" x="70.89787054225148" y="102.04491873680217" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1135)" style="font-family: Helvetica, Arial, sans-serif;">34.2%</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1144" x1="0" y1="0" x2="295" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1145" x1="0" y1="0" x2="295" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1111" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(25, 99, 152);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(205, 172, 18);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN GRAFICA CIRCULAR -->
                        </div>
                    </section>
                    <!-- FIN SECCION ESTADISTICAS -->

                    <!-- INICIO CARD DE ACCIONES RAPIDAS -->
                    <section class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Cursos</h5>
                                            <p class="card-text text-muted">En este apartado se pueden consultar las propuestas de cursos hechas y su estado.</p>
                                            <a href="./lista-propuestas">
                                            <button type="button" class="btn btn-primary btn-sm">Ver Propuestas</button>
                                            </a>
                                            <a href="#">
                                            <button type="button" class="btn btn-primary btn-sm">Nueva propuesta</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Actas</h5>
                                            <p class="card-text text-muted">Acceso rápido para el apartado de actas en dondé se podrán ver los detalles y estado.</p>
                                            <a href="#">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#onConstruction">Ir</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Mis grupos</h5>
                                            <p class="card-text text-muted">Consulte sus grupos actuales y sus detalles, así como la lista de sus grupos anteriores</p>
                                            <a href="./lista-grupos-profesor">
                                            <button type="button" class="btn btn-primary btn-sm">Actuales</button>
                                            </a>
                                            <a href="./prof-historial-grupos">
                                            <button type="button" class="btn btn-primary btn-sm">Histórico</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- FIN CARD DE ACCIONES RAPIDAS -->
                </div>
                <footer class="text-center text-white ">
                    <?php include "modals/generalModals.php"?>
                    <?php include "includes/footer.php" ?>
                </footer>
            </div>
        </div>
        <?php include "includes/js.php"?>
        <?php include "includes/services-js.php"?>
        <!-- Agregar solo cuando exista una tabla para mostrar-->
        <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
        <script>
            // Simple Datatable
            let table1 = document.querySelector('#tbl1');
            let dataTable = new simpleDatatables.DataTable(table1);
        </script>
        <!-- Agregar solo cuando exista una tabla para mostrar-->
    </body>
</html>