<!--primary theme Modal -->
<div class="modal fade text-left" id="nuevoServicio" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-SM modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Registro de Servicio Social
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="callout callout-second bg-grey mt-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-lg-start text-primary bg-gray">
                            Al crear una cuenta, le llegará una notificación por correo electrónico al alumno.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN CALLOUT  INFOR -->
                
                <h6 class="heading-small text-secondary mb-4">Fechas importantes</h6>
                <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-0">
                        <label class="label" for="campo">Límite de inscripciones:</label>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 ">
                        <div class="row">
                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                        </div>
                    </div>                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-0">
                        <label class="label" for="campo">Inicio de Clases:</label>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 ">
                        <div class="row">
                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-0">
                        <label class="label" for="campo">Notas:</label>
                    </div>
                    <div class="col-sm-6 mb-3 px-0 mb-sm-0 ">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button"
                        class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cerrar</span>
                </button>
                <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Aceptar</span>
                </button>
            </div>
        </div>
    </div>
</div>