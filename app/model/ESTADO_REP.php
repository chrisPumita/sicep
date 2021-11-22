<?php

include_once "CONEXION_M.php";
class ESTADO_REP extends CONEXION_M
{

    public function consultaEstados(){
        $query =    "SELECT 
                    `id_estado`, 
                    `clave`, 
                    `estado`, 
                    `abrev` 
                    FROM `estados`";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }

    public function consultaMunicipios($id_edo){
        $query =    "SELECT * FROM `municipios` 
                    WHERE `municipios`.`id_estado_fk` = ".$id_edo." 
                    ORDER BY `municipios`.`municipio` ASC ";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}