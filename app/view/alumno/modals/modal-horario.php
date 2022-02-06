
<!--Modal para PDF -->
<div class="modal fade text-left" id="modalHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                   HORARIO
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body" id="conmtainerHorario">
                <div class="row">
                    <div class="table-responsive">
                        <div class="row py-1 m-2">
                            <div id="containerTblPresencial"> </div>
                            <div id="containerTblVirtual">
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"></use></svg>
                                    <div>
                                        <h4 class="alert-heading">Sin registro</h4>
                                        <p>Aun no hemos registrado los horarios. Porfavor de estar pendiente al sitio para poder ver el horario establecido.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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