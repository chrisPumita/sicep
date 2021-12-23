
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="editarDescuentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar descuento
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-update-descuento">
                <div class="modal-body">
                    <div class="callout callout-second bg-grey">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                    Cambie el descuento que desea aplicarle a estos grupo de alumnos, el descuento se re-calcula
                                    con el costo que se escriba al crear el grupo.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" id="idProcedenenciaSelect">
                            <label for="lblProcedencia" class="text-primary">Procedencia</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" disabled id="lblProcedenciaSelected">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="Cupo" class="text-primary">Descuentos (%):</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="number" min="0" max="100" class="form-control" id="descuentoProcedencia" aria-describedby="aulaHelp" placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group row">
                        <div class="col-12">
                            <button id="btnUpdateProcedencia" type="submit" class="btn btn-primary">
                                <i class="fas fa-sync-alt"></i> Actualizar
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- <table class="table table-hover text-left">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Dirigido a:</th>
                                        <th scope="col">Aplicar % Descuento</th>
                                    </tr>
                                    </thead>
                                    <tbody id="procedencias">
                                    <tr id_procedencia="1">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="1">
                                            </div>
                                        </td>
                                        <td>Comunidad FESC</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num1">
                                        </td>
                                    </tr>
                                    <tr id_procedencia="2">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="2">
                                            </div>
                                        </td>
                                        <td>Comunidad UNAM</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num2">
                                        </td>
                                    </tr>
                                    <tr id_procedencia="3">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="3">
                                            </div>
                                        </td>
                                        <td>Ex-Alumno FESC</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num3">
                                        </td>
                                    </tr>
                                    <tr id_procedencia="4">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="4">
                                            </div>
                                        </td>
                                        <td>Ex-Alumno UNAM</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num4">
                                        </td>
                                    </tr>
                                    <tr id_procedencia="5">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="5">
                                            </div>
                                        </td>
                                        <td>Externos de fuera</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num5">
                                        </td>
                                    </tr>
                                    <tr id_procedencia="6">
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input habilitar_procedencia" id="6">
                                            </div>
                                        </td>
                                        <td>Personal UNAM</td>
                                        <td>
                                            <input class="form-control" type="number" disabled="" value="0" id="num6">
                                        </td>
                                    </tr></tbody>
                                </table> -->

