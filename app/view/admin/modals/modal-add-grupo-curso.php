<div class="modal fade text-left" id="modalCreaGrupoCurso" tabindex="-1"
     role="dialog" aria-labelledby="PaginaEnConstrucction"
     aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <span class="modal-title" id="myModalLabel150">CREA GRUPO</span>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm-add-grupo-curso">
                    <div class="form-group">
                        <label for="nombre">Nombre del Grupo:</label>
                        <input type="hidden" id="idCursoGrupo" name="idCursoGrupo">
                        <input type="number" class="form-control" id="nombreGrupoNuevo" name="nombreGrupoNuevo" aria-describedby="deptoHelp" placeholder="Ejemplo(1001)">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>