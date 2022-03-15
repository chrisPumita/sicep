<?php
    session_start();
    $btnWeb = "";
    if(isset($_SESSION['typeCount'])&&$_SESSION['typeCount']=="student" ){
        $btnWeb = '<div class="dropdown ">
                      <button class="btn btn-primary btn-sm dropdown-toggle d-flex align-items-center mt-4 mx-2 ms-lg-6 ps-4 mb-0 me-1 mt-2 mt-md-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-sm mx-1">
                                <img src="./resources/default-avatar.png">
                            </div>
                        </div>Hola '.$_SESSION['usuario'] .'
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="./app/home" target="_blank">Ir al Home</a></li>
                        <li><a class="dropdown-item" href="./app/mi-perfil" target="_blank">Perfil</a></li>
                        <li><a class="dropdown-item" href="./app/log-out.php">Salir</a></li>
                      </ul>
                    </div>';
    }
    else{
        $btnWeb = '<a href="./login.php">
                      <button type="button" class="btn btn-primary mt-4 mx-2 ms-lg-6 ps-4 mb-0 me-1 mt-2 mt-md-0">Iniciar Sesión</button> 
                  </a>';
    }
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/icon.png">
  <link rel="icon" type="image/png" href="./assets/images/icon.png">
  <title>
    Bienvenidos a SICEP - FESC
  </title>
  <!--     Fonts and icons     -->
<!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!--swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/styles.css">

        <style type="text/css">
          .background {
              position: absolute;
              display: block;
              top: 0;
              left: 0;
              z-index: 0;
          }
        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }

        #triangle-topleft {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 0;
            height: 0;
            border-top: 100px solid var(--second);
            border-right: 100px solid transparent;
        }

        .text-block {
            color: white;
            position: relative;
            top: -60px;
            left: 15px;
            font-weight: bold;
            padding:5px;
            transform: rotate(-45deg);
        }

        .text-block {
            color: white;
            position: relative;
            top: -75px;
            left: 25px;
            font-weight: bold;
            padding: 0px;
            transform: rotate(-45deg);
            line-height: 1;
        }

          .swiper-slide {
              background: none;
          }
    </style>
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
        <a class="navbar-brand" href="./" title="SICEP-FES Cuautitlán" data-placement="bottom" >
            <img src="./assets/images/logo/logo.png" alt="" height="45">
        </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
            <div class="navbar-nav ">
                <a class="nav-link mx-2 ms-lg-6 ps-2 d-flex justify-content-between cursor-pointer align-items-center text-primary bold" aria-current="page" href="#">INICIO</a>
                <a class="nav-link mx-2 ms-lg-6 ps-2 d-flex justify-content-between cursor-pointer align-items-center text-primary" href="#nosotros">NOSTROS</a>
                <a class="nav-link mx-2 ms-lg-6 ps-2 d-flex justify-content-between cursor-pointer align-items-center text-primary" href="#cursos">CURSOS</a>
                <a class="nav-link mx-2 ms-lg-6 ps-2 d-flex justify-content-between cursor-pointer align-items-center text-primary" href="#contacto" tabindex="-1" aria-disabled="true">CONTACTO</a>
            </div>
        </ul>
            <span class="navbar-text">
                  <?php echo $btnWeb ?>
            </span>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <div class="bg-gradient-dark bg-gradient-primary">
      <div class="page-header min-vh-100" style="background-image: url(./assets/images/fesc-bg.jpg") loading="lazy">
          <span class="mask bg-gradient-primary opacity-5"></span>
          <canvas class="background position-absolute"></canvas>
          <script src="./assets/js/particles.js"></script>
          <div class="container py-8">
              <div class="row">
                  <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                      <h1 class="text-white mb-4">Inscríbete a los cursos de la <strong>FES Cuautitlán</strong></h1>
                      <p class="caps text-secondary opacity-8 lead pe-5 me-5">El departamento de Cómputo e Informática te brinda una variedad de cursos para ampliar tus conocimientos y crecer profesionalmente.</p>
                      <div class="buttons">
                          <a href="#cursos">
                              <button type="button" class="btn btn-primary mt-4">Nuestros Cursos</button>
                          </a>
                          <a href="login.php">
                              <button type="button" class="btn btn-secondary text-light mt-4">Regístrate</button>
                          </a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6" id="nosotros">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                  <h5>Multidisciplinarios</h5>
                  <p>Encontrarás una amplia variedad de cursos ofrecidos por la universidad, los cuales abarcan diversas temáticas y disciplinas.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                  <h5>Validez Oficial</h5>
                    <p>Todos los cursos ofrecidos en esta plataforma cuentan con validez oficial avalados por la UNAM, además de contar con valor curricular. </p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                  <h5>Certificados</h5>
                  <p>Cada vez que finalices un curso, obtendrás una constancia que avalará tus conocimientos.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                  <h5>A Distancia o Presencial</h5>
                    <p>Toma los cursos dentro de las instalaciones de la Facultad, o en línea a través de diversas plataforma de videoconferencia con profesores especializados.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/images/lab-info.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal">
                  <a href="#;">Cursos Virtuales y Presenciales</a>
                </h5>
                <p class="mb-0">
                  Realiza tu registro, ve nuestra oferta educativa e inscríbete a uno de los diversos cursos que tenemos para ti.
                </p>
                  <p class="mb-0">
                      <a href="#" class="btn btn-primary py-3 mt-4">Regístrate</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
      <section class="pb-5 position-relative bg-gradient-dark-invert mx-n3"  id="alertOferta">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-start mb-0 mt-5">
                      <h3 class="text-white z-index-1 position-relative text-primary"><span id="countAsig">{n}</span> GRUPOS ABIERTOS</h3>
                      <p class="text-white opacity-8 mb-0 text-primary">Selecciona un grupo y manda tu solicitud. Envia la documentación solicitada y
                          listo. Descrubre los descuentos que tenemos. Los cursos indicados con <span class="badge bg-dark position-relative">
                      <span class="blob green positionBadge"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INSCRIPCIONES
                      </span> están disponibles para inscribirse. NO PIERDAS TU LUGAR.</p>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
              <div class="row">
                  <!-- Swiper -->
                  <div class="swiper SwiperAsig py-6" id="swiperContainer">
                      <div class="swiper-wrapper" id="swiperCardsContainerAsig">
                          <!--AJAX response-->
                      </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-pagination"></div>
                  </div>
              </div>
          </div>
      </section>
    <section class="pb-5 position-relative bg-gradient-dark mx-n3" id="cursos">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-0 mt-5">
            <h3 class="text-white z-index-1 position-relative">CONOCE TODOS LOS CURSOS</h3>
            <p class="text-white opacity-8 mb-0">Cada semestre se abren grupos para diferentes cursos. Echa un vistazo a la oferta educativa que tenemos para ti.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
            <!-- Swiper -->
            <div class="swiper SwiperCursos py-6">
                <div class="swiper-wrapper" id="swiperCardsContainer">
                    <!--AJAX response-->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
      </div>
    </section>

    <!-- -------- Marcas, lenguajes de programacion, etc -------- -->
    <section class="pt-6 pb-6" id="count-stats">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-3">
            <h1 class="text-gradient text-primary"><span id="state1" countTo="15000">0</span>+</h1>
            <h5>CERTIFICADOS</h5>
            <p>Más de 15,000 certificados entregados en distintas carreras</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-primary"><span id="state2" countTo="25000">0</span>+</h1>
            <h5>ALUMNOS</h5>
            <p>Más de 25000 Alumnos se han inscrito a algún curso</p>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-primary"><span id="state3" countTo="15">0</span>+</h1>
            <h5>CURSOS</h5>
            <p>Ofrecemos más de 25 cursos que se ajustan a todos los intereses.</p>
          </div>
        </div>
      </div>
    </section>
      <section class="img  mx-n3" style="background-image: url(./assets/images/online_clases.jpg);">
          <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-md-12 text-center">
                          <div class="overlay"></div>
                      <div class="row">
                          <div class="col-md-12 text-start mb-5 mt-5">
                              <h3 class="text-white z-index-1 position-relative">AVISO POR PANDEMIA</h3>
                              <p class="text-white opacity-8 mb-0">Por el momento y derivado a las condiciones sanitarias por la pandemia todos los cursos son en modalidad remota.
                                  Las clases se darán mediante herramientas síncronas (video reuniones) y complementos asíncronos (actividades no en tiempo real)</p>
                          </div>
                          <div class="col-md-12 text-center">
                              <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ver mas..</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section>
          <div class="container">
              <div class="row d-flex">
                  <div class="col-md-12 about-intro">
                      <div class="row">
                          <div class="col-md-6 d-flex">
                              <div class="d-flex about-wrap p-5 img-2 d-flex align-items-center justify-content-center">
                                  <img src="./assets/images/certificado2.jpg" class="img-fluid border-radius-lg" alt="Responsive image">
                              </div>
                          </div>
                          <div class="col-md-6 pl-md-5 py-5">
                              <div class="row justify-content-start pb-3">
                                  <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                                      <span class="subheading">Constancia con validez oficial</span>
                                      <h2 class="mb-4">Recibe una Constancia de validez oficial</h2>
                                      <p>Una vez finalizado el curso, tu profesor comenzará la evaluación de tu desempeño. Al obtener una calificación aprobatoria, la universidad liberá tu cosntancia de validación con valor curricular y requisito para trámites de titulación.</p>
                                      <p>¿Terminaste tu curso? <strong>Tramita tu certificado</strong>, ahora es digital.</p>
                                      <p><a href="#" class="btn btn-primary">validar Certificado</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <h4>Ya tienes una cuenta en SICEP</h4>
            <p class="mb-4">
              Inicia Sesión para poder inscribirte a los cursos que tenemos para ti. Es muy fácil.
            </p>
            <div class="row">
              <div class="col-8">
                <div class="input-group input-group-outline">
                    <a href="./login.php" class="btn btn-primary">Iniciar Sesión</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-50 w-100 position-relative z-index-2" src="./assets/img/macbook.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5 pt-5">
        <div class="container">
          <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60092.53386501379!2d-99.18709864397943!3d19.72184514227045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21fe02541babb%3A0x13d9c1b986e25ecc!2sFacultad%20de%20Estudios%20Superiores%20Cuautitl%C3%A1n!5e0!3m2!1ses!2sus!4v1647114425852!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
    </section>
    <!-- -------- TERMINAN SECCIONES  ------- -->
  </div>
  
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-4 mb-4 ms-auto">
            <h6 class="text-sm">Acerca de</h6>
          <div>
              <ul class="d-flex flex-row ms-n3 nav">
                  <li class="nav-item">
                      <a class="px-2" href="./" target="_blank">
                          <img src="./assets/images/icon.png" height="30" alt="main_logo">
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="px-2" href="http://informatica.cuautitlan.unam.mx/" target="_blank">
                          <img src="./assets/images/logo_coordinacion.png" height="30" alt="main_logo">
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="px-2" href="https://www.cuautitlan.unam.mx/#gsc.tab=0" target="_blank">
                          <img src="./assets/images/alas.png" height="30" alt="main_logo">
                      </a>
                  </li>
              </ul>


            <p class="mb-4 text-dark my-4 text-sm font-weight-light">
                Sistema de Inscripcion de Cursos para Estudiantes y Profesionales</p>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/coordinacionLicInformatica" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.instagram.com/dci_fesc/" target="_blank">
                  <i class="fab fa-instagram text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/c/Coordinaci%C3%B3ndeInform%C3%A1ticaFESC" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
            <h6 class="text-sm">Enlaces</h6>
              <ul class="flex-column ms-n3 nav">
                  <li class="nav-item"><a class="nav-link" href="http://informatica.cuautitlan.unam.mx/" class="py-2 d-block">Coordinación de Informática</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://sites.google.com/cuautitlan.unam.mx/cursos-dci/inicio?authuser=0" class="py-2 d-block">Centro de cómputo</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.cuautitlan.unam.mx/#gsc.tab=0" class="py-2 d-block">Nuestra Facultad</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.unam.mx/" class="py-2 d-block">Nuestra universidad</a></li>
              </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-6 mb-4">
            <h6 class="text-sm">Cursos recientes</h6>
            <ul class="flex-column ms-n3 nav">
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">Iniciacion al coomputo I</a></li>
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">Iniciacion al coomputo I</a></li>
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">Excel Avanzado</a></li>
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">SUA Para Principiantes</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-12 col-12 mb-4">
            <h6 class="text-sm">Contacto</h6>
            <p class="mb-4 text-dark my-4 text-sm font-weight-light">
                Edificio del centro de cómputo, planta baja Km 2.5 Carretera Cuautitlán-Teoloyucan Col. San
                Sebastián Xhala, Cuautitlán Izcalli Edo. México C.P. 54714</p>
            <ul class="flex-column ms-n3 nav">

                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block"> <strong>Jefatura del Centro de Tecnologías en Cómputo y Comunicación</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">	Ing. León Mauricio Muñoz Miranda </a></li>
                <li class="nav-item"><a class="nav-link" href="#" class="py-2 d-block">	cursos.fesc@cuautitlan.unam.mx</a></li>
            </ul>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
               Copyright © <script>
                document.write(new Date().getFullYear())
              </script> SICEP - Derechos Reservados | Creado con por <a href="https://reckreastudios.com" target="_blank">Servicio Social</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- <?php include "../alumno/modals/detalles-curso.php"?> -->
  <!--   Core JS Files   -->
  <script src="./assets/vendors/jquery/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="./assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="./assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="./assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>

  <!--AJAX SERIVICE-->
  <script src="./app/service/web-site.js" type="text/javascript"></script>
  <script src="./app/service/general/tipos.js" type="text/javascript"></script>
  <script src="./app/service/general/tools.js" type="text/javascript"></script>

  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp3 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp3.error) {
              countUp3.start();
            } else {
              console.error(countUp3.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
  <script type="text/javascript">
      window.onload = function() {
          Particles.init({
              selector: '.background',
              color: ['#196398', '#CDAC12', '#efefef'],
              connectParticles: true,
              responsive: [{
                  breakpoint: 800,
                  options: {
                      color: '#196398',
                      maxParticles: 80,
                      connectParticles: false
                  }
              }]
          });
      };
  </script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <!-- Initialize Swiper -->
  <script>
      let propiedades = {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          loop: true,
          loopFillGroupWithBlank: true,
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          breakpoints: {
              640: {
                  slidesPerView: 2,
                  spaceBetween: 20,
              },
              768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
              },
              768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
              },
              1024: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
              1550:{
                  slidesPerView: 4,
                  spaceBetween: 50,
              },
              2000:{
                  slidesPerView: 5,
                  spaceBetween: 50,
              }
          },
      };

      var swiper = new Swiper(".SwiperCursos", propiedades);
      var swiperAsig = new Swiper(".SwiperAsig", propiedades);
  </script>

</body>

</html>