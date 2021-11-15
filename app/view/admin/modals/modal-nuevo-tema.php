
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="addNewTema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Agregar un nuevo tema
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
                                    Los temas seran visibles al público.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- INICIAN COMPONENTES DE FORMULARIO -->
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="indice" class="text-primary">Inice:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" name="indice" id="indice" placeholder="Ejemplo 1.2.3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="nombre_tema" class="text-primary">Tema:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" name="nombre_tema" id="noimbre_tema" placeholder="Escriba el nombre del tema">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="descripcion-tema" class="text-primary">Descripción:</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" id="descripcion-tema" name="descripcion-tema" rows="3" placeholder="Describa el tema"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Crear Cuenta" class="btn btn-primary btn-user btn-block" data-bs-dismiss="modal">
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
                            <a href="./nueva-asignacion">
                                <input type="button" id="btnEnviar" name="btnEnviar" value="Continuar" class="btn btn-primary btn-user btn-block">
                            </a>
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