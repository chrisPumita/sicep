<?php
include_once "interface/I_INSCRIPCION.php";
include_once "CONEXION_M.php";
class INSCRIPCION extends CONEXION_M implements I_INSCRIPCION
{
    private $id_inscripcion;
    private $id_alumno_fk;
    private $id_asignacion_fk;
    private $pago_confirmado;
    private $autorizacion_inscripcion;
    private $validacion_constancia;
    private $fecha_solicitud;
    private $fecha_conclusion;
    private $notas;
    private $estatus;

    /*******************************************************************************
     * INICIAN Getters and Setters
     *******************************************************************************/

    /**
     * @return mixed
     */
    public function getIdInscripcion()
    {
        return $this->id_inscripcion;
    }

    /**
     * @param mixed $id_inscripcion
     */
    public function setIdInscripcion($id_inscripcion): void
    {
        $this->id_inscripcion = $id_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getIdAlumnoFk()
    {
        return $this->id_alumno_fk;
    }

    /**
     * @param mixed $id_alumno_fk
     */
    public function setIdAlumnoFk($id_alumno_fk): void
    {
        $this->id_alumno_fk = $id_alumno_fk;
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
    public function getPagoConfirmado()
    {
        return $this->pago_confirmado;
    }

    /**
     * @param mixed $pago_confirmado
     */
    public function setPagoConfirmado($pago_confirmado): void
    {
        $this->pago_confirmado = $pago_confirmado;
    }

    /**
     * @return mixed
     */
    public function getAutorizacionInscripcion()
    {
        return $this->autorizacion_inscripcion;
    }

    /**
     * @param mixed $autorizacion_inscripcion
     */
    public function setAutorizacionInscripcion($autorizacion_inscripcion): void
    {
        $this->autorizacion_inscripcion = $autorizacion_inscripcion;
    }

    /**
     * @return mixed
     */
    public function getValidacionConstancia()
    {
        return $this->validacion_constancia;
    }

    /**
     * @param mixed $validacion_constancia
     */
    public function setValidacionConstancia($validacion_constancia): void
    {
        $this->validacion_constancia = $validacion_constancia;
    }

    /**
     * @return mixed
     */
    public function getFechaSolicitud()
    {
        return $this->fecha_solicitud;
    }

    /**
     * @param mixed $fecha_solicitud
     */
    public function setFechaSolicitud($fecha_solicitud): void
    {
        $this->fecha_solicitud = $fecha_solicitud;
    }

    /**
     * @return mixed
     */
    public function getFechaConclusion()
    {
        return $this->fecha_conclusion;
    }

    /**
     * @param mixed $fecha_conclusion
     */
    public function setFechaConclusion($fecha_conclusion): void
    {
        $this->fecha_conclusion = $fecha_conclusion;
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
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }

    /*******************************************************************************
     * Terminan Getters and Setters
     *******************************************************************************/

    /*******************************************************************************
     * Inician Funciones implenebtadas de la Interface
     *******************************************************************************/

    /*Consulta las solicitudes aprobadas y no aprobadas de un grupo esoecifico*/
    function consultaSolcitudInscripciones($filtro,$idAsig,$showAcredita)
    {
        //la asignacion es mayor que 0, entonces filtramos solo de esa asignacion
        $asigFiltro =  $idAsig>0 ? ' AND insc.id_asignacion_fk = '.$idAsig : "";
        $colums = " ";
        $fromTable = " ";
        $join = " ";
        if ($showAcredita) {
            //vamos a mostrar las
            $colums = ' , val_insc.id_inscripcion_fk, val_insc.id_profesor_admin_fk, val_insc.fecha_validacion, 
                        val_insc.fecha_pago, val_insc.monto_pago_realizado, val_insc.descripcion, val_insc.notas AS notasAcredita  ';
            $fromTable = ' , validacion_inscripcion val_insc ';
            $join = '  AND val_insc.id_inscripcion_fk = insc.id_inscripcion ';
        }
        switch ($filtro){
            //todas las inscipciones sin filtro
            case "0":
                $filtro = "";
                break;
            case "1":
                //todas las solicitudes pendientes
                $filtro = " AND insc.id_inscripcion NOT IN (SELECT vi.id_inscripcion_fk from validacion_inscripcion vi) ";
                break;
            case "2":
                //todas las solicitudes aprobadas
                $filtro = " AND insc.id_inscripcion IN (SELECT vi.id_inscripcion_fk from validacion_inscripcion vi) ";
                break;
            default:
                $filtro="";
                break;
        }

        $sql = "select per.nombre, per.app, per.apm, per.sexo, per.estatus AS estatusPersona, 
        CONCAT(per.app, ' ',per.apm, ' ', per.nombre) AS nombre_completo, per.telefono, al.id_alumno, al.matricula, 
        al.nombre_uni, al.id_tipo_procedencia_fk, al.carrera_especialidad, al.email, al.fecha_registro, al.perfil_image, 
        al.estatus AS estatusAlumno, proc.id_tipo_procedencia, proc.tipo_procedencia, uni.id_universidad, 
        uni.nombre AS nombreUni, uni.siglas, mun.municipio, edos.estado AS edoRep, insc.id_inscripcion, 
        insc.pago_confirmado, insc.autorizacion_inscripcion, insc.validacion_constancia, insc.fecha_solicitud, 
        insc.fecha_conclusion, insc.notas AS notasInscripcion, insc.estatus AS estatusInscripcion, 
        insc.id_asignacion_fk ".$colums."
        from alumno al, persona per,tipo_procedencia proc,universidades uni, estados edos, municipios mun, 
        inscripcion insc ".$fromTable."
        where al.id_persona = per.id_persona
        AND al.id_tipo_procedencia_fk = proc.id_tipo_procedencia
        AND uni.id_universidad = al.id_universidad
        AND edos.id_estado = mun.id_estado_fk
        AND mun.id_municipio = al.id_municipio
        AND insc.id_alumno_fk = al.id_alumno ".$join. $filtro. $asigFiltro." ORDER BY per.app, per.apm, per.nombre";
        //Abro conexion de consulta a BD
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    /*
     * ARCHIVO > estado
        0. enviado para verificar (default)
        1. verificado y aprobado
        2. verificado y rechazado
        3. incorrecto
        4. falso
        5. caducado
        -. eliminado
     * */

    /// FUNCION GENERAL.--->
    function queryFichasInscripcion($docSol,$notValidate,$filtroArchive)
    {
        $filtro = "";
        $filtro.= $filtroArchive ? '':'  AND  insc.autorizacion_inscripcion >= 0 ';
        //FUNCION UNIFICADA
        //Realizar el : REQUIERE si tiene algun documento solicitado  para presentar
        $filtro .= $notValidate ? "AND insc.id_inscripcion NOT IN (SELECT vi.id_inscripcion_fk from validacion_inscripcion vi)": "";

        //valida si el es para un ID espcifico
        $filtro .= $this->getIdInscripcion() >0 ? "AND insc.id_inscripcion = ".$this->getIdInscripcion():"";

        $hasDocsRevisa = "AND insc.id_inscripcion IN  (SELECT I.id_inscripcion FROM inscripcion I  INNER JOIN archivo A
                     On  A.id_inscripcion_fk = I.id_inscripcion  AND A.estado_revision = 0 AND A.estado = 0  GROUP BY id_inscripcion) ";

        $filtro .= $docSol ? $hasDocsRevisa : "";

        $sql = "select per.nombre, per.app, per.apm, per.sexo, per.estatus AS estatusPersona,
       CONCAT(per.app, ' ',per.apm, ' ', per.nombre) AS nombre_completo, per.telefono, al.id_alumno, al.matricula,
       al.nombre_uni, al.id_tipo_procedencia_fk, al.carrera_especialidad, al.email, al.fecha_registro, al.perfil_image,
       al.estatus AS estatusAlumno, proc.id_tipo_procedencia, proc.tipo_procedencia, uni.id_universidad,
       uni.nombre AS nombreUni, uni.siglas, mun.municipio, edos.estado AS edoRep, insc.id_inscripcion,
       insc.pago_confirmado, insc.autorizacion_inscripcion, insc.validacion_constancia, insc.fecha_solicitud,
       insc.fecha_conclusion, insc.notas AS notasInscripcion, insc.estatus AS estatusInscripcion,
       insc.id_asignacion_fk, asig.id_profesor_fk,
       asig.id_asignacion, asig.generacion, asig.semestre, asig.campus_cede, asig.fecha_creacion, asig.fecha_inicio,
       asig.fecha_fin, asig.fecha_inicio_inscripcion, asig.fecha_lim_inscripcion, asig.fecha_inicio_actas,
       asig.fecha_fin_actas, asig.cupo, asig.costo_real, asig.notas, asig.modalidad, asig.visible_publico, asig.estatus AS estatusAsig,
       gpo.id_grupo, gpo.grupo, gpo.estatus AS estatusGpo, c.id_curso, c.codigo, c.route, c.nombre_curso, c.dirigido_a,
       c.objetivo, c.descripcion, c.no_sesiones, c.antecedentes, c.link_temario_pdf, c.banner_img, c.tipo_curso,
       (SELECT COUNT(*) FROM docs_solicitados_curso WHERE id_curso_fk =  c.id_curso ) AS n_sol,
       (SELECT COUNT(*) FROM  archivo a  Left Join  docs_solicitados_curso ds
         On  a.id_doc_sol_fk = ds.id_doc_sol WHERE a.estado = 1 AND a.id_inscripcion_fk = insc.id_inscripcion) AS n_enviados,
       (select COUNT(*) from archivo ar where ar.estado <> 0 AND ar.id_inscripcion_fk =insc.id_inscripcion) AS n_retornados,
       (SELECT COUNT(*) FROM archivo A  WHERE A.estado_revision = 0 AND A.estado = 0 AND A.id_inscripcion_fk= insc.id_inscripcion) AS n_revisa,
        (SELECT AP.porcentaje_desc FROM asignacion_procedencia  AP WHERE AP.id_curso_fk = c.id_curso AND AP.id_tipo_procedencia_fk = proc.id_tipo_procedencia) AS DESCUENTO,
       (SELECT  CONCAT(prof.prefijo,'. ',per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo
FROM `persona` per INNER JOIN `profesor` prof WHERE  prof.`id_persona_fk`=per.`id_persona` AND prof.id_profesor = asig.id_profesor_fk) AS profesor
        FROM alumno al, persona per,tipo_procedencia proc,universidades uni, estados edos, municipios mun, inscripcion insc,
             asignacion_grupo asig, grupo gpo, curso c
        WHERE al.id_persona = per.id_persona
          AND al.id_tipo_procedencia_fk = proc.id_tipo_procedencia
          AND uni.id_universidad = al.id_universidad
          AND edos.id_estado = mun.id_estado_fk
          AND mun.id_municipio = al.id_municipio
          AND insc.id_alumno_fk = al.id_alumno
          AND asig.id_asignacion = insc.id_asignacion_fk
          AND gpo.id_grupo = asig.id_grupo_fk
          AND gpo.id_curso_fk = c.id_curso ".$filtro;

        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    function queryFichasInscripcionAlumnos($filtro)
    {
        $FiltroAlumno = $this->getIdAlumnoFk()>0 ? " AND al.id_alumno = ".$this->getIdAlumnoFk() :" ";
        $FiltroInsc = $this->getIdInscripcion()>0 ? " AND insc.id_inscripcion = ".$this->getIdInscripcion() :" ";
        switch ($filtro){
            case "0":
                //mostrando las solictudes enviadas
                $filtro = "   AND insc.id_inscripcion NOT IN (SELECT id_inscripcion_fk FROM validacion_inscripcion)
                                AND insc.autorizacion_inscripcion >=0 AND insc.estatus = 1 ";
                break;
            case "1":
                //solicitudes enviadas y aprobadas "Mis cursos"
                $filtro = "   AND insc.id_inscripcion IN (SELECT id_inscripcion_fk FROM validacion_inscripcion)
                                AND insc.autorizacion_inscripcion > 0 AND insc.estatus = 1 ";
                break;
            case "2":
                $filtro = " AND insc.autorizacion_inscripcion < 0 ";
                break;
            default:
                $filtro = " ";
                break;

        }
        $sql = "SELECT per.nombre, per.app, per.apm, per.sexo, per.estatus AS estatusPersona,
       CONCAT(per.app, ' ',per.apm, ' ', per.nombre) AS nombre_completo, per.telefono, al.id_alumno, al.matricula,
       al.nombre_uni, al.id_tipo_procedencia_fk, al.carrera_especialidad, al.email, al.fecha_registro, al.perfil_image,
       al.estatus AS estatusAlumno, proc.id_tipo_procedencia, proc.tipo_procedencia, uni.id_universidad,
       uni.nombre AS nombreUni, uni.siglas, mun.municipio, edos.estado AS edoRep, insc.id_inscripcion,
       insc.pago_confirmado, insc.autorizacion_inscripcion, insc.validacion_constancia, insc.fecha_solicitud,
       insc.fecha_conclusion, insc.notas AS notasInscripcion, insc.estatus AS estatusInscripcion,
       insc.id_asignacion_fk, asig.id_profesor_fk,
       asig.id_asignacion, asig.generacion, asig.semestre, asig.campus_cede, asig.fecha_creacion, asig.fecha_inicio,
       asig.fecha_fin, asig.fecha_inicio_inscripcion, asig.fecha_lim_inscripcion, asig.fecha_inicio_actas,
       asig.fecha_fin_actas, asig.cupo, asig.costo_real, asig.notas, asig.modalidad, asig.visible_publico, asig.estatus AS estatusAsig,
       gpo.id_grupo, gpo.grupo, gpo.estatus AS estatusGpo, c.id_curso, c.codigo, c.route, c.nombre_curso, c.dirigido_a,
       c.objetivo, c.descripcion, c.no_sesiones, c.antecedentes, c.link_temario_pdf, c.banner_img, c.tipo_curso,
       (SELECT COUNT(*) FROM docs_solicitados_curso WHERE id_curso_fk =  c.id_curso ) AS n_sol,
       (SELECT COUNT(*) FROM  archivo a  Left Join  docs_solicitados_curso ds
         On  a.id_doc_sol_fk = ds.id_doc_sol WHERE a.estado = 1 AND a.id_inscripcion_fk = insc.id_inscripcion) AS n_enviados,
       (select COUNT(*) from archivo ar where ar.estado <> 0 AND ar.id_inscripcion_fk =insc.id_inscripcion) AS n_retornados,
       (SELECT COUNT(*) FROM archivo A  WHERE A.estado_revision = 0 AND A.estado = 0 AND A.id_inscripcion_fk= insc.id_inscripcion) AS n_revisa,
        (SELECT AP.porcentaje_desc FROM asignacion_procedencia  AP WHERE AP.id_curso_fk = c.id_curso AND AP.id_tipo_procedencia_fk = proc.id_tipo_procedencia) AS DESCUENTO,
       (SELECT  CONCAT(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo
FROM `persona` per INNER JOIN `profesor` prof WHERE  prof.`id_persona_fk`=per.`id_persona` AND prof.id_profesor = asig.id_profesor_fk) AS profesor
        FROM alumno al, persona per,tipo_procedencia proc,universidades uni, estados edos, municipios mun, inscripcion insc,
             asignacion_grupo asig, grupo gpo, curso c
        WHERE al.id_persona = per.id_persona
          AND al.id_tipo_procedencia_fk = proc.id_tipo_procedencia
          AND uni.id_universidad = al.id_universidad
          AND edos.id_estado = mun.id_estado_fk
          AND mun.id_municipio = al.id_municipio
          AND insc.id_alumno_fk = al.id_alumno
          AND asig.id_asignacion = insc.id_asignacion_fk
          AND gpo.id_grupo = asig.id_grupo_fk
          AND gpo.id_curso_fk = c.id_curso ".$FiltroAlumno." ".$filtro." ".$FiltroInsc." ORDER BY insc.fecha_solicitud DESC";

        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    function queryLsDocPendientesInscipcion($filtro){
        include "ARCHIVO.php";
        $files = new ARCHIVO();
        $files->setIdInscripcionFk($this->getIdInscripcion());
        return  $files->queryListCountArchivosPendRev($filtro);
    }

    function queryLsDocsInscAlumno($idAlumno,$showOnlyePend){
        include "ARCHIVO.php";
        $files = new ARCHIVO();
        $files->setIdInscripcionFk($this->getIdInscripcion());
        return $files->queryListFilesPendientesAlumno($idAlumno,$showOnlyePend);
    }

    public function detallesValidacion()
    {
        include "VALIDACION_INSCRIPCION.php";
        $VALIDA = new VALIDACION_INSCRIPCION();
        $VALIDA->setIdInscripcionFk($this->getIdInscripcion());
        return $VALIDA->queryFichaValidacion();
    }


    function queryRegistraInscripcion()
    {
        $sql = "INSERT INTO `inscripcion` (`id_inscripcion`, `id_alumno_fk`, `id_asignacion_fk`, `pago_confirmado`, 
                           `autorizacion_inscripcion`, `validacion_constancia`, `fecha_solicitud`, `fecha_conclusion`, `notas`, `estatus`) VALUES 
                           ('".$this->getIdInscripcion()."', '".$this->getIdAlumnoFk()."', '".$this->getIdAsignacionFk()."', '0', '0', '0', CURRENT_TIMESTAMP, NULL, '', '1')";
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    function queryCountSolcitudesPendientes(){
        $query="select id_inscripcion from inscripcion 
                where id_inscripcion NOT IN (SELECT `id_inscripcion_fk` FROM validacion_inscripcion)
                AND autorizacion_inscripcion >= 0 ";
        $this->connect();
        $datos = $this->numRows($query);
        $this->close();
        return $datos;
    }

    //envio true o false
    //confirmaPago(true);
    //confirmaPago(false);
    function confirmaPagoRealizado($confirmacion)
    {
        $valConfir = $confirmacion ? '1':'-1';
        $estatus = $confirmacion ? '1':'0';
        $conclusion = $confirmacion ? 't.fecha_conclusion = NULL, ': " t.fecha_conclusion = CURRENT_TIMESTAMP,";
        $sql = "UPDATE inscripcion t
                SET t.pago_confirmado          = ".$valConfir.",
                    t.autorizacion_inscripcion = ".$valConfir.", ".$conclusion."
                    t.notas = t.notas + '".$this->getNotas()."',
                    t.estatus                  = ".$estatus."
                WHERE t.id_inscripcion = ". $this->getIdInscripcion();
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    function creaValidacionInscripcion($id_admin,$monto,$desc)
    {
        include_once "VALIDACION_INSCRIPCION.php";
        $obj_valida = new VALIDACION_INSCRIPCION();
        $obj_valida->setMontoPagoRealizado($monto);
        $obj_valida->setDescripcion($desc);
        $obj_valida->setNota($this->getNotas());
        $obj_valida->setIdProfesorAdminFk($id_admin);
        $obj_valida->setIdInscripcionFk($this->getIdInscripcion());
        return $obj_valida->queryValidaInscripcion();
    }

    function inscribeEnActa()
    {
        // TODO: Implement inscribeEnActa() method.
    }

    function modificaEstado($id_inscripcion, $estado_insc)
    {
        // TODO: Implement modificaEstado() method.
    }

    function eliminaRegistroInscripcion($id_inscripcion)
    {
        // TODO: Implement eliminaRegistroInscripcion() method.
    }

    function queryFichaInscripcionCostos(){
        $sql = "select insc.id_inscripcion, insc.id_alumno_fk, insc.id_asignacion_fk, insc.pago_confirmado,
       insc.autorizacion_inscripcion, insc.validacion_constancia, insc.fecha_solicitud,
       insc.fecha_conclusion, insc.notas, insc.estatus AS edoInsc,
       al.id_alumno, al.id_tipo_procedencia_fk,al.estatus AS edoAlumno, ag.costo_real,
       tp.tipo_procedencia, c.nombre_curso, gpo.grupo,
       (SELECT AP.porcentaje_desc FROM asignacion_procedencia  AP
       WHERE AP.id_curso_fk = c.id_curso AND AP.id_tipo_procedencia_fk = al.id_tipo_procedencia_fk) AS descuento
        from inscripcion insc, alumno al, asignacion_grupo ag, grupo gpo, curso c, tipo_procedencia tp
        where insc.id_alumno_fk = al.id_alumno
          AND tp.id_tipo_procedencia = al.id_tipo_procedencia_fk
          AND insc.id_asignacion_fk = ag.id_asignacion
          AND ag.id_grupo_fk = gpo.id_grupo
          AND gpo.id_curso_fk = c.id_curso
        AND insc.id_inscripcion = ".$this->getIdInscripcion();
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    function queryInfoDescAplicable($pocedencia){
        $sql = "SELECT c.nombre_curso, ap.porcentaje_desc, ap.id_tipo_procedencia_fk
      FROM curso c, asignacion_procedencia ap, grupo gpo left join asignacion_grupo agpo
      ON agpo.id_grupo_fk = gpo.id_grupo
      WHERE gpo.id_curso_fk = c.id_curso
        AND c.id_curso = ap.id_curso_fk
        AND agpo.id_asignacion = ".$this->getIdAsignacionFk()."
        AND ap.id_tipo_procedencia_fk =  ".$pocedencia;
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }


    function queryRevisaInscripcionAlumno(){
        $sql = "select id_inscripcion from inscripcion
                        WHERE id_asignacion_fk = ".$this->getIdAsignacionFk()." 
                        AND id_alumno_fk = ".$this->getIdAlumnoFk();
        $this->connect();
        $result = $this->numRows($sql);
        $this->close();
        return $result;
    }

    /*******************************************************************************
     * Terminan Funciones implementadas de la Interface
     *******************************************************************************/


    /*******************************************************************************
     * Inician Otras funciones
     *******************************************************************************/

}