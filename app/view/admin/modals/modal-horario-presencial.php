<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="horarioPresencial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-md  modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar horario presencial
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-add-horario-presencial">
            <div class="modal-body py-0">
                <div class="callout callout-second bg-grey py-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                <i class="fas fa-chalkboard-teacher"></i> Agregue el horario a la clase que se realizará de forma presencial.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">
                        <h6 class="text-start">Día de clase:</h6>
                        <select class="form-control" id="diaClase">
                            <option value="1" select>Lunes</option>
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
                        <input class="form-control" type="time" value="07:00" id="hrsInicioPrecencial">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Hora de Termino:</h6>
                        <input class="form-control" disabled type="time" value="08:00" id="hrsFinPrecencial">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Duración (minutos):</h6>
                        <input class="form-control" type="number" value="60" id="minDuracionPrecencial">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <h6 class="text-start">Aula:</h6>
                        <select class="form-control" id="aulas"> </select>
                    </div>
                    <div class="col-sm-2 p-0 mt-4">
                        <a href="./preferencias">
                            <button class="btn btn-primary">
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <p class="fst-italic text-primary">Esta aula permite únicamente un cupo de <span id="cupoAula"></span> alumnos.</p>
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