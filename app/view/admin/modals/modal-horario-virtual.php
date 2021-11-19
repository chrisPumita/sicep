
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="horarioVirtual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-lg  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar horario virtual
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
                                Agregue el horario a la clase que se realizará de forma virtual/a distancia.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                        <h5 class="text-start">Día de clase:</h5>
                        </div>
                        <div class="col-md-6">                            
                            <select class="form-control" id="diaClase">
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miércoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sábado</option>
                                <option value="7">Domingo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 mb-3 mb-sm-0">
                            <label class="label" for="diaClase">Hora de Inicio:</label>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                            <div class="row">
                                <input class="form-control" type="number" value="1" id="hora">
                            </div>
                        </div>

                        <div class="col-sm-1 mb-3 mb-sm-0">
                            <label>hrs.</label>
                        </div>

                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                            <div class="row">
                                <input class="form-control" type="number" value="0" id="minutos">
                            </div>
                        </div>

                        <div class="col-sm-1 mb-3 mb-sm-0">
                            <label>min.</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label class="label text-start" for="diaClase">Duración:</label>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                            <div class="row">
                                <input class="form-control" type="number" value="0" id="minDuracion">
                            </div>
                        </div>

                        <div class="col-sm-1 mb-3 mb-sm-0">
                            <label>minutos</label>
                        </div>
                    </div>
                    
                    <div class="row">
                    <p class="fst-italic text-primary">Si no escribe el link de plataforma o de la reunión, se entederá que no existe o los enlaces son dinámicos.</p>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Plataforma virtual:</label>
                            <select class="form-control" id="plataforma">
                                <option value="">Aulas virtuales/Moddle</option>
                                <option value="">Classroom</option>
                                <option value="">Microsoft Teams</option>
                                <option value="">Edmodo</option>
                            </select>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <label>Link:</label>
                            <input type="text" class="form-control" placeholder="" aria-label="linkVideo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Videoconferencias:</label>
                            <select class="form-control" id="generacion">
                                <option value="">Zoom</option>
                                <option value="">Meet</option>
                                <option value="">Webex</option>
                                <option value="">Microsoft Teams</option>
                            </select>
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <label>Link:</label>
                            <input type="text" class="form-control" placeholder="" aria-label="linkVideo">
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
