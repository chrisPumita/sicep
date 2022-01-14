<!--Modal lista profesores para dmin -->
<div class="modal fade text-left" id="modalCreateAdminAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Asignar Cuenta de Administrador
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label class="col-form-label text-primary">Seleccione a un profesor: </label>
                    </div>
                    <div class="col-sm-8 mb-3 mb-sm-0">
                        <select class="form-control" name="listaDesProfesores" id="listaDesProfesores"></select>
                    </div>
                </div>
                <div class="modal-body d-none" id="containerSend">
                    <div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alertMje">
                            <strong>¡ATENCIÓN!</strong>
                            Al asignar una cuenta de administrador a un profesor, esta cuenta va a tener la oportunidad
                            de hacer los cambios según su nivel de acceso. Al asignar a un nuevo administrador,
                            le llegará una notificación por correo electrónico
                            con su clave de confirmación.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="mb-3" id="dataProf">
                            <div class="text-sm-start">
                                <hr>
                                <div class="row border-bottom">
                                    <div class="col-sm-3">
                                        <input type="hidden" class="form-control" name="idProfesor" id="idProfesor">
                                        <h6 class="mb-0">No. Trabajador:</h6>
                                    </div>
                                    <div class="col-sm-9 text-gray-600 text-bold" id="noTRabajador"></div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nombre:</h6>
                                    </div>
                                    <div class="col-sm-9 text-gray-600 text-bold" id="nombreProfesor"></div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Correo Electrónico:</h6>
                                    </div>
                                    <div class="col-sm-9 text-gray-600 text-bold" id="correoProfesor"></div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Departamento:</h6>
                                    </div>
                                    <div class="col-sm-9 text-gray-600 text-bold" id="deptoProfesor"></div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Fecha de Registro:</h6>
                                    </div>
                                    <div class="col-sm-9 text-gray-600 text-bold" id="fechaRegistroProfesor"></div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-sm-0">
                                        <label class="col-form-label">Cargo:</label>
                                    </div>
                                    <div class="col-sm-4 mb-sm-0">
                                        <input type="input" class="form-control" placeholder="Eje. Coordinador de Laboratorios" name="txtcargo" id="txtcargo" aria-label="Cargo">
                                    </div>
                                    <div class="col-sm-3 mb-sm-0">
                                        <label class="col-form-label">Nivel de Permisos:</label>
                                    </div>
                                    <div class="col-sm-3 mb-sm-0">
                                        <select class="form-control" name="permisos" id="permisos">
                                            <option value="1">Bajo</option>
                                            <option value="2">Medio</option>
                                            <option value="3">Alto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="button" id="btnEnviar" name="btnEnviar" value="Guardar" class="btn btn-primary btn-user btn-block btnValidateNewAdmin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>