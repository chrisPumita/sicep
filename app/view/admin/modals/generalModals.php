
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="addNewProfesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Registrar Nuevo Profesor
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-add-profesor">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Al crear una cuenta, le llegará una notificación por correo electrónico al profesor con la CLAVE
                                    de acceso a su cuenta que tendra que modificar una vez entrando al sistema.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <select class="form-control" id="prefijo" name="prefijo">
                                <option value="Lic">Lic.</option>
                                <option value="Mto">Mto.</option>
                                <option value="Dr">Dr.</option>
                            </select>
                        </div>
                        <div class="col-sm-9 mb-3 mb-sm-0">
                            <input type="text" id="nombre_profesor" name="nombre_profesor" class="form-control" placeholder="Nombre(s)" aria-label="Nombres" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" id="app" name="app" class="form-control" placeholder="Primer Apellido" aria-label="Primer Apellido" required="">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" id="apm" name="apm" class="form-control" placeholder="Segundo Apellido" aria-label="Segundo Apellido" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <select class="form-control" id="sexo" name="sexo">
                                <option value="0">Hombre</option>
                                <option value="1">Mujer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" aria-label="Telefono" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" aria-label="Correo" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" id="notrabajador" name="notrabajador" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <select class="form-control" id="depto" name="depto">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                             <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--AGREGA PROFESOR INVITACION CUENTA -->

<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="selectCourse" tabindex="-1" role="dialog" aria-labelledby="selectCourse"
     aria-hidden="true">
    <div class="modal-md  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Seleccione un curso para abrir un Grupo
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form action="#" id="SelectCurso">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Si desea Abrir un grupo para este periodo, es necesario que elija el curso que desea. Seleccionelo
                                    de la lista y de clic en continuar.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <select class="form-control" id="modal-lista-cursos" name="prefijo">
                                <!--AJAX RESULT-->
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                                <input type="button" id="btnEnviar" name="btnEnviar" value="Continuar" class="btn btn-primary btn-user btn-block" onclick="loadAsignacion()">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--En Construccion theme Modal -->
<div class="modal fade text-left" id="onConstruction" tabindex="-1"
     role="dialog" aria-labelledby="PaginaEnConstrucction"
     aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <span class="modal-title" id="myModalLabel150">Disculpe las molestias</span>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <div class="modal-body">
                <h4>Seguimos trabajando en esta parte del sitio</h4>
                <img src="../assets/images/enContruction.gif" alt="">
            </div>
            <div class="modal-footer">
                <button type="button"
                        class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cerrar</span>
                </button>
            </div>
        </div>
    </div>
</div>