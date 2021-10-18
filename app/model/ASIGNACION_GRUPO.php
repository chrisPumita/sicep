<?php
include_once "CONEXION_M.php";
include_once "I_ASIG_GRUPO.php";

class ASIGNACION_GRUPO extends CONEXION_M implements I_ASIG_GRUPO
{
    private $id_asignacion;
    private $id_grupo_fk;
    private $id_profesor_fk;
    private $generacion;
    private $semestre;
    private $campus_cede;
    private $fecha_creacion;
    private $fecha_inicio;
    private $fecha_fin;
    private $fecha_lim_inscripcion;
    private $fecha_inicio_actas;
    private $fecha_fin_actas;
    private $cupo;
    private $costo_real;
    private $descuento;
    private $nivel_aplicacion_desc;
    private $notas;
    private $modalidad;
    /* Agregacion*/
    private $lista_horario_presencial;
    private $lista_horario_virtual;

    private $lista_inscripciones;

    //composicion
    private $grupo;
    private $profesor;
    private $lista_procedencias;

    /**
     * @return mixed
     */
    public function getListaProcedencias()
    {
        return $this->consultaProcedencias();
    }

    /**
     * @param mixed $lista_procedencias
     */
    public function setListaProcedencias($lista_procedencias): void
    {
        $this->lista_procedencias = $lista_procedencias;
    }

    /**
     * @return mixed
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * @param mixed $grupo
     */
    public function setGrupo($grupo): void
    {
        $this->grupo = $grupo;
    }

    /**
     * @return mixed
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * @param mixed $profesor
     */
    public function setProfesor($profesor): void
    {
        $this->profesor = $profesor;
    }

    /**
     * @return mixed
     */
    public function getListaInscripciones()
    {
        return $this->consultaInscripciones($this->getIdAsignacion());
    }

    /**
     * @param mixed $lista_inscripciones
     */
    public function setListaInscripciones($lista_inscripciones): void
    {
        $this->lista_inscripciones = $lista_inscripciones;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacion()
    {
        return $this->id_asignacion;
    }

    /**
     * @param mixed $id_asignacion
     */
    public function setIdAsignacion($id_asignacion): void
    {
        $this->id_asignacion = $id_asignacion;
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
    public function getIdProfesorFk()
    {
        return $this->id_profesor_fk;
    }

    /**
     * @param mixed $id_profesor_fk
     */
    public function setIdProfesorFk($id_profesor_fk): void
    {
        $this->id_profesor_fk = $id_profesor_fk;
    }

    /**
     * @return mixed
     */
    public function getGeneracion()
    {
        return $this->generacion;
    }

    /**
     * @param mixed $generacion
     */
    public function setGeneracion($generacion): void
    {
        $this->generacion = $generacion;
    }

    /**
     * @return mixed
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * @param mixed $semestre
     */
    public function setSemestre($semestre): void
    {
        $this->semestre = $semestre;
    }

    /**
     * @return mixed
     */
    public function getCampusCede()
    {
        return $this->campus_cede;
    }

    /**
     * @param mixed $campus_cede
     */
    public function setCampusCede($campus_cede): void
    {
        $this->campus_cede = $campus_cede;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * @param mixed $fecha_inicio
     */
    public function setFechaInicio($fecha_inicio): void
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }

    /**
     * @param mixed $fecha_fin
     */
    public function setFechaFin($fecha_fin): void
    {
        $this->fecha_fin = $fecha_fin;
    }

    /**
     * @return mixed
     */
    public function getFechaLimInscripcion()
    {
        return $this->fecha_lim_inscripcion;
    }

    /**
     * @param mixed $fecha_lim_inscripcion
     */
    public function setFechaLimInscripcion($fecha_lim_inscripcion): void
    {
        $this->fecha_lim_inscripcion = $fecha_lim_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getFechaInicioActas()
    {
        return $this->fecha_inicio_actas;
    }

    /**
     * @param mixed $fecha_inicio_actas
     */
    public function setFechaInicioActas($fecha_inicio_actas): void
    {
        $this->fecha_inicio_actas = $fecha_inicio_actas;
    }

    /**
     * @return mixed
     */
    public function getFechaFinActas()
    {
        return $this->fecha_fin_actas;
    }

    /**
     * @param mixed $fecha_fin_actas
     */
    public function setFechaFinActas($fecha_fin_actas): void
    {
        $this->fecha_fin_actas = $fecha_fin_actas;
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

    /**
     * @return mixed
     */
    public function getCostoReal()
    {
        return $this->costo_real;
    }

    /**
     * @param mixed $costo_real
     */
    public function setCostoReal($costo_real): void
    {
        $this->costo_real = $costo_real;
    }

    /**
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * @param mixed $descuento
     */
    public function setDescuento($descuento): void
    {
        $this->descuento = $descuento;
    }

    /**
     * @return mixed
     */
    public function getNivelAplicacionDesc()
    {
        return $this->nivel_aplicacion_desc;
    }

    /**
     * @param mixed $nivel_aplicacion_desc
     */
    public function setNivelAplicacionDesc($nivel_aplicacion_desc): void
    {
        $this->nivel_aplicacion_desc = $nivel_aplicacion_desc;
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas): void
    {
        $this->notas = $notas;
    }

    /**
     * @return mixed
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }

    /**
     * @param mixed $modalidad
     */
    public function setModalidad($modalidad): void
    {
        $this->modalidad = $modalidad;
    }

    /**
     * @return mixed
     */
    public function getListaHorarioPresencial()
    {
        return $this->consultaHorarioPresencial($this->id_asignacion);
    }

    /**
     * @param mixed $lista_horario_presencial
     */
    public function setListaHorarioPresencial($lista_horario_presencial): void
    {
        $this->lista_horario_presencial = $lista_horario_presencial;
    }

    /**
     * @return mixed
     */
    public function getListaHorarioVirtual()
    {
        return consultaHorarioVirtual($this->getIdAsignacion());
    }


    /**
     * @param mixed $lista_horario_virtual
     */
    public function setListaHorarioVirtual($lista_horario_virtual): void
    {
        $this->lista_horario_virtual = $lista_horario_virtual;
    }


    /*---------Metodos implementados de la interface----------*/


    function consultaHorarioVirtual($id_asig)
    {
        $query = "SELECT * FROM `horario_clase_virtual` WHERE `id_asignacion_fk`=" . $id_asig;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }

    function consultaHorarioPresencial($id_asig)
    {
        $query = "SELECT * FROM `horario_clase_presencial` WHERE `id_asignacion_fk`=" . $id_asig;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }

    function consultaCostosDetalles($id_asignacion){
        //MPDIFICAR CONSULTA
        $sql = "SELECT costo_real,descuento,nivel_aplicacion_desc FROM asignacion_grupo 
            WHERE id_asignacion = ".$id_asignacion;
        $this->connect();
        $datos = $this->getData($sql);
        $this->close();
        return $datos;
    }

    function consultaAsignacion($id_grupo){
        $query="SELECT asig.id_asignacion,
                           gp.grupo, 
                           p.nombre,
                           p.app,
                           p.apm,
                           pf.email,
                           asig.generacion,
                           asig.semestre,
                           asig.fecha_inicio,
                           asig.fecha_fin,
                           asig.fecha_lim_inscripcion,
                           asig.fecha_inicio_actas,
                           asig.fecha_fin_actas,
                           asig.cupo,
                           asig.costo_real,
                           asig.descuento,
                           asig.notas,
                           asig.modalidad  
                    FROM asignacion_grupo asig, 
                         profesor pf, 
                         persona p,
                         grupo gp 
                    WHERE asig.id_profesor_fk=pf.id_profesor 
                      AND pf.id_persona_fk=p.id_persona 
                      AND asig.id_grupo_fk=gp.id_grupo
                      AND gp.id_grupo=".$id_grupo;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }
    public function consultaAsignaciones($id)
    {
        $filtro=$id>0? "AND pf.id_profesor = ".$id :"";
        $query = "SELECT asig.id_asignacion,
                           gp.grupo,
                            gp.id_grupo,
                           crs.nombre_curso,
                           crs.tipo_curso,
                           asig.estatus,
                           p.nombre,
                           p.app,
                           p.apm,
                           pf.email,
                           asig.generacion,
                           asig.semestre,
                           asig.fecha_inicio,
                           asig.fecha_fin,
                           asig.fecha_lim_inscripcion,
                           asig.fecha_inicio_actas,
                           asig.fecha_fin_actas,
                           asig.cupo,
                           asig.costo_real,
                           asig.notas,
                           gp.estatus as estatus_grupo
                    FROM asignacion_grupo asig, curso crs,
                         profesor pf, 
                         persona p,
                         grupo gp 
                    WHERE asig.id_profesor_fk=pf.id_profesor 
                      AND pf.id_persona_fk=p.id_persona 
                      AND asig.id_grupo_fk=gp.id_grupo
                      AND gp.id_curso_fk=crs.id_curso ".$filtro;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }


    function crearasignacion()
    {
        $query = "INSERT INTO `asignacion_grupo`(
                               `id_asignacion`, 
                               `id_grupo_fk`, 
                               `id_profesor_fk`, 
                               `generacion`, 
                               `semestre`, 
                               `campus_cede`, 
                               `fecha_creacion`, 
                               `fecha_inicio`, 
                               `fecha_fin`, 
                               `fecha_lim_inscripcion`, 
                               `fecha_inicio_actas`, 
                               `fecha_fin_actas`, 
                               `cupo`, 
                               `costo_real`, 
                               `descuento`, 
                               `nivel_aplicacion_desc`, 
                               `notas`, 
                               `modalidad`) 
                    VALUES (NULL,'" . $this->getIdGrupoFk() . "','" . $this->getIdProfesorFk() .
                    "','" . $this->getGeneracion() . "','" . $this->getSemestre() . "','" .
                    $this->getCampusCede() . "', '".date('Y-m-d H:i:s')."','" . $this->getFechaInicio() .
                    "','" . $this->getFechaFin() . "','" . $this->getFechaLimInscripcion() . "','" .
                    $this->getFechaInicioActas() ."','" . $this->getFechaFinActas() . "','" . $this->getCupo() .
                    "','" . $this->getCostoReal() . "','" . $this->getDescuento() . "','" .
                    $this->getNivelAplicacionDesc() . "','" . $this->getNotas() . "','" . $this->getModalidad() . "')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function modificarasignacion()
    {
        $query = "UPDATE `asignacion_grupo` SET `id_grupo_fk`='".$this->getIdGrupoFk()                                                      ."',`id_profesor_fk`='".$this->getIdProfesorFk()."',`generacion`='".$this->getGeneracion()."',`semestre`='".$this->getSemestre()."',`campus_cede`='".$this->getCampusCede()."',
                            `fecha_inicio`='".$this->getFechaInicio()."',`fecha_fin`='".$this->getFechaFin()."',`fecha_lim_inscripcion`='".$this->getFechaLimInscripcion()."',`fecha_inicio_actas`='".$this->getFechaInicioActas()."',
                            `fecha_fin_actas`='".$this->getFechaFinActas()."',`cupo`='".$this->getCupo()."',`costo_real`='".$this->getCostoReal()."',`descuento`='".$this->getDescuento()."',`nivel_aplicacion_desc`='".$this->getNivelAplicacionDesc()."',
                            `notas`='".$this->getNotas()."',`modalidad`='".$this->getModalidad()."' WHERE `id_asignacion`=".$this->getIdAsignacion();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function cambia_estatus($id_asignacion,$estatus)
    {
        $query="UPDATE `grupo` SET `estatus`='".$estatus."' WHERE `id_grupo`=".$id_asignacion;
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function consultaProcedencias(){
        include_once "TIPO_PROCEDENCIA.php";
        $obj_tipo = new TIPO_PROCEDENCIA();
        return $obj_tipo->consultaProcedenciasAsig($this->getIdAsignacion());
    }

    function listaprocedencias(){
        include_once "TIPO_PROCEDENCIA.php";
        $obj_tipo = new TIPO_PROCEDENCIA();
        return $obj_tipo->consultaProcedencias();

    }


}