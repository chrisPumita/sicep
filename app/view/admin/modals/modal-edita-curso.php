<!-- EDITAR DATOS DEL CURSO -->
<div class="modal fade text-left" id="updateDatosCursos" tabindex="-1" role="dialog" aria-labelledby="updateDatosCursos"
     aria-hidden="true">
    <div class="modal-xl  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Modificar información del Curso
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" id="frm-update-curso">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="editarNombreCurso" class="text-primary">Nombre del curso</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="hidden" value="<?php echo $id?>" id="idCurso">
                                        <input type="text" class="form-control" name="editarNombreCurso" id="editarNombreCurso" placeholder="Nombre del curso">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="editarDescripcion"  class="text-primary">Descripciòn</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <textarea class="form-control" rows="3" name="editarDescripcion" id="editarDescripcion" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarObjetivo">Objetivo</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <textarea class="form-control" rows="3" name="editarObjetivo" id="editarObjetivo" required="" placeholder="Escriba una breve descripcion del curso"></textarea>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarDirigido">Dirigido a</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <textarea class="form-control" rows="3" name="editarDirigido" id="editarDirigido" required="" placeholder="Escriba para quien va dirigido este curso en general"></textarea>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarAntecedentes">Antecedentes</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <textarea class="form-control" rows="3" name="editarAntecedentes" id="editarAntecedentes" required="" placeholder="Escriba que antecedentes se necesita para cursar este curso"></textarea>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarModalidad">Tipo</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <select class="form-control" id="editarModalidad" name="editarModalidad">
                                            <option value="0">Curso</option>
                                            <option value="1">Diplomado</option>
                                            <option value="2">Seminario</option>
                                            <option value="3">Taller</option>
                                            <option value="4">Otro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarSesiones">Numero de Sesiones</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input class="form-control" type="number" min="1" value="1" id="editarSesiones" name="editarSesiones" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="text-primary" for="editarCosto">Costo sugerido</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="number" class="form-control" min="0"  id="editarCosto" name="editarCosto" requere>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1"><i class="fas fa-sync-alt"></i> Actualizar </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDITAR DATOS DEL CURSO -->