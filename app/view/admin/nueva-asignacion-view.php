<?php $titulo = "Nueva Asignacion de Grupo" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
</head>

<body>
<div id="app">
    <?php include "includes/sidebar.php"?>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-content">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Crear nueva asignacion de grupo</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Cursos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nueva Asignacion</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-12 col-lg-9">
                    <div class="callout callout-second">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eos eveniet
                                    perspiciatis sequi voluptatem. Alias aliquid, assumenda beatae hic maxime
                                    necessitatibus non possimus tempora. Accusamus aperiam at corporis harum provident.
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-primary w-100 mr-3 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewProfesor">
                                        <i class="fas fa-plus"></i> Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="card">
                    <div class="col-md-12 text-center">
                        <div class="img" style="background-image: url(https://logisticayaduanas.com.mx/wp-content/uploads/2018/06/banner-cursos-y-diplomados-en-comercio-exterior.jpg); ">
                            <div class="overlay"></div>
                            <div class="mx-auto">
                                <h4 class="text-light text-left">
                                    <strong>Aspel NOI Basico I </strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Porfavor, complete la siguiente información, una vez creada la Asignacion, esta quedara disponible
                        para inscripciones de los alumnos.
                    </div>
                    <hr>
                    <div class="card-body">
                        <form class="user needs-validation" id="frm-add-asignacion" role="form" autocomplete="off" novalidate="">
                            <div class="pl-lg-4">
                                <h6 class="heading-small text-muted mb-4">Detalles Generales de la asignación</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="color"><span class="obliga">*</span>Profesor asignado:</label>
                                            <select class="form-control" id="profesorAsig">
                                                <option value="5">Calderon Hinojosa Felipe</option>
                                                <option value="2">Cortes Ponciano Paola</option>
                                                <option value="8">Echeverria Calderon Luisa</option>
                                                <option value="4">Garduño Pioquinto Christian</option>
                                                <option value="6">Gonzalez Perez Carmen</option>
                                                <option value="9">Hernandez Romero Maria</option>
                                                <option value="7">Mendoza Perez Alvaro</option>
                                                <option value="1">Pineda Pacheco Cesar Haziel</option>
                                                <option value="11">ROmo Segundo FRancisco</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="color"><span class="obliga">*</span>Modalidad:</label>
                                            <select class="form-control" id="modalidad">
                                                <option value="0">Presencial</option>
                                                <option value="1">En Línea</option>
                                                <option value="2">Mixto</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Grupo:</label>
                                        <div class="d-flex">
                                            <select class="form-control" id="generacion">
                                                <option value="2021">1101</option>
                                                <option value="2022">1102</option>
                                                <option value="2023">1103</option>
                                                <option value="2024">1104</option>
                                            </select>
                                            <button class="btn btn-primary mx-3">
                                                <i class="fas fa-plus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Generación:</label>
                                        <select class="form-control" id="semestre">
                                            <option value="2021-2">2020</option>
                                            <option value="2022-1">2021</option>
                                            <option value="2022-2">2022</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Semestre:</label>
                                        <select class="form-control" id="semestre">
                                            <option value="2021-2">2021-2</option>
                                            <option value="2022-1">2022-1</option>
                                            <option value="2022-2">2022-2</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Sede:</label>
                                        <select class="form-control" id="campus">
                                            <option value="0">Campo 1</option>
                                            <option value="1">Campo 4</option>
                                            <option value="2">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Cupo:</label>
                                        <input class="form-control" type="number" value="150" id="numCupo">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Costo:</label>
                                        <input class="form-control" type="number" min="0" max="99999"name="costo" id="costo" value="0">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="heading-small text-muted mb-4">Fechas importantes</h6>
                                <div class="row">
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="campo">Inscripciones</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <div class="row">
                                                <div class="d-flex">
                                                    <div class="col-2">
                                                        <label for="">del </label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="col-2">
                                                        <label for="">al </label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="campo">Calificaciones</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <div class="row">
                                                <div class="d-flex">
                                                    <div class="col-2">
                                                        <label for="">del </label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="col-2">
                                                        <label for="">al </label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="campo">Fecha límite de inscripciones:</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <div class="row">
                                                <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Revise bien los campos</strong> Una vez registrado.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Inicio:</label>
                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Fin:</label>
                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Inicio:</label>
                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Fin:</label>
                                        <input type="date" name="inicio" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6 class="heading-small text-muted mb-4">Configurar Descuentos personalizados</h6>
                                    <div class="mt-1 mb-1 overflow-auto">
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
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="row">
                                        <h6 class="heading-small text-muted mb-4">Notas Adicionales</h6>
                                        <label class="form-control-label" for="transmision">Notas:</label>
                                        <textarea class="form-control" id="txtnotas" rows="5"></textarea>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong><i class="fas fa-eye"></i> Publicar Ahora:</strong> Si decide publicar el grupo ahora, este aparecerá en
                                            la pagina principal y quedará disponible para que los alumnos se inscriban.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox3" class="form-check-input">
                                                <label for="checkbox3"><i class="fas fa-eye-slash"></i> Publicar ahora</label>
                                            </div>
                                        </div>
                                        <div class="form-group text-end">
                                            <button class="btn btn-primary w-50 mr-3 mt-3 mb-3" type="submit">
                                                <i class="fas fa-check-circle"></i> Crear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </section>

        </div>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/main.js"></script>

<!-- Agregar solo cuando exista una tabla para mostrar-->
</body>

</html>