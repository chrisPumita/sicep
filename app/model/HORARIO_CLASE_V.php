<?php
include_once "CONEXION_M.php";
include_once "interface/I_HORARIO_GPO.php";
class HORARIO_CLASE_V extends CONEXION_M implements I_HORARIO_GPO
{
	private $id_horario_virtual;
	private $id_grupo;
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
    public function getIdGrupo()
    {
        return $this->id_grupo;
    }

    /**
     * @param mixed $id_grupo
     */
    public function setIdGrupo($id_grupo): void
    {
        $this->id_grupo = $id_grupo;
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

    function queryInsertHorario()
    {
        $query="INSERT INTO `horario_clase_virtual` (`id_horario_virtual`, `id_grupo_fk`, `dia_semana`, `hora_inicio`, `duracion`, `reunion`, 
        `plataforma`, `url_reunion`, `url_plataforma`) VALUES (NULL, '".$this->getIdGrupo()."', '".$this->getDiaSemana()."', '".$this->getHoraInicio()."',
         '".$this->getDuracion()."', '".$this->getReunion()."', '".$this->getPlataforma()."', '".$this->getUrlReunion()."', '".$this->getUrlPlataforma()."')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryDeletehorario()
    {
        $query = "DELETE FROM `horario_clase_virtual` WHERE `id_horario_virtual`=" .$this->getIdHorarioVirtual();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryUpdateHorario()
    {
        $query="UPDATE `horario_clase_virtual` SET `id_grupo_fk` = '".$this->getIdGrupo()."', `dia_semana` = '".$this->getDiaSemana()."', 
        `hora_inicio` = '".$this->getHoraInicio()."', `duracion` = '".$this->getDuracion()."', `reunion` = '".$this->getReunion()."', 
        `plataforma` = '".$this->getPlataforma()."', `url_reunion` = '".$this->getUrlReunion()."', `url_plataforma` = '".$this->getUrlPlataforma()."' WHERE `horario_clase_virtual`.`id_horario_virtual` = ".$this->getIdHorarioVirtual();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryConsultaHorario(){
        $query = "SELECT hv.id_horario_virtual, hv.dia_semana,  time_format(hv.hora_inicio,'%H:%i') AS hora_inicio , 
       hv.duracion, time_format((addTime(sec_to_time(hv.duracion*60),hv.hora_inicio)),'%H:%i') AS hora_term, hv.reunion,
                   hv.plataforma, hv.url_reunion, hv.url_plataforma,
                   gpo.id_grupo, gpo.grupo
            from horario_clase_virtual hv, grupo gpo
            WHERE gpo.id_grupo = hv.id_grupo_fk
              AND gpo.id_grupo = ".$this->getIdGrupo()." ORDER BY hv.dia_semana";
        $this->connect();
        $horario=$this->getData($query);
        $this->close();
        return $horario;
    }

}