
<!--DETALLES BASICOS DE LA ASIGNACION-->
<div class="modal fade text-left" id="editarDetallesAsig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar detalles de la asignación
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form action="#" id="frm-update-detalles-asig">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Modifique los parametros de inscripcion, estos se veran reflejados de forma automática.</div>
                            </div>
                        </div>
                    </div>
                    <h6 class="heading-small text-secondary mb-4">Detalles generales</h6>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="hidden" id="idAsignacion" name="idAsignacion" value="<?php echo $id?>">
                            <h5 class="text-start">Profesor actual:</h5>
                            <input type="text" class="form-control" id="profesorAsigActual" name="profesorAsigActual" disabled>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-start">Cambiar por:</h5>
                            <select class="form-control" id="profesorAsig" name="profesorAsig"></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Grupo actual:</h5>
                            <input type="text" class="form-control" id="grpoActual" name="grpoActual" disabled>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-start">Cambiar a:</h5>
                            <div class="d-flex">
                                <select class="form-control" id="grupos">
                                </select>
                                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#modalCreaGrupoCurso">
                                    <i class="fas fa-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Generación actual:</h5>
                            <input type="text" class="form-control" id="genActual" name="genActual" disabled>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-start">Cambiar a:</h5>
                            <select class="form-control" id="generacion" name="generacion"></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Semestre actual:</h5>
                            <input type="text" class="form-control" id="semestreActual" name="semestreActual" disabled>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="text-start">Cambiar a:</h5>
                            <select class="form-control" id="semestre" name="semestre">
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Precio Lista:</h5>
                            <input class="form-control" type="number" min="0" disabled name="costoRecom" id="costoRecom" value="0">
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-start">Costo Aplicado:</h5>
                            <input class="form-control" type="number" min="0" max="99999" name="costo" id="costo" value="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <h5 class="text-start">Modalidad:</h5>
                            <select class="form-control" id="modalidad-edita">
                                <option value="0">Presencial</option>
                                <option value="1">En Línea</option>
                                <option value="2">Mixto</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-start">Visibilidad:</h5>
                            <select class="form-control" id="visibilidad">
                                <option value="0">Ocultar</option>
                                <option value="1">Visible</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-start">Cupo:</h5>
                            <input class="form-control" type="number" value="10" min="1" id="numCupo">
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-start">Sede:</h5>
                            <select class="form-control" id="campus">
                                <option value="0">Campo 1</option>
                                <option value="1">Campo 4</option>
                                <option value="2">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <h5 class="text-start">Notas:</h5>
                            <textarea class="form-control" id="notas" name="notas" rows="2" placeholder="Escriba alguna nota importante aqui, este campo puede quedar vacio"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Actualizar</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade text-left" id="editarDetallesAsigFechas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar detalles de la asignación
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form action="#" id="frm-update-detalles-asig-fechas">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Al cambiar los parametros de las fechas, estas se veran reflejadas de forma automatica, pero las
                                    solicitudes pendientes seguiran disponibles, estas solo afectarán a futuras inscripciones.</div>
                            </div>
                        </div>
                    </div>
                    <h6 class="heading-small text-secondary mb-4">Fechas importantes</h6>
                    <div class="row">
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="InicioCurso">Inicio de Clases:</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <input type="date" id="InicioCurso" name="InicioCurso" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="finCurso">Fin curso:</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <input type="date" id="finCurso" name="finCurso" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="campo">Inscripciones</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="inicioInsc">del </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" idCurso="inicioInsc" name="inicioInsc" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="finInsc">al </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" id="finInsc" name="finInsc" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="campo">Calificaciones</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="inicioCal">del </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" idCurso="inicioCal" name="inicioCal" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="finCal">al </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" id="finCal" name="finCal" max="3000-12-31" min="1000-01-01"  value="<?php echo date("Y-m-d");?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
