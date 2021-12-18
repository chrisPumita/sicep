<?php
include_once "CONEXION_M.php";
include_once ("interface/I_HORARIO_GPO.php");
class HORARIO_CLASE_P extends CONEXION_M implements I_HORARIO_GPO
{

    private $id_horario_pres;
    private $id_grupo;
    private $dia_semana;

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
    private $hora_inicio;
    private $duracion;


    function CrearHorario()
    {
        $query="INSERT INTO `horario_clase_presencial`(`id_horario_pres`, `id_asignacion_fk`, `id_aula_fk`, `dia_semana`, `hora_inicio`, `duracion`) 
                VALUES (NULL,'".$this->getIdAsignacionFk()."','".$this->getIdAula()."','".$this->getDiaSemana()."','".$this->getHoraInicio()."','".$this->getDuracion()."');";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function updateHorario()
    {
        $query="UPDATE `horario_clase_presencial` SET `id_asignacion_fk`='".$this->getIdAsignacionFk()."',`id_aula_fk`='".$this->getIdAula()."',`dia_semana`='".$this->getDiaSemana()."',`hora_inicio`='".$this->getHoraInicio()."',`duracion`='".$this->getDuracion()."' WHERE `id_horario_pres`=".$this->getIdHorarioPres();
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
                    AND gpo.id_grupo = ".$this->getIdGrupo()." ORDER BY hp.dia_semana";
        $this->connect();
        $horario=$this->getData($query);
        $this->close();
        return $horario;
    }
}
