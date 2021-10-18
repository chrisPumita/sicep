<?php
include_once "../model/CONEXION_M.php";

class DEPTO extends CONEXION_M
{
    private $id_depto;
    private $nombre_depto;

    /**
     * @return mixed
     */
    public function getIdDepto()
    {
        return $this->id_depto;
    }

    /**
     * @param mixed $id_depto
     */
    public function setIdDepto($id_depto): void
    {
        $this->id_depto = $id_depto;
    }

    /**
     * @return mixed
     */
    public function getNombreDepto()
    {
        return $this->nombre_depto;
    }

    /**
     * @param mixed $nombre_depto
     */
    public function setNombreDepto($nombre_depto): void
    {
        $this->nombre_depto = $nombre_depto;
    }


    function CrearDepartamento(){
        $query="INSERT INTO `departamentos`(`id_depto`, `nombre`) VALUES (NULL,'".$this->getNombreDepto()."')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;

    }
    function EliminarDepartamento($id_depto){
        $query="DELETE FROM `departamentos` WHERE `id_depto`=".$id_depto;
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
    function ConsultarDepartamento($id_depto){
        $query="SELECT * FROM `departamentos` WHERE `id_depto`=".$id_depto;
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
    function listaDepartamentos(){
        $query="SELECT * FROM `departamentos` WHERE id_depto >0 ORDER BY `departamentos`.`nombre` ASC";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}