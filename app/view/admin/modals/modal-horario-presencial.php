<!--AGREGA PROFESOR INVITACION CUENTA -->
<div class="modal fade text-left" id="horarioPresencial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-sm  modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel160">
                    Editar horario presencial
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>

            <div class="modal-body py-0">
                <div class="callout callout-second bg-grey py-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-lg-start text-primary bg-gray">
                                Agregue el horario a la clase que se realizará de forma presencial.
                            </div>
                        </div>
                    </div>
                </div>
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
                        <input class="form-control" type="time" value="0" id="hrsInicio">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <h6 class="text-start">Duración (minutos):</h6>
                        <input class="form-control" type="number" value="30" id="minDuracion">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <h6 class="text-start">Edificio:</h6>                        
                        <select class="form-control" id="edificio">
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                        </select>
                    </div>
                    <div class="col-sm-1 p-0 mt-4">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>
                        </button>
                    </div>                    
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <h6 class="text-start">Aula:</h6>
                        <select class="form-control" id="edificio">
                            <option value="">A101</option>
                            <option value="">A102</option>
                            <option value="">C103</option>
                            <option value="">B104</option>
                        </select>
                    </div>
                    <div class="col-sm-1 p-0 mt-4">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-square"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <p class="fst-italic text-primary">Esta aula permite únicamente un cupo de 30 alumnos.</p>
                </div>
            </div>

            <div class="modal-footer p-0">
                <div class="form-group row">
                    <div class="col-12">
                        <input type="submit" id="btnEnviar" name="btnEnviar" value="Guardar" class="btn btn-primary btn-user btn-block" data-bs-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>