
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="editar-detalles-curso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-lg  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
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
            <form action="#">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil impedit quaerat nostrum quidem voluptatum dignissimos pariatur illum blanditiis.
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="heading-small text-secondary mb-4">Detalles generales</h6>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Profesor asignado:</h5>
                            <select class="form-control" id="profesorAsig">
                                <option value="5">Calderon Hinojosa Felipe</option>
                                <option value="2">Cortes Ponciano Paola</option>
                                <option value="8">Echeverria Calderon Luisa</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <h5 class="text-start">Grupo:</h5>
                            <div class="d-flex">
                                <select class="form-control" id="generacion">
                                    <option value="2021">1101</option>
                                    <option value="2022">1102</option>
                                    <option value="2023">1103</option>
                                    <option value="2024">1104</option>
                                </select>
                                <button class="btn btn-primary mx-3">
                                    <i class="fas fa-plus-square"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h5 class="text-start">Generación:</h5>
                            <select class="form-control" id="semestre">
                                <option value="2021-2">2020</option>
                                <option value="2022-1">2021</option>
                                <option value="2022-2">2022</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <h5 class="text-start">Modalidad:</h5>
                            <select class="form-control" id="modalidad">
                                <option value="0">Presencial</option>
                                <option value="1">En Línea</option>
                                <option value="2">Mixto</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <h5 class="text-start">Cupo:</h5>
                            <input class="form-control" type="number" value="20" id="numCupo">
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
                        <div class="col-md-6">
                            <h5 class="text-start">Semanas:</h5>
                            <input class="form-control" type="number" min="0" max="99999" name="semanas" id="semanas" value="0">
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-start">Costo:</h5>
                            <input class="form-control" type="number" min="0" max="99999" name="costo" id="costo" value="0">
                        </div>
                    </div>
                    <h6 class="heading-small text-secondary mb-4">Fechas importantes</h6>
                    <div class="row">
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="campo">Límite de inscripciones:</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="label" for="campo">Inicio de Clases:</label>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0 ">
                                <div class="row">
                                    <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
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
                                            <label for="">del </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="">al </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
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
                                            <label for="">del </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-2">
                                            <label for="">al </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
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
                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Guardar" class="btn btn-primary btn-user btn-block" data-bs-dismiss="modal">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
