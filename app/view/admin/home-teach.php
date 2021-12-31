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
                            <img src="../assets/images/start-sesion.png" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <a href="./perfil">
                                <h5 class="font-bold">HOla <?php echo $_SESSION['usuario']; ?></h5>
                            </a>
                            <h6 class="text-muted mb-0"><?php echo $_SESSION['cuenta']; ?></h6>
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
                    <h1>Grafico</h1>
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