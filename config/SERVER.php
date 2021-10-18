<?php
#CONFIGURACION DEL SERVIDOR
#cONSTANTES DE PARAMETROS DE LA CONEXION A LA BD
#
const SERVER = "localhost";
const DB = "seltic";
const USER = "root";
const PASS = "";

#CONEXION POR PDO en caso de usar PDO

const SGDB = "mysql:host=".SERVER.";dbname=".DB;

#Encriptar por hash
const METHOD = "AES-256-CBC";
const SECRET_KEY = '$SISEP@2021';
const SECRET_IV = '037970';