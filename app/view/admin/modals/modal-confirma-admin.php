
<!--Modal de confirmacion de administrador-->
<div class="modal fade text-left" id="modalConfirmaPw" tabindex="-1"
     role="dialog" aria-labelledby="modalConfirmaPw"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                    <span class="modal-title" id="modalConfirmaPw">CONFIRMAR</span>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="user needs-validation" id="frm-clave-verif" role="form" autocomplete="off" novalidate="">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <h5>Escriba su clave de verificación para concluir con el procedimiento.</h5>
                        </div>
                        <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="col-form-label">Clave de verificación:</label>
                        </div>
                        <div class="col-sm-7 mb-3 mb-sm-0">
                            <input type="password" class="form-control" placeholder="" aria-label="Clave_Verif">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cancelar</span>
                </button>
                <button type="button" class="btn btn-success ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Confirmar</span>
                </button>
            </div>
        </div>
    </div>
</div>