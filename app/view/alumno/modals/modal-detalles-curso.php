<!--primary theme Modal -->
<div class="modal fade text-left" id="detallesCurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="idDetailsOferta">
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row  py-1 m-2">
                    <h5 class="text-secondary"><i class="fas fa-bookmark"></i> Detalles generales</h5>
                    <div class="card">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <button class="list-group-item list-group-item-action collapseTittle"   id="headingOne"  data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><i class="fas fa-chalkboard"></i> DESCRIPCIÓN</h6>
                                    </div>
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-3 px-2" id="modalDetails"></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="list-group-item list-group-item-action collapseTittle"  id="headingTwo"  data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><i class="fas fa-check"></i> OBJETIVO </h6>
                                    </div>
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body  py-3 px-2" id="modalObjetivo"></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="list-group-item list-group-item-action collapseTittle"id="headingThree"data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><i class="fas fa-dice-d6"></i> ANTECEDENTES</h6>
                                    </div>
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body  py-3 px-2" id="modalAntecede"></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="list-group-item list-group-item-action collapseTittle" id="heading4" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><i class="fas fa-users"></i> DIRIGIDO A</h6>
                                    </div>
                                </button>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body  py-3 px-2" id="modalDirige"></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="list-group-item list-group-item-action collapseTittle" id="heading5" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1"><i class="fas fa-quote-left"></i> NOTAS</h6>
                                    </div>
                                </button>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body  py-3 px-2" id="modalNotas"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- fin de seccion de detalles -->
                <div class="row py-1 m-2">
                    <h5 class="text-secondary"><i class="fas fa-bookmark"></i> Temario General</h5>
                    <div class="card-body table-responsive" id="tblTemario">
                    </div>
                </div>
                <!-- fin de seccion de detalles -->
                <div class="row py-1 m-2">
                    <h5 class="text-secondary"><i class="fas fa-bookmark"></i> Documentación Solicitada</h5>
                    <div class="card-body table-responsive" id="tblDocSol"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>