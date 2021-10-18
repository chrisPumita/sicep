<?php
include "CONEXION_M.php";
class AULAS extends CONEXION_M
{
	private $id_aula;
	private $edificio;
	private $aula;
	private $campus;
    private $cupo;
    private $estadoAula;

    /**
     * @return mixed
     */
    public function getEstadoAula()
    {
        return $this->estadoAula;
    }

    /**
     * @param mixed $estadoAula
     */
    public function setEstadoAula($estadoAula): void
    {
        $this->estadoAula = $estadoAula;
    }

    /**
     * @return mixed
     */
    public function getIdAula()
    {
        return $this->id_aula;
    }

    /**
     * @param mixed $id_aula
     */
    public function setIdAula($id_aula): void
    {
        $this->id_aula = $id_aula;
    }

    /**
     * @return mixed
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * @param mixed $edificio
     */
    public function setEdificio($edificio): void
    {
        $this->edificio = $edificio;
    }

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * @param mixed $aula
     */
    public function setAula($aula): void
    {
        $this->aula = $aula;
    }

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param mixed $campus
     */
    public function setCampus($campus): void
    {
        $this->campus = $campus;
    }

    /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }

    /**
     * @param mixed $cupo
     */
    public function setCupo($cupo): void
    {
        $this->cupo = $cupo;
    }



    function crearNuevaAula(){
        $query="INSERT INTO `aulas`(`id_aula`, `edificio`, `aula`, `campus`, `cupo`, `estado`) 
                VALUES (NULL ,'".$this->getEdificio()."','".$this->getAula()."','".$this->getCampus()."','".$this->getCupo()."','".$this->getEstadoAula()."') ";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function editaAula(){
        $query="UPDATE `aulas` SET `edificio`='".$this->getEdificio()."',`aula`='".$this->getAula()."',`campus`='".$this->getCampus()."',
        `cupo`='".$this->getCupo()."',`estado`='".$this->getEstadoAula()."' WHERE `id_aula`=".$this->getIdAula();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function eliminarAula($idAula){
        $query="DELETE FROM `aulas`  WHERE `id_aula`=".$idAula;
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }





}