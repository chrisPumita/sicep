
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="previaDocs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Documentos
                </h5>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-add-profesor">
                <div class="modal-body">
                    <div class="list-group-item list-group-item-action" id="heading1" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne" role="button">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex px-2 py-1 mb-0">
                                <div class="px-3">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">Alexa Liras</h6>
                                    <p class="text-xs text-secondary mb-0">Iniciacion al computo I [1003]</p>
                                </div>
                            </div>
                            <small><span class="badge bg-danger">4</span></small>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div class="card">
                            <div class="alert alert-primary">
                                <p>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-folder-open"></i> Folio: 156156</a>
                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-paper-plane"></i> Enviar Mensaje</a>
                                    <a href="#" class="btn btn-outline-info"><i class="far fa-id-card"></i> Ver Datos</a>
                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                </p>
                            </div>

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

    <!--scrollbar Modal -->
    <div class="modal fade" id="modal_documents" tabindex="-1" role="dialog"
        aria-labelledby="modal_documentsTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_documentsTitle">Scrolling
                        Modal</h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                <table class="table table-hover text-left">
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
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="button" class="btn btn-primary ml-1"
                        data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>