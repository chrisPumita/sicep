<!--start modal zone-->
        <!-- Inicia Modal Departamentos-->
        <div class="modal fade" id="departamentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Departamentos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_depto" aria-describedby="deptoHelp">
                                <input type="text" class="form-control" id="nombre" aria-describedby="deptoHelp">
                                <small id="deptoHelp" class="form-text text-muted">Escriba el nombre del departamento</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal Departamentos -->
        <!-- Inicia Modal Universidades-->
        <div class="modal fade" id="universidades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Universidades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_uni" aria-describedby="uniHelp">
                                <input type="text" class="form-control" id="nombre-uni" aria-describedby="uniHelp">
                                <small id="uniHelp" class="form-text text-muted">Escriba el nombre de la institución</small>
                                <label class="mt-3" for="siglas">Siglas:</label>
                                <input type="hidden" class="form-control" id="id_siglas" aria-describedby="siglasHelp">
                                <input type="text" class="form-control" id="siglas-uni" aria-describedby="siglasHelp">
                                <small id="siglasHelp" class="form-text text-muted">Escriba las siglas de la institución</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal Universidades -->
        <!-- Inicia Modal Procedencias-->
        <div class="modal fade" id="procedencias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Procedencias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_proce" aria-describedby="proceHelp">
                                <input type="text" class="form-control" id="nombre" aria-describedby="proceHelp">
                                <small id="proceHelp" class="form-text text-muted">Escriba el nombre la procedencia</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Procedencias -->
        <!-- Inicia Modal Aulas-->
        <div class="modal fade" id="aulas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aulas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="edificio">Edificio:</label>
                                <input type="hidden" class="form-control" id="id_edificio" aria-describedby="edificioHelp">
                                <input type="text" class="form-control" id="edificio" aria-describedby="edificioHelp">
                                <small id="edificioHelp" class="form-text text-muted">Escriba el edificio</small>
                                <label class="mt-3" for="aula">Aula:</label>
                                <input type="hidden" class="form-control" id="id_aula" aria-describedby="aulaHelp">
                                <input type="text" class="form-control" id="aula" aria-describedby="aulaHelp">
                                <small id="aulaHelp" class="form-text text-muted">Escriba el aula</small>
                                <label class="mt-3" for="campo">Campo:</label>
                                <input type="hidden" class="form-control" id="id_campo" aria-describedby="campoHelp">
                                <input type="text" class="form-control" id="campo" aria-describedby="campoHelp">
                                <small id="campoHelp" class="form-text text-muted">Escriba el campo</small>
                                <label class="mt-3" for="cupo">Cupo:</label>
                                <input type="hidden" class="form-control" id="id_cupo" aria-describedby="cupoHelp">
                                <input type="text" class="form-control" id="cupo" aria-describedby="cupoHelp">
                                <small id="cupoHelp" class="form-text text-muted">Escriba el cupo</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Aulas -->
        <!-- Inicia Modal Documentos-->
        <div class="modal fade" id="documentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Documentos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="hidden" class="form-control" id="id_doc" aria-describedby="docHelp">
                                <input type="text" class="form-control" id="nombre-doc" aria-describedby="docHelp">
                                <small id="docHelp" class="form-text text-muted">Escriba el nombre del documento</small>
                                <label class="mt-3" for="formato">Formato:</label>
                                <input type="hidden" class="form-control" id="id_formato" aria-describedby="formatoHelp">
                                <input type="text" class="form-control" id="formato-doc" aria-describedby="formatoHelp">
                                <small id="formatoHelp" class="form-text text-muted">Escriba el formato del documento</small>
                                <label class="mt-3" for="peso">Peso Máximo:</label>
                                <input type="hidden" class="form-control" id="id_peso" aria-describedby="pesoHelp">
                                <input type="text" class="form-control" id="peso-doc" aria-describedby="pesoHelp">
                                <small id="pesoHelp" class="form-text text-muted">Escriba el tamaño del documento</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Finaliza Modal Documentos -->
        <!-- end modal zone-->