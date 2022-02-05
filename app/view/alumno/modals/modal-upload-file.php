<!--primary theme Modal -->
<div class="modal fade text-left" id="modal-uploadFile" tabindex="-1"
     role="dialog" aria-labelledby="modal-uploadFile" aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title white" id="dosSolName">
                        SUBIR: {name}
                    </h5>
                    <button type="button" class="close"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times text-light"></i>
                    </button>
                </div>
            <form id="frm-upload-file" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="folio" id="folio" required>
                    <input type="hidden" name="idDocSol" id="idDocSol" required>
                    <input type="hidden" name="idFile" id="idFile" value="0" required>
                    <div class="input-group">
                        <input type="file" class="form-control" accept="image/*,.pdf" id="archivo" name="archivo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-light-secondary"  data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fas fa-times"></i> Cancelar</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" >
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block"><i class="fas fa-upload"></i> Subir</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

