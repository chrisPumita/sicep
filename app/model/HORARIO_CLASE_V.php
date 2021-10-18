<?php
include "CONEXION_M.php";
include_once "I_HORARIO_CLASE_V.php";

class HORARIO_CLASE_V extends CONEXION_M implements I_HORARIO_CLASE_V
{
	private $id_horario_virtual;
	private $id_asignacion_fk;
	private $dia_semana;
	private $hora_inicio;
	private $duracion;
	private $reunion;
	private $plataforma;
	private $url_reunion;
	private $url_plataforma;

    /**
     * @return mixed
     */
    public function getIdHorarioVirtual()
    {
        return $this->id_horario_virtual;
    }

    /**
     * @param mixed $id_horario_virtual
     */
    public function setIdHorarioVirtual($id_horario_virtual): void
    {
        $this->id_horario_virtual = $id_horario_virtual;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }

    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
    }

    /**
     * @return mixed
     */
    public function getDiaSemana()
    {
        return $this->dia_semana;
    }

    /**
     * @param mixed $dia_semana
     */
    public function setDiaSemana($dia_semana): void
    {
        $this->dia_semana = $dia_semana;
    }

    /**
     * @return mixed
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * @param mixed $hora_inicio
     */
    public function setHoraInicio($hora_inicio): void
    {
        $this->hora_inicio = $hora_inicio;
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion): void
    {
        $this->duracion = $duracion;
    }

    /**
     * @return mixed
     */
    public function getReunion()
    {
        return $this->reunion;
    }

    /**
     * @param mixed $reunion
     */
    public function setReunion($reunion): void
    {
        $this->reunion = $reunion;
    }

    /**
     * @return mixed
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * @param mixed $plataforma
     */
    public function setPlataforma($plataforma): void
    {
        $this->plataforma = $plataforma;
    }

    /**
     * @return mixed
     */
    public function getUrlReunion()
    {
        return $this->url_reunion;
    }

    /**
     * @param mixed $url_reunion
     */
    public function setUrlReunion($url_reunion): void
    {
        $this->url_reunion = $url_reunion;
    }

    /**
     * @return mixed
     */
    public function getUrlPlataforma()
    {
        return $this->url_plataforma;
    }

    /**
     * @param mixed $url_plataforma
     */
    public function setUrlPlataforma($url_plataforma): void
    {
        $this->url_plataforma = $url_plataforma;
    }

    function crearHorarioV()
    {
        $query = "INSERT INTO `horario_clase_virtual`(`id_horario_virtual`, `id_asignacion_fk`, `dia_semana`, `hora_inicio`, `duracion`, `reunion`, `plataforma`, `url_reunion`, `url_plataforma`) 
                    VALUES (NULL,'".$this->getIdAsignacionFk()."','".$this->getDiaSemana()."','".$this->getHoraInicio()."','".$this->getDuracion()."','".$this->getReunion()."','".$this->getPlataforma()."','".$this->getUrlReunion()."','".$this->getUrlPlataforma()."')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function eliminarHorarioV($id_horario_v)
    {
        $query = "DELETE FROM `horario_clase_virtual` WHERE `id_horario_virtual`=" . $id_horario_v;
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function updateHorarioV()
    {
        $query = "UPDATE `horario_clase_virtual` SET `id_asignacion_fk`='".$this->getIdAsignacionFk()."',`dia_semana`='".$this->getDiaSemana()."',`hora_inicio`='".$this->getHoraInicio()."',`duracion`='".$this->getDuracion()."',`reunion`='".$this->getReunion()."',`plataforma`='".$this->getPlataforma()."',`url_reunion`='".$this->getUrlReunion()."',`url_plataforma`='".$this->getUrlPlataforma()."' WHERE `id_horario_virtual`=".$this->getIdHorarioVirtual();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }
}