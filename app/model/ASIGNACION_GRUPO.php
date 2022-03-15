<?php
include_once "CONEXION_M.php";
include_once "interface/I_ASIG_GRUPO.php";

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
    private $fecha_inicio_inscripcion;
    private $fecha_lim_inscripcion;
    private $fecha_inicio_actas;
    private $fecha_fin_actas;
    private $cupo;
    private $costo_real;
    private $notas;
    private $modalidad;
    private $publico;
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
    public function getFechaInicioInscripcion()
    {
        return $this->fecha_inicio_inscripcion;
    }

    /**
     * @param mixed $fecha_inicio_inscripcion
     */
    public function setFechaInicioInscripcion($fecha_inicio_inscripcion): void
    {
        $this->fecha_inicio_inscripcion = $fecha_inicio_inscripcion;
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
    public function getPublico()
    {
        return $this->publico;
    }

    /**
     * @param mixed $publico
     */
    public function setPublico($publico): void
    {
        $this->publico = $publico;
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


    function queryConsultaHorarioVirtual($id_asig)
    {
        $query = "SELECT * FROM `horario_clase_virtual` WHERE `id_asignacion_fk`=" . $id_asig;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }

    function queryConsultaHorarioPresencial($id_asig)
    {
        $query = "SELECT * FROM `horario_clase_presencial` WHERE `id_asignacion_fk`=" . $id_asig;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }

    function queryConsultaCostosDetalles($id_asignacion){
        //MPDIFICAR CONSULTA
        $sql = "SELECT costo_real,descuento,nivel_aplicacion_desc FROM asignacion_grupo 
            WHERE id_asignacion = ".$id_asignacion;
        $this->connect();
        $datos = $this->getData($sql);
        $this->close();
        return $datos;
    }

    function queryConsultaAsignacionGrupo($id_grupo){
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

    public function queryConsultaAsignacionProfesor($id)
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


    function queryInsertAsignacion()
    {
        $query = "INSERT INTO `asignacion_grupo` (`id_asignacion`, `id_grupo_fk`, `id_profesor_fk`, `generacion`, 
        `semestre`, `campus_cede`, `fecha_creacion`, `fecha_inicio`, `fecha_fin`, `fecha_inicio_inscripcion`, 
        `fecha_lim_inscripcion`, `fecha_inicio_actas`, `fecha_fin_actas`, `cupo`, `costo_real`, `notas`, `modalidad`,
         `visible_publico`, `estatus`) VALUES (NULL, '".$this->getIdGrupoFk()."', '".$this->getIdProfesorFk()."',
        '".$this->getGeneracion()."', '".$this->getSemestre()."', '".$this->getCampusCede()."', current_timestamp(), 
        '".$this->getFechaInicio()."','".$this->getFechaFin()."', '".$this->getFechaInicioInscripcion()."', '".$this->getFechaLimInscripcion()."',
         '".$this->getFechaInicioActas()."', '".$this->getFechaFinActas()."', '".$this->getCupo()."', '".$this->getCostoReal()."', 
         '".$this->getNotas()."', '".$this->getModalidad()."', '".$this->getPublico()."', '1')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateDatosAsignacion()
    {
        $filtroProf= $this->getIdProfesorFk()>0 ? " `id_profesor_fk`='".$this->getIdProfesorFk()."' ," : "";
        $filtroGrupo = $this->getIdGrupoFk()>0 ? " `id_grupo_fk`='".$this->getIdGrupoFk()."', " : "";
        $filtroGen = $this->getGeneracion()>0 ? " `generacion`='".$this->getGeneracion()."', " : "";
        $filtroSem= $this->getSemestre()>0? " `semestre`='".$this->getSemestre()."', ": "";

        $query="UPDATE `asignacion_grupo` SET ".$filtroGrupo . $filtroProf. $filtroGen . $filtroSem ."`campus_cede` = '".$this->getCampusCede()."', `cupo` = '".$this->getCupo()."',
        `costo_real` = '".$this->getCostoReal()."', `notas` = '".$this->getNotas()."', `modalidad` = '".$this->getModalidad()."',
        `visible_publico` = '".$this->getPublico()."' WHERE `asignacion_grupo`.`id_asignacion` = ".$this->getIdAsignacion();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }


    function queryUpdateFechasAsignacion(){
        $query="UPDATE `asignacion_grupo` SET `fecha_inicio` = '".$this->getFechaInicio()."', `fecha_fin` = '".$this->getFechaFin()."', 
        `fecha_inicio_inscripcion` = '".$this->getFechaInicioInscripcion()."', `fecha_lim_inscripcion` = '".$this->getFechaLimInscripcion()."', 
        `fecha_inicio_actas` = '".$this->getFechaInicioActas()."', `fecha_fin_actas` = '".$this->getFechaFinActas()."' 
        WHERE `asignacion_grupo`.`id_asignacion` = ".$this->getIdAsignacion();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }
    function queryUpdateEstatus($id_asignacion,$estatus)
    {
        $query="UPDATE `grupo` SET `estatus`='".$estatus."' WHERE `id_grupo`=".$id_asignacion;
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryConsultaProcedencias(){
        include_once "TIPO_PROCEDENCIA.php";
        $obj_tipo = new TIPO_PROCEDENCIA();
        return $obj_tipo->consultaProcedenciasAsig($this->getIdAsignacion());
    }

    function queryListaProcedencias(){
        include_once "TIPO_PROCEDENCIA.php";
        $obj_tipo = new TIPO_PROCEDENCIA();
        return $obj_tipo->consultaProcedencias();

    }

    function queryConsultaAsignacionGrupos($valor_filtro)
    {
        /*  filtro = 1, trae solo a las asignaciones en curso
            filtro = 0, trae todas las asignaciones
        */
        $filtro = $valor_filtro >0 ? " and ag.estatus = ".$valor_filtro: "";
        $query ="select ag.id_asignacion , c.id_curso , c.nombre_curso , 
        concat(\"Prof. \",per.app,\" \",per.apm,\" \",per.nombre) as profesor,
        g.grupo ,ag.modalidad , ag.cupo , 
        concat(date_format(ag.fecha_creacion, \"%d %M %Y\"),\" al \", date_format(ag.fecha_lim_inscripcion,\"%d %M %Y\")) as inscripcion,
        concat(date_format(ag.fecha_inicio,\"%d %M %Y\") ,\" al \", date_format(ag.fecha_fin,\"%d %M %Y\")) as inicio,
        concat(date_format(ag.fecha_inicio_actas,\"%d %M %Y\") ,\" al \", date_format(ag.fecha_fin_actas,\"%d %M %Y\")) as calificaciones, 
        ag.estatus as estatus_asignacion_grupo
        from curso c , grupo g , asignacion_grupo ag , profesor prof , persona per
        where c.id_curso = g.id_curso_fk and ag.id_grupo_fk = g.id_grupo and prof.id_persona_fk = per.id_persona
        and ag.id_profesor_fk = prof.id_profesor".$filtro;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryconsultaNumSolicitudesInscripcion($id_asignacion)
    {
        $query = "select count(a.id_alumno) as num_solicitudes
                from asignacion_grupo ag,  inscripcion i ,alumno a , grupo g 
                where ag.estatus =1 and ag.id_grupo_fk = g.id_grupo and g.estatus = 1
                and i.id_asignacion_fk = ag.id_asignacion and i.id_alumno_fk = a.id_alumno 
                and (i.estatus = 0 or i.pago_confirmado =0 or i.autorizacion_inscripcion =0 or i.estatus =0)
                and ag.id_asignacion = ".$id_asignacion;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryConsultaNumLugaresDisponibles($id_asignacion)
    {
        $query = "select ag.cupo - count(a.id_alumno)  
            from alumno a , persona p , inscripcion i , asignacion_grupo ag , grupo g 
            where a.id_persona = p.id_persona and a.id_alumno > 0 
            and a.estatus = 1 and p.estatus = 1 and i.id_alumno_fk = a.id_alumno 
            and i.pago_confirmado = 1 and i.autorizacion_inscripcion = 1 
            and i.estatus = 1 and ag.id_asignacion = i.id_asignacion_fk and ag.estatus = 1
            and ag.id_grupo_fk = g.id_grupo and g.estatus = 1 and ag.id_asignacion = ".$id_asignacion;
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    //Function historial de asignaciones de un curso especifico
    // CHRIS RCGS 15/12/2021
    // 0 Busqueda por curso 1-> pór asignacion 2-> por profesor
    function queryHistorialAsignacionesCurso($idCurso,$filtro, $idFiltro)
    {
        //se buscan el historial de in ID especifico
        $idBusqueda = $idCurso > 0 ? " AND c.id_curso = ".$idCurso : "";
        if ($filtro!=0){
            //El filtro refiere a una asignacion o asignaciones
            //revisar tipo de filtro
            switch ($filtro){
                case "1":
                    //Buscar una asignacion en concreto
                    $filtro = " AND ag.id_asignacion = ".$idFiltro;
                    break;
                case "2":
                    //Buscar por profesor
                    $filtro = " AND  prof.id_profesor = ".$idFiltro;
                    break;
                case "3":
                    //Buscar actuales
                    $filtro = " AND ag.estatus = ".$idFiltro;
                    break;
                case "4":
                    //caso de oferta del alumno
                    $filtro = "
                            AND ag.visible_publico = 1 AND ag.id_asignacion NOT IN 
                                (SELECT i.id_asignacion_fk FROM inscripcion i WHERE i.id_alumno_fk = ".$idFiltro.")
                            HAVING statusAsignacion < 99";
                    break;
                default:
                    $filtro = "";
                    break;
            }
        }
        else{
            $filtro = "";
        }
        $query = "SELECT per.nombre, per.app, per.apm, prof.prefijo, prof.img_perfil, prof.estatus AS estatus_profesor,
       CONCAT(per.nombre,' ', per.app,' ',per.apm) AS nombre_completo, prof.id_profesor, prof.no_trabajador,
       gpo.grupo, gpo.id_grupo, c.id_curso, c.codigo, c.nombre_curso, c.no_sesiones, c.tipo_curso, c.banner_img, c.link_temario_pdf,
       c.descripcion, c.dirigido_a, c.objetivo, c.antecedentes,
       ag.id_asignacion, ag.generacion, c.costo_sugerido, ag.estatus AS estado_asig, ag.visible_publico,
       ag.semestre, ag.campus_cede, ag.fecha_inicio, ag.fecha_fin, ag.fecha_inicio_inscripcion, ag.fecha_lim_inscripcion,
       ag.fecha_inicio_actas, ag.fecha_fin_actas, ag.cupo, ag.costo_real, ag.notas, ag.modalidad,
       ag.estatus AS archiveAsig,
       (SELECT COUNT(*) from inscripcion insc where
               insc.id_inscripcion  IN (select id_inscripcion_fk from validacion_inscripcion)
                                                AND insc.id_asignacion_fk = ag.id_asignacion) AS inscritos,
       (SELECT COUNT(*) from inscripcion insc where
               insc.id_inscripcion NOT IN (select id_inscripcion_fk from validacion_inscripcion)
                                                AND insc.id_asignacion_fk = ag.id_asignacion) AS solicitudesPendientes,
            if(ag.estatus>0,
                if(now()>=ag.fecha_inicio && now()<=ag.fecha_fin,
                    '2',
                    if(now()>=ag.fecha_inicio_actas && now()<=ag.fecha_fin_actas,
                        '3',
                        if(now()>=ag.fecha_inicio_inscripcion && now()<= ag.fecha_lim_inscripcion,'1', '99')))
                ,'0') as statusAsignacion
        from persona per, profesor prof, asignacion_grupo ag, grupo gpo, curso c
        where per.id_persona = prof.id_persona_fk
          AND ag.id_profesor_fk = prof.id_profesor
          AND ag.id_grupo_fk = gpo.id_grupo
          AND c.id_curso = gpo.id_curso_fk ".$idBusqueda." ".$filtro." ORDER BY statusAsignacion, c.nombre_curso ASC";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryDistingGeneraciones(){
        $query = "SELECT DISTINCT (generacion)FROM  asignacion_grupo ORDER BY generacion";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryDistingSemestres(){
        $query = "SELECT DISTINCT (semestre) FROM asignacion_grupo ORDER BY semestre";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }
}

