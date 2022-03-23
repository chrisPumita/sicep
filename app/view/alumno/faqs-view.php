<?php $titulo = "Preguntas Frecuentes" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "includes/head.php"; ?>
        <!--css-->
    </head>
    <body>
        <div id="app">
            <div id="main" class="layout-horizontal">
                <?php include_once "includes/header.php"; ?>
                <div class="content-wrapper container">
                    <div class="page-heading">
                        <h3>Preguntas Frecuentes</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <!-- <div class="card-header">
                                                <h4>Preguntas frecuentes</h4>
                                                </div> -->
                                            <div class="card-body">
                                                <!-- CONTENIDO -->
                                                <!-- <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3> -->
                                                <!-- <p class="text-center mb-5">
                                                    Find the answers for the most frequently asked questions below
                                                </p> -->
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> ¿Cómo funciona la inscripción a los cursos?
                                                        </h6>
                                                        <p>
                                                        Para poder comenzar, primero es necesario que te registres con tus datos personales para que puedas acceder a la plataforma y conocer los cursos disponibles. Una vez encuentres el curso de tu interés y hayas revisado sus detalles, así como los documentos necesarios, inscríbete dando click en el botón correspondiente para poder descargar tu ficha de pago y de inscripción. <br>
                                                        <br><strong>Tendrás que subir los documentos que se te soliciten</strong> y una vez sean revisados y se verifique el pago, tu inscripción será confirmada y se te pondrá en contacto con tu profesor asignado.  
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i>¿Como se realiza el pago de un curso?</h6>
                                                        <p>
                                                        Actualmente, el pago correspondiente a la inscripción de los cursos se realiza en cajas de la facultad. Una vez hayas iniciado con el proceso de inscripción, tendrás que descargar tu ficha de pago, la cual tendrás que llevar al lugar indicado para realizar el pago correspondiente a la inscripción. <br> <br>
                                                        Una vez hecho tu pago, <strong>tendrás que subir el comprobante de pago a la plataforma para proceder a su acreditación</strong> por parte del personal administrativo del centro de cómputo.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> 
                                                        ¿En qué horarios se pueden tomar los cursos? ¿Qué modalidad siguen?
                                                        </h6>
                                                        <p>
                                                            Cada curso cuenta con un horario particular previamente definido, el cual podrás consultar en la ficha de información de este, así como su modalidad. Según sea el caso, los cursos pueden ser impartidos de manera presencial o virtual.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> ¿Qué significa que mi cuenta será acreditada? </h6>
                                                        <p>
                                                        Para conocer el porcentaje de descuento que te corresponde, es necesario que sea verificada tu situación académica y a que comunidad correspondes (externa, interna, estudiante UNAM, entre otros), mediante un documento que lo acredite, el cual puede ser tu credencial UNAM o de estudiante, comprobantes de estudios, identificación oficial, etc.  <br> <br>
                                                        El documento de verificación que decidas subir a la plataforma será revisado por el personal correspondiente y una vez acreditado tu cuenta pasará a ser una cuenta verificada. Para subir el documento de verificación, lo puedes hacer desde la página de Mi perfil, en la sección de “Subir documento para verificación”.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i>
                                                            ¿Cómo puedo obtener mi constancia y cuánto tarda?
                                                        </h6>
                                                        <p>
                                                        Una vez completado el curso con una calificación aprobatoria, recibirás una constancia de finalización expedida por las autoridades correspondientes de la UNAM. Este certificado lo podrás descargar en formato PDF dentro de esta misma plataforma, en la sección de Mis cursos > Constancias. <br> <br>
                                                        <strong> El tiempo en que se liberen las constancias dependerá de la demanda y el personal encargado. </strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-4">
                                                        <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i>
                                                            ¿Dónde puedo obtener ayuda con respecto a la plataforma?
                                                        </h6>
                                                        <p>
                                                            Si tienes alguna pregunta con respecto al uso de esta plataforma, la acreditación de pagos o con los cursos puedes preguntarle directamente a tu profesor o ponerte en contacto con: <br>
                                                            L en I Mauricio Jaques Soto <br>
                                                            <strong>cursos.fesc@cuautitlan.unam.mx </strong><br> <br>
                                                            O directamente acudir al Edificio del centro de cómputo, planta baja Km 2.5 Carretera Cuautitlán-Teoloyucan Col. San Sebastián Xhala, Cuautitlán Izcalli, Edo. México C.P. 54714
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
        <?php include 'includes/scripts.php'; ?>
        <!-- Files JS -->
    </body>
</html>