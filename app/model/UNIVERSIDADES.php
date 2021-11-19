<?php

include_once "../model/CONEXION_M.php";

class UNIVERSIDADES extends CONEXION_M
{
	private $id_universidad;
	private $nombre;
    private $siglas;

    /**
     * @return mixed
     */
    public function getIdUniversidad()
    {
        return $this->id_universidad;
    }

    /**
     * @param mixed $id_universidad
     */
    public function setIdUniversidad($id_universidad): void
    {
        $this->id_universidad = $id_universidad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * @param mixed $siglas
     */
    public function setSiglas($siglas): void
    {
        $this->siglas = $siglas;
    }

    function queryListaUniversidades(){
        $query="SELECT * FROM universidades 
                where id_universidad <> 0 
                ORDER BY nombre ASC";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}