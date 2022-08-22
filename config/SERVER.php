<?php
#CONFIGURACION DEL SERVIDOR
#cONSTANTES DE PARAMETROS DE LA CONEXION A LA BD
date_default_timezone_set("America/Mexico_City");

const SERVER = "localhost"; #Nombre del servidor
const DB = "seltic"; #Nombre de la base de datos
const USER = "root"; #Usuario
const PASS = ""; #Contraseña, en caso de tener una

#CONEXION POR PDO en caso de usar PDO

const SGDB = "mysql:host=".SERVER.";dbname=".DB;

#Encriptar por hash
const METHOD = "AES-256-CBC";
const SECRET_KEY = '$SICEP@2022';
const SECRET_IV = '037970';



