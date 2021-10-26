<?php
/*Singleton que trae todas las posibles procedencias*/
class S_PROCEDENCIAS
{
    static private $instance = null;
    public $listaProcedencias;

    private function __contruct() {
        $listaProcedencias = "HOLA";
    }

    public static function getInst() {
        if (self::$instance == null) {
            self::$instance = new S_PROCEDENCIAS();
            $listaProcedencias = consultaProcedencias();
        }
        return self::$instance;
    }

    function consultaProcedencias(){
        include_once "../../model/TIPO_PROCEDENCIA.php";
        //return TIPO_PROCEDENCIA::consultaTiposProcedencia();
        return "hola";
    }
}
