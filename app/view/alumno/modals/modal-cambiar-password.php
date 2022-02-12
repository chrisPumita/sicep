<!--primary theme Modal -->
<div class="modal fade text-left" id="CambiarPsw" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-md modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Cambiar contraseña de la Cuenta
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-update-pwd-alumno">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h6 class="text-start">Contraseña actual:</h6>
                                <input type="password" class="form-control round" id="pwdOld" name="pwdOld" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 py-3">
                            <div class="form-group">
                                <h6 class="text-start">Contraseña nueva:</h6>
                                <input type="password" class="form-control round" id="pwdNew" name="pwdNew" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h6 class="text-start">Confirmar contraseña:</h6>
                                <input type="password" class="form-control round" id="pwdNewC" name="pwdNewC" require>
                            </div>
                        </div>
                    </div>                      
                </div>            
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cancelar</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Aceptar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>