<?php
include ("AULAS.php");
include_once ("I_HORARIO_CLASE_P.php");

class HORARIO_CLASE_P extends AULAS implements I_HORARIO_CLASE_P
{

    private $id_horario_pres;
    private $id_asignacion_fk;
    private $dia_semana;
    private $hora_inicio;
    private $duracion;
    /*Composicion*/
    private $aula;

    /**
     * @return mixed
     */
    public function getAula()
    {
        return $this->consultaAula($this->getIdHorarioPres());
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

    function eliminarhorario($id_Asignatura)
    {
        $this->connect();
        $datos = $this-> executeInstruction("DELETE FROM `horario_clase_presencial` WHERE `id_horario_pres`=".$id_Asignatura);
        $this->close();
        return $datos;
    }

    function ConsultaAulas($tipo_filtro)
    {
        //Defiunir Control de filtro

        $filtro = "";
        switch ($tipo_filtro){
            case "1":
                //Filtro por edificio
                $filtro = "ORDER BY aulas.edificio asc  ";
                break;
            case "2":
                //Filtro por campus
                $filtro = "ORDER BY aulas.campus asc  ";
                break;
            default:
                $filtro = "";
                break;
        }
        $this->connect();
        $datos = $this-> getData("SELECT horario_clase_presencial.id_horario_pres,horario_clase_presencial.dia_semana,
                                        horario_clase_presencial.hora_inicio,horario_clase_presencial.duracion,aulas.edificio,
                                        aulas.aula,aulas.campus,aulas.cupo,asignacion_grupo.id_asignacion,asignacion_grupo.id_grupo_fk 
                                        FROM `horario_clase_presencial`,`aulas`,`asignacion_grupo` 
                                            WHERE aulas.id_aula=horario_clase_presencial.id_aula_fk 
                                              AND horario_clase_presencial.id_asignacion_fk=asignacion_grupo.id_asignacion ".$filtro);
        $this->close();
        return $datos;
    }

    function consultarAula($idHoraClase){
        $query="SELECT au.* FROM aulas au, horario_clase_presencial hp WHERE au.id_aula=hp.id_aula_fk and hp.id_horario_pres=".$idHoraClase;
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}
