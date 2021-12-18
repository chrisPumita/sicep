<!-- Inicia Modal Departamentos-->
<!-- Button trigger for deparmanto themes modal -->
<div class="modal fade text-left" id="modal_depto" tabindex="-1" role="dialog" aria-labelledby="modal_depto"
     aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="modal_depto">
                    Departamento
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm-depto">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="hidden" class="form-control" id="id_depto" name="id_depto">
                        <input type="text" class="form-control" id="nombre_depto" name="nombre_depto" aria-describedby="deptoHelp" placeholder="Nombre del Departamento">
                        <small id="deptoHelp" class="form-text text-muted">Escriba el nombre del departamento</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Fin Modal Departamentos -->
        <!-- Inicia Modal Universidades-->
<div class="modal fade text-left" id="modal_uni" tabindex="-1" role="dialog" aria-labelledby="modal_depto"
     aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="modal_depto">
                    Universidades
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm-universidades">
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <input type="text" id="id_universidad" name="id_universidad">
                            <label for="nombreUni" class="text-primary">Nombre</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <input type="text" class="form-control" name="nombreUni" id="nombreUni" placeholder="Universidad Nacional Autónoma de Mexico">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="siglasUni" class="text-primary">Siglas:</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <input type="text" class="form-control" name="siglasUni" id="siglasUni" placeholder="UNAM">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Fin Modal Universidades -->
        <!-- Inicia Modal Procedencias-->
<div class="modal fade text-left" id="modal_procedencia" tabindex="-1" role="dialog" aria-labelledby="modal_procedencia"
     aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="modal_procedencia">
                    Procedencias
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="frm-procedencia">
                    <div class="form-group">
                        <label for="nombre_procedencia">Procedencia:</label>
                        <input type="hidden" class="form-control" id="id_procedencia"  name="id_procedencia"value="0">
                        <input type="text" class="form-control" id="nombre_procedencia" name="nombre_procedencia" aria-describedby="deptoHelp" placeholder="Defina una procedencia">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Finaliza Modal Procedencias -->
        <!-- Inicia Modal Aulas-->
<div class="modal fade text-left" id="modal_aulas" tabindex="-1" role="dialog" aria-labelledby="modal_aulas"
     aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="modal_aulas">
                    Aulas
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label for="edificio" class="text-primary">Edificio</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <input type="hidden" class="form-control" id="id_edificio" aria-describedby="edificioHelp">
                            <input type="text" class="form-control" id="edificio" aria-describedby="edificioHelp" placeholder="Eje. A1, H, A2..">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="aula" class="text-primary">Aula:</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <input type="text" class="form-control" id="aula" aria-describedby="aulaHelp" placeholder="101,201...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label for="edificio" class="text-primary">Campo</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <select class="form-control" id="abreviatura" name="abreviatura">
                                <option value="Campor 1">Campo 1.</option>
                                <option value="Campo 4" selected>Campo 4</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="Cupo" class="text-primary">Cupo:</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <input type="number" min="1" class="form-control" id="Cupo" aria-describedby="aulaHelp" placeholder="0">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Finaliza Modal Aulas -->
        <!-- Inicia Modal Documentos-->
<div class="modal fade text-left" id="modal_documentos" tabindex="-1" role="dialog" aria-labelledby="modal_documentos"
     aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="modal_documentos">
                    Documentos de entrega
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label for="nombre_doc" class="text-primary">Documento:</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="hidden" class="form-control" id="id_doc" aria-describedby="docHelp">
                            <input type="text" class="form-control" id="nombre_doc" aria-describedby="docHelp">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="edificio" class="text-primary">Formato</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <select class="form-control" id="abreviatura" name="abreviatura">
                                <option value="PDF">PDF</option>
                                <option value="IMG" selected>Imagen</option>
                                <option value="DOC" selected>Documento de Word</option>
                                <option value="%" selected>Cualquiera</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label for="peso_max" class="text-primary">Peso Máximo:</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="number" min="1" class="form-control" id="peso_max" aria-describedby="aulaHelp" placeholder="0">
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="Cupo" class="text-primary">Revision:</label>
                        </div>
                        <div class="col-md-9 form-group align-left">
                                <input type="checkbox" class="form-check-input form-check-danger form-check-glow" name="customCheck" id="customColorCheck6">
                                <label class="form-check-label  align-left" for="customColorCheck6">Permitir solo a Admin</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Finaliza Modal Documentos -->
        <!-- end modal zone-->