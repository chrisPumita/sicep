
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="editar-descuentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar descuentos personalizados
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="callout callout-second bg-grey">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A sint eum, delectus quo provident officiis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="edificio" class="text-primary">Procedencia</label>
                    </div>
                    <div class="col-md-8 form-group">
                    <select class="form-control procedencia-dropdown" id="list-procedencias">
                        <option value="">TODOS</option>
                    </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="Cupo" class="text-primary">Descuentos (%):</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" min="1" class="form-control" id="Cupo" aria-describedby="aulaHelp" placeholder="0">
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

