<?php
include_once "CONEXION_M.php";
include_once ("interface/I_HORARIO_GPO.php");
class HORARIO_CLASE_P extends CONEXION_M implements I_HORARIO_GPO
{

    private $id_horario_pres;
    private $id_grupo_fk;
    private $id_aula_fk;
    private $dia_semana;
    private $hora_inicio;
    private $duracion;

    /**
     * @return mixed
     */
    public function getIdHorarioPres()
    {
        return $this->id_horario_pres;
    }

    /**
     * @param mixed $id_horario_pres
     */
    public function setIdHorarioPres($id_horario_pres): void
    {
        $this->id_horario_pres = $id_horario_pres;
    }

    /**
     * @return mixed
     */
    public function getIdGrupoFk()
    {
        return $this->id_grupo_fk;
    }

    /**
     * @param mixed $id_grupo_fk
     */
    public function setIdGrupoFk($id_grupo_fk): void
    {
        $this->id_grupo_fk = $id_grupo_fk;
    }

/**
     * @return mixed
     */
    public function getIdAulaFk()
    {
        return $this->id_aula_fk;
    }

    /**
     * @param mixed $id_aula_fk
     */
    public function setIdAulaFk($id_aula_fk): void
    {
        $this->id_aula_fk = $id_aula_fk;
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


    function queryInsertHorario()
    {
        $query="INSERT INTO `horario_clase_presencial` (`id_horario_pres`, `id_grupo_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`) 
        VALUES (NULL, '".$this->getIdGrupoFk()."', '".$this->getIdAulaFk()."', '".$this->getDiaSemana()."', '".$this->getHoraInicio()."', '".$this->getDuracion()."')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryUpdateHorario()
    {
        $query="UPDATE `horario_clase_presencial` SET `id_grupo_fk` = '".$this->getIdGrupoFk()."', `id_aula_fk` = '".$this->getIdAulaFk()."', 
        `dia_semana` = '".$this->getDiaSemana()."', `hora_inicio` = '".$this->getHoraInicio()."', `duracion` = '".$this->getDuracion()."'
         WHERE `horario_clase_presencial`.`id_horario_pres` = ".$this->getIdHorarioPres();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function eliminarhorario()
    {
        $this->connect();
        $datos = $this-> executeInstruction("DELETE FROM `horario_clase_presencial` WHERE `id_horario_pres`=".$id_Asignatura);
        $this->close();
        return $datos;
    }

    function queryConsultaHorario()
    {
        $query = "select hp.id_horario_pres, hp.id_aula_fk, hp.dia_semana, time_format(hp.hora_inicio,'%H:%i') AS hora_inicio , 
       hp.duracion, time_format((addTime(sec_to_time(hp.duracion*60),hp.hora_inicio)),'%H:%i') AS hora_term,
                           gpo.id_grupo, gpo.grupo, a.id_aula, a.edificio, a.campus, a.cupo
                    from horario_clase_presencial hp, grupo gpo, aulas a
                    WHERE gpo.id_grupo = hp.id_grupo_fk
                      AND a.id_aula = hp.id_aula_fk
                    AND gpo.id_grupo = ".$this->getIdGrupoFk()." ORDER BY hp.dia_semana";
        $this->connect();
        $horario=$this->getData($query);
        $this->close();
        return $horario;
    }
}
