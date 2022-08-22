<?php
#Cong del servidor, donde esta alojada la pagina web
const PROJECT_NAME = 'proyectoenlinea';
//const PROJECT_NAME = 'sicep';
define("SERVER", $_SERVER['SERVER_NAME'] ."/".PROJECT_NAME."/");
const COMPANY = "SICEP Sistema de Inscripciones a Cursos";
const MONEDA = "$";
#configura la zona horaria del sistema
date_default_timezone_set("America/Mexico_City");
