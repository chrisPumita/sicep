<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Regístrate</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="nombreAlumno" id="nombreAlumno" required="" placeholder="Nombre">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <input type="text" class="form-control form-control-user" name="appAlumno" id="appAlumno" required="" placeholder="Primer Apellido">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <input type="text" class="form-control form-control-user" name="apmAlumno" id="apmAlumno" required="" placeholder="Segundo Apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="tel" class="form-control form-control-user" name="telAlumno" id="telAlumno" required="" placeholder="Teléfono">
                        </div>
                        <div class="col-sm-6 d-flex mb-3">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Sexo:</label>
                                </div>
                                <div class="col-lg-10 col-9 d-flex">
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="sexo" id="mujer" checked="">
                                        <label class="form-check-label" for="mujer">
                                            Femenino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="hombre" >
                                        <label class="form-check-label" for="hombre">
                                            Masculino
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="correoAlumno" id="correoAlumno" required="" placeholder="Correo Electrónico">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" name="contrasena" id="contrasena" required="" placeholder="Password">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" name="contrasenaconfirmar" id="contrasenaconfirmar" required="" placeholder="Repeat Password">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="exampleFormControlSelect2">Estado</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="estados" id="estados"><option value="1">Aguascalientes</option><option value="2">Baja California</option><option value="3">Baja California Sur</option><option value="4">Campeche</option><option value="7">Chiapas</option><option value="8">Chihuahua</option><option value="9">Ciudad de México</option><option value="5">Coahuila de Zaragoza</option><option value="6">Colima</option><option value="10">Durango</option><option value="11">Guanajuato</option><option value="12">Guerrero</option><option value="13">Hidalgo</option><option value="14">Jalisco</option><option value="15">México</option><option value="16">Michoacán de Ocampo</option><option value="17">Morelos</option><option value="18">Nayarit</option><option value="19">Nuevo León</option><option value="20">Oaxaca</option><option value="21">Puebla</option><option value="22">Querétaro</option><option value="23">Quintana Roo</option><option value="24">San Luis Potosí</option><option value="25">Sinaloa</option><option value="26">Sonora</option><option value="27">Tabasco</option><option value="28">Tamaulipas</option><option value="29">Tlaxcala</option><option value="30">Veracruz de Ignacio de la Llave</option><option value="31">Yucatán</option><option value="32">Zacatecas</option></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="exampleFormControlSelect2">Municipio</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="municipios" id="municipios"><option value="1">Aguascalientes</option><option value="2">Asientos</option><option value="3">Calvillo</option><option value="4">Cosío</option><option value="10">El Llano</option><option value="5">Jesús María</option><option value="6">Pabellón de Arteaga</option><option value="7">Rincón de Romos</option><option value="11">San Francisco de los Romo</option><option value="8">San José de Gracia</option><option value="9">Tepezalá</option></select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="exampleFormControlSelect2">Procedencia</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="procedencia" id="procedencia"><option value="1">Comunidad FESC</option><option value="2">Comunidad UNAM</option><option value="3">Ex-Alumno FESC</option><option value="4">Ex-Alumno UNAM</option><option value="5">Externos de fuera</option><option value="6">Personal UNAM</option></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="exampleFormControlSelect2">Universidad</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="universidades" id="universidades"><option value="3">INSTITUTO POLITÉCNICO NACIONAL (IPN)</option><option value="2">UNIVERSIDAD NACIONAL AUTÓNOMA DE MEXICO (UNAM)</option><option value="0">OTRO</option></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-user d-block" name="nombreUni" id="nombreUni" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="carrera" id="carrera" required="" placeholder="Carrera/Profesion actual">

                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="matricula" id="matricula" required="" placeholder="No de Cuenta/Matricula">
                        </div>
                        <div class="col-sm-6">
                            <input type="hidden" class="form-control form-control-user" name="catpcha" id="catpcha" required="" placeholder="No de Cuenta/Matricula">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <p>Al hacer clic en "Registrarme", aceptas nuestras Condiciones,
                                la Política de datos y la Política de cookies.</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Registrarme" class="btn btn-primary btn-user btn-block">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
