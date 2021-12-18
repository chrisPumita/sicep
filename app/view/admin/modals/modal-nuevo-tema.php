
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="addNewTema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Configurar Tema
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form action="frm-temario">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Los temas seran visibles al público. Escriba un temario general y de facil lectura. Si
                                    desea usar subtemas, coloque 1.1, 1.2... para que el sistema los acomode forma ordenada.
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
                            <input type="hidden" id="id_tema" name="id_tema" value="0">
                            <input type="text" class="form-control" name="indice" id="indice" placeholder="Ejemplo 1.2.1">
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
                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Agregar" class="btn btn-primary btn-user btn-block" data-bs-dismiss="modal">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
