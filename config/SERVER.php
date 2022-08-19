<?php
#CONFIGURACION DEL SERVIDOR
#cONSTANTES DE PARAMETROS DE LA CONEXION A LA BD
#
date_default_timezone_set("America/Mexico_City");

const SERVER = "localhost";
const DB = "seltic";
const USER = "root";
const PASS = "";

#CONEXION POR PDO en caso de usar PDO

const SGDB = "mysql:host=".SERVER.";dbname=".DB;

#Encriptar por hash
const METHOD = "AES-256-CBC";
const SECRET_KEY = '$SICEP@2022';
const SECRET_IV = '037970';

#USER MAILING
const HOST = 'host.com';
const NAME_MAIL = "SICEP BOOT";
const USERNAME_MAIL = 'mail@host.com';
const PW_MAIL = 'secret';
const PORT_MAIL = 465;
//const PORT_MAIL = 587;
