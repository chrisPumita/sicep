<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="./home"><img src="../assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Hola <?php echo $_SESSION['usuario'];?></li>
                <li class="sidebar-item ">
                    <a href="./home-teach" class='sidebar-link'>
                        <i class="fas fa-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-coffee"></i>
                        <span>Mis Cursos</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="./lista-propuestas">Propuestas</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./nuevo-curso">Proponer Nuevo</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-chalkboard"></i>
                        <span>Mis Grupos</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="./lista-grupos-profesor">Actuales</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./prof-historial-grupos">Historial</a>
                        </li>
                    </ul>
                </li>
                <?php if( $_SESSION['admin']) {?>
                <li class="sidebar-title">Administración</li>

                <li class="sidebar-item ">
                    <a href="./home" class='sidebar-link'>
                        <i class="fas fa-th-large"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="./lista-cursos" class='sidebar-link'>
                        <i class="fas fa-graduation-cap"></i>
                        <span id="contCursosSideBar"></span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-users"></i>
                        <span>Grupos</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#selectCourse">Abrir Grupo</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./lista-grupos">Ver actuales</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./historial-grupos">Ver Historial</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a href="./solicitudes-inscripcion" class='sidebar-link'>
                        <i class="fas fa-clipboard-check"></i>
                        <span id="countSolicSidebar"></span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="./documentos" class='sidebar-link'>
                        <i class="fas fa-file-pdf"></i>
                        <span id="countDoscRevisaSidebar"></span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Profesores</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#addNewProfesor">Agregar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./lista-profesores">Ver todos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-user-graduate"></i>
                        <span  id="counterSolicAlumnos"></span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="./lista-alumnos">Ver todos</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="./cuentas-alumnos" id="counterSolicAlumnosView"></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="fas fa-user-tie"></i>
                            <span>Cuentas</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="./lista-cuentas">Ver todas</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="./lista-servicio-social">Servicio Social</a>
                            </li>
                        </ul>
                    </li>
                <li class="sidebar-item ">
                    <a href="./preferencias" class='sidebar-link'>
                    <i class="fas fa-tasks"></i>
                        <span>Preferencias</span>
                    </a>
                </li>
                <?php }?>
                <li class="sidebar-title">Cuenta</li>
                <li class="sidebar-item  ">
                    <a href="./perfil" class='sidebar-link'>
                        <i class="fas fa-user-circle"></i>
                        <span>Mi Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item active ">
                    <a href="./log-out.php" class='sidebar-link'>
                        <span><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>