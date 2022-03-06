<!--MODAL LISTAS DE INSCRIPCION-->
<div class="modal fade text-left" id="viewListasInscripcion" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Listas de las Asignación
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2">
                        <div class="list-group" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="acreditados_container" data-bs-toggle="list" href="#lista_oficial_container" role="tab">Lista Oficial <span class="badge bg-primary" id="badgeAprobados">0</span></a>
                            <a class="list-group-item list-group-item-action" id="pendientes" data-bs-toggle="list" href="#solic_pendientes_container" role="tab">Solicitudes <span class="badge bg-danger" id="badgePendientes">1</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 mt-1">
                        <div class="tab-content text-justify" id="nav-tabContent">
                            <div class="tab-pane show active table-responsive" id="lista_oficial_container" role="tabpanel" aria-labelledby="acreditados_container"><div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"></use></svg>
                                    <div>
                                        Este grupo no tiene Inscripciones Confirmadas aun. Porfavor vaya a las solicitudes y revise la informacion.
                                        Una vez aprobado la solicitud, esta aparecerá en este apartado.
                                    </div>
                                </div></div>
                            <div class="tab-pane table-responsive" id="solic_pendientes_container" role="tabpanel" aria-labelledby="pendientes">
                                <table class="table table-hover table-striped" id="tblSolInscripcion">
                                    <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>DETALLES</th>
                                        <th>TRÁMITE</th>
                                        <th style="width: 300px;">SOLICITUD</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbl-SolInsc">

                                    <tr folio="22022815418754">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="../resources/avatars/a3d68b461bd9d3533ee1dd3ce4628ed4/pimg-20220305221508.jpg" alt="" srcset="">
                                                    <span class="avatar-status bg-danger"></span>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center px-3">
                                                    <p class="mb-0 text-xs">Hernandez Fernandez Alberto</p>
                                                    <p class="text-sm text-primary mb-0"><i class="fas fa-id-card"></i> 456156165</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-xs"><strong>Informatica</strong></p>
                                                <p class="mb-0 text-xs"><strong>Comunidad FESC (UNAM)</strong></p>
                                                <p class="mb-0 text-xs"><strong>cuyo@gmail.com</strong></p>
                                                <p class="mb-0 text-xs"><strong>45641564165</strong></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="col-auto" style="width: 30px;">
                                                    <div class="spinner-grow text-warning" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <p class="mb-0 text-xs"><strong>PAGO: </strong> PENDIENTE </p>
                                                    <p class="mb-0 text-xs"><strong>SOLICITUD: </strong> POR REVISAR </p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="font-bold ms-3 mb-0">Recibida el  lun, 28 de febrero de 2022, 17:39 Hrs.</p>
                                            </div>
                                        </td>
                                        <!-- BOTON ACCIONES -->
                                        <td>
                                            <a href="#" class="btn btn-primary btnViewFicha" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver ficha de Inscripcion">
                                                <i class="far fa-file-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary btnVieDocs" data-bs-toggle="modal" data-bs-target="#viewDocsInscripcion" data-bs-placement="top" title="Ver documentacion">
                                                <i class="fas fa-folder"></i>
                                            </a>
                                            <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion" data-bs-placement="top" title="Dar de Baja">
                                                <i class="fas fa-ban"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary ml-1"
                                data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Aceptar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>