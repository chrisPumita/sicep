
<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="./home">
                    <img src="../assets/images/logo/logo.png" alt="Logo" srcset="">
                </a>
            </div>
            <div class="header-top-right">
                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>

    <nav class="main-navbar">
        <div class="container d-flex menu-container">
            <ul class="w-100">
                <li class="menu-item  ">
                    <a href="./home" class='menu-link'>
                        <i class="fas fa-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <?php if($_SESSION['serv']){ ?>
                <li class="menu-item  ">
                    <a href="./template" class='menu-link'>
                        <i class="fas fa-hands-helping"></i>
                        <span>Servicio Social</span>
                    </a>
                </li>
                <?php } ?>
                <li class="menu-item  has-sub">
                    <a href="#" class='menu-link'>
                        <i class="fas fa-layer-group"></i>
                        <span>Mis Cursos</span>
                    </a>
                    <div class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item  ">
                                    <a href="./mis-cursos" class='submenu-link'><i class="fas fa-chalkboard-teacher"></i> Mis Cursos</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="./constancias" class='submenu-link'><i class="fas fa-certificate"></i> Constancias</a>
                                </li>
                            </ul>
                        </div>
                </li>
                <li class="menu-item active has-sub">
                    <a href="#" class='menu-link'>
                        <i class="fas fa-clipboard-check"></i>
                        <span>Solicitudes</span>
                    </a>
                    <div class="submenu ">
                        <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                        <div class="submenu-group-wrapper">
                            <ul class="submenu-group">
                                <li class="submenu-item  ">
                                    <a href="./documentacion" class='submenu-link'><i class="fas fa-folder-open"></i> Documentacion</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="./inscripcion" class='submenu-link'><i class="far fa-paper-plane"></i> Inscripcion</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="#" class='submenu-link'><i class="far fa-paper-plane"></i> Enviadas</a>
                                </li>
                                <li class="submenu-item  ">
                                    <a href="layout-vertical-navbar.html" class='submenu-link'><i class="fas fa-ban"></i> Rechazadas</a>
                                </li>
                        </div>
                    </div>
                </li>
                <li class="menu-item  has-sub dropdown-menu-end"">
                <a href="#" class='menu-link'>
                    <i class="far fa-question-circle"></i>
                    <span>Ayuda</span>
                </a>
                <div class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        <ul class="submenu-group">
                            <li class="submenu-item  ">
                                <a href="#" class='submenu-link'><i class="fas fa-file-alt"></i> Manual</a>
                            </li>
                            <li class="submenu-item  ">
                                <a href="./faqs" class='submenu-link'><i class="fas fa-question"></i> Preguntas Frecuentes</a>
                            </li>
                            <li class="submenu-item  ">
                                <a href="#" class='submenu-link'><i class="fab fa-rebel"></i> Acerca de</a>
                            </li>
                    </div>
                </div>
                </li>
            </ul>
            <ul class=" w-50 w-100-mobile  justify-content-end d-flex">
                <li class="menu-item  has-sub dropdown-menu-end"">
                <a href="#" class='menu-link'>
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-secondary ">Hola <?php echo $_SESSION['usuario'];?></h6>
                            <p class="mb-0 text-sm ">Alumno</p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="<?php echo $_SESSION['perfil_image'];?>">
                            </div>
                        </div>
                    </div>
                </a>
                <div class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        <ul class="submenu-group">
                            <li class="submenu-item  ">
                                <a href="./mi-perfil" class='submenu-link'>Mi Perfil</a>
                            </li>
                            <?php if($_SESSION['serv']){ ?>
                            <li class="submenu-item  ">
                                <a href="./template" class='submenu-link'>Servicio Social</a>
                            </li>
                            <?php } ?>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="submenu-item  ">
                                <a href="./log-out.php" class='submenu-link'>Salir</a>
                            </li>
                    </div>
                </div>
                </li>
            </ul>
        </div>
    </nav>
</header>