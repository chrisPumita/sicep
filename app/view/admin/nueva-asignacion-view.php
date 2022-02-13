<?php $titulo = "Nueva Asignacion de Grupo";
$id= $_POST['id'];
if(!isset($id)) header("Location: ./lista-cursos");
?>
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
                                    Para abrir nuevo grupo de <span id="nombreCurso" class="badge bg-primary text-wrap"></span>,
                                    seleccione el profesor que impartirá la clase,
                                    así como la modalidad y el grupo al que se le asignará. Seleccione la generación
                                    y el semestre en que se impartirá el curso. Indique si se presentara en Campo 1
                                    o campo 4, o elija Otro por si no es ninguna de estas. Coloque el cupo
                                    que debe tener, si es que va a cambiar al igual que el costo predefinido de
                                    <span id="costoCursoPred" class="badge bg-primary text-wrap"></span>.
                                </div>
                                <div class="col-sm-2 align-items-center">
                                    <a href="./lista-cursos"><button class="btn btn-primary w-100 mr-3 mt-3 mb-3">
                                            <i class="fas fa-plus"></i> Ver todos</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="card">
                    <div class="col-md-12 text-center">
                        <div class="img" id="fondoImg">
                            <div class="overlay"></div>
                            <div class="mx-auto">
                                <h4 class="text-light text-left">
                                    <strong><span  id="nameCursoTittle"></span></strong>
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
                                            <input type="hidden" id="idCursoToAsig" value="<?php echo $id ?>">
                                            <label class="form-control-label" for="profesorAsig"><span class="obliga">*</span>Profesor asignado:</label>
                                            <select class="form-control" id="profesorAsig" name="profesorAsig">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="modalidad"><span class="obliga">*</span>Modalidad:</label>
                                            <select class="form-control" id="modalidad" name="modalidad">
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
                                            <select class="form-control" id="grupos" name="grupos" disabled> </select>
                                            <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#modalCreaGrupoCurso">
                                                <i class="fas fa-plus-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="transmision"><span class="obliga">*</span>Generación:</label>
                                        <select class="form-control" id="generacion" name="generacion"></select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="semestre"><span class="obliga">*</span>Semestre:</label>
                                        <select class="form-control" id="semestre" name="semestre"> </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label" for="campus"><span class="obliga">*</span>Sede:</label>
                                        <select class="form-control" id="campus" name="campus">
                                            <option value="0">Campo 1</option>
                                            <option value="1" selected>Campo 4</option>
                                            <option value="2">Otro</option>
                                        </select>
                                    </div>
                                    <span class="py-2" id="alertGpos"></span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="numCupo"><span class="obliga">*</span>Cupo:</label>
                                        <input class="form-control" type="number" value="30" id="numCupo" name="numCupo">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-control-label" for="costo"><span class="obliga">*</span>Costo:</label>
                                        <input class="form-control" type="number" min="0" max="99999" name="costo" id="costo" value="0">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="heading-small text-muted mb-4">Fechas importantes</h6>
                                <div class="row text-end">
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="inicioInsc">Inscripciones del</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <input type="date" id="inicioInsc" name="inicioInsc" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                        </div>
                                        <div class="col-sm-2 mb-3 mb-sm-0 ">
                                            <label for="finInsc">al </label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <input type="date" id="finInsc" name="finInsc" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="InicioCurso">Inicio de Clases:</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <div class="row">
                                                <input type="date" id="InicioCurso" name="InicioCurso" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                            </div>
                                        </div>
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="finCurso">Fin curso:</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 ">
                                            <div class="row">
                                                <input type="date" id="finCurso" name="finCurso" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label class="label" for="inicioCal">Calificaciones del</label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="date" id="inicioCal" name="inicioCal" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                        </div>
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <label for="finCal">al </label>
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="date" id="finCal" name="finCal" max="3000-12-31" min="1000-01-01"  value="<?php echo date("Y-m-d");?>" class="form-control fecha">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <div class="row">
                                        <h6 class="heading-small text-muted mb-4">Notas Adicionales</h6>
                                        <label class="form-control-label" for="notas">Notas:</label>
                                        <textarea class="form-control" id="notas" name="notas" rows="5" placeholder="Escriba alguna nota importante aqui, este campo puede quedar vacio"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-3">
                                    <h6 class="heading-small text-muted mb-4">Crear y publicar</h6>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong><i class="fas fa-eye"></i> Publicar Ahora:</strong> Si decide publicar el grupo ahora, este aparecerá en
                                        la pagina principal y quedará disponible para que los alumnos se inscriban. Si creó nuevo grupo, los descuentos no estan habilitados y
                                        queda predeeterminado todo el público. <a href="./help"><i class="fas fa-question-circle"></i></a>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="chkPublica" name="chkPublica" class="form-check-input">
                                            <label for="chkPublica"><i class="fas fa-eye-slash"></i> Publicar ahora</label>
                                        </div>
                                    </div>
                                    <div class="form-group text-end">
                                        <button class="btn btn-primary mr-3 mt-3 mb-3" type="submit">
                                            <i class="fas fa-check-circle"></i> Guardar</button>
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
            <?php include "modals/modal-add-grupo-curso.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>
<!-- Agregar solo cuando exista una tabla para mostrar-->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="./service/asignacion-new.js"></script>
<script src="./service/asignacion-gral.js"></script>
</body>
</html>