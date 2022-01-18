
<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="horarioVirtual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160"
     aria-hidden="true">
    <div class="modal-md  modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
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
            <div class="modal-body py-1">
                <div class="callout callout-second bg-grey p-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                <i class="fas fa-laptop-house"></i> Agregue el horario a la clase que se realizará de forma virtual o a distancia.
                            </div>
                        </div>
                    </div>
                </div>
                <form id="frm-add-hor-vir">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <h6 class="text-start">Día de clase:</h6>
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
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Hora de Inicio:</h6>
                        <input class="form-control" type="time" value="07:00:00" id="hrsInicio">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Hora de Termino:</h6>
                        <input class="form-control" disabled type="time" value="07:30" id="hrsInicio">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Duración (minutos):</h6>
                        <input class="form-control" type="number" value="30" id="minDuracion">
                    </div>
                </div>
                
                <div class="row">
                <p class="fst-italic text-primary">Si no escribe el link de plataforma o de la reunión, se entederá que no existe o son enlaces dinámicos. Este enlace puede ser configurado por el
                profesor asignado al grupo actual.</p>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <h6 class="text-start">Plataforma virtual:</h6>
                        <select class="form-control" id="plataforma">
                            <option value="">Aulas virtuales/Moddle</option>
                            <option value="">Classroom</option>
                            <option value="">Microsoft Teams</option>
                            <option value="">Edmodo</option>
                            <option value="">Grupo de Facebook</option>
                            <option value="">Grupo de WhatsApp</option>
                            <option value="">Otro</option>
                        </select>
                        <input type="text" class="form-control mt-2" placeholder="Enlace" aria-label="linkPlataforma">                        
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <h6 class="text-start">Videoconferencias:</h6>
                        <select class="form-control" id="generacion">
                            <option value="">Zoom</option>
                            <option value="">Meet</option>
                            <option value="">Webex</option>
                            <option value="">Microsoft Teams</option>
                            <option value="">Facebook Messenger</option>
                            <option value="">Otro</option>
                        </select>
                        <input type="text" class="form-control mt-2" placeholder="Enlace" aria-label="linkPlataforma">                         
                    </div>
                </div>              
            </div>
            
            <div class="modal-footer p-0">
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
