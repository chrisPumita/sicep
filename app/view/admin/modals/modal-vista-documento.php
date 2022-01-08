
<!--Modal para DOCUMENTOS -->
<div class="modal fade text-left" id="modalViewFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="viewFileName">
                    Vista de documento
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body" id="fileView">
                <!--JS-->
            </div>
            <input type="text" id="idDocument">
            <div class="modal-footer">
                    <button type="button" action="6" class="actionFile btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    <button type="button" action="5" class="actionFile btn btn-info "><i class="fas fa-calendar-times"></i> Caducado</button>
                    <button type="button" action="4" class="actionFile btn btn-info"><i class="fas fa-question-circle"></i> Falso</button>
                    <button type="button" action="3" class="actionFile btn btn-warning"><i class="fas fa-exclamation-triangle"></i> Incorrecto</button>
                    <button type="button" action="2" class="actionFile btn btn-danger"><i class="fas fa-times"></i> Rechazar</button>
                    <button type="button" action="1" class="actionFile btn btn-success"><i class="fas fa-check-circle"></i> Aprobar</button>
                    <button type="button" class="btn btn-light-secondary"  data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>  <span class="d-none d-sm-block">Cerrar</span>
                    </button>
            </div>
        </div>
    </div>
</div>

