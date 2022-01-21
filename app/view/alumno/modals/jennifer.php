<!-- Button trigger for primary themes modal -->
<button type="button" class="btn btn-outline-primary"
        data-bs-toggle="modal" data-bs-target="#primary">
    Primary
</button>

<?php include "modals/template-modal.php"?>

<!--primary theme Modal -->
<div class="modal fade text-left" id="primary" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Solicitud de inscripción a curso
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- seccion detalles y banner img -->
                <section class="section">
                            <div class="row gutters-sm">
                                <!-- banner detalles -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="img d-block w-100" style="background-image: url(https://cambiodigital-ol.com/wp-content/uploads/2019/06/excel_logo2.jpg); height: 300px; "></div>
                                           <div class="card-body pt-3">

                                                <div class="card-content">
                                                    <div class="row py-1 m-2">
                                                        <h5 class="text-secondary">General:</h5>
                                                        <div class="row py-2">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Nombre del curso</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">Iniciación al computo I</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Profesor</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">Predro Rene Hernandez Suarez</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Grupo</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">2289</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Costo</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">$1,300.00</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Modalidad</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">Presencial</div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Sesiones</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-primary text-bold">15</div>
                                                        </div>
                                                        <hr>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin banner detalles -->

                                <div class="col-md-5 mb-3">
                                    <!-- profesor -->
                                    <div class="col-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xl">
                                                        <img src="../assets/images/start-sesion.png" alt="Face 1">
                                                    </div>
                                                    <div class="ms-3 name">
                                                        <h4 class="font-bold">Predro Rene Hernandez Suarez</h4>
                                                        <h6 class="text-muted mb-0">PROFESOR</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- costo -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Costo del curso</h4>
                                            <h2 class="mb-0 text-primary">$1,600.00</h2>
                                            <h7 class="text-primary text-muted">Con 70% de descuento por ser Comunidad FESC</h7>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </section>
                        <!-- fin de seccion de detalles -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Aceptar</span>
                </button>
            </div>
        </div>
    </div>
</div>