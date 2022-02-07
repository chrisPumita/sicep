<?php
include_once "DOCS_SOLICITADOS_CURSO.php";
include_once "interface/I_ARCHIVO.php";
class ARCHIVO extends DOCS_SOLICITADOS_CURSO implements I_ARCHIVO
{
    private $id_archivo;
    private $id_inscripcion_fk;
    private $name_archivo;
    private $path;
    private $fecha_creacion;
    private $notas;
    private $estado_revision;
    private $estadoArchivo;

    /**
     * @return mixed
     */
    public function getIdArchivo()
    {
        return $this->id_archivo;
    }

    /**
     * @param mixed $id_archivo
     */
    public function setIdArchivo($id_archivo): void
    {
        $this->id_archivo = $id_archivo;
    }

    /**
     * @return mixed
     */
    public function getIdInscripcionFk()
    {
        return $this->id_inscripcion_fk;
    }

    /**
     * @param mixed $id_inscripcion_fk
     */
    public function setIdInscripcionFk($id_inscripcion_fk): void
    {
        $this->id_inscripcion_fk = $id_inscripcion_fk;
    }

    /**
     * @return mixed
     */
    public function getNameArchivo()
    {
        return $this->name_archivo;
    }

    /**
     * @param mixed $name_archivo
     */
    public function setNameArchivo($name_archivo): void
    {
        $this->name_archivo = $name_archivo;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
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
    public function getEstadoRevision()
    {
        return $this->estado_revision;
    }

    /**
     * @param mixed $estado_revision
     */
    public function setEstadoRevision($estado_revision): void
    {
        $this->estado_revision = $estado_revision;
    }

    /**
     * @return mixed
     */
    public function getEstadoArchivo()
    {
        return $this->estadoArchivo;
    }

    /**
     * @param mixed $estadoArchivo
     */
    public function setEstadoArchivo($estadoArchivo): void
    {
        $this->estadoArchivo = $estadoArchivo;
    }

    function queryInsertArchivoSolicituAlumno()
    {
        $query="INSERT INTO `archivo` (`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `name_archivo`, `path`, 
                       `fecha_creacion`, `notas`, `estado_revision`, `estado`) 
                       VALUES (NULL, '".$this->getIdDocSol()."', '".$this->getIdInscripcionFk()."', '".$this->getNameArchivo()."',
                        '".$this->getPath()."', CURRENT_TIMESTAMP, '".$this->getNotas()."', '0', '0')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateArchivo()
    {
        $query="";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    //Regresa una lista de ID que tiene almenos un archivo para ver/revisar
    //funcion OK
    function queryListCountArchivosPendRev($filtro){
        $id = $this->getIdInscripcionFk() > 0 ? " AND insc.id_inscripcion =  ". $this->getIdInscripcionFk():'';
        $contat = "";
         switch ($filtro){
            case "0":
                //NO considerar ningun filtro
                $contat .= $id;
                break;
            case "1":
                //Traer todos los documentos no revisados
            //    $contat .= $id."  AND arch.id_archivo IS NOT NULL AND arch.estado = 0 AND arch.estado_revision = 0 " ;
              $contat = $id;
                break;
            default:
                $contat = $id;
                break;
        }
        $query="SELECT dsol.id_doc_sol, dsol.obligatorio, d.nombre_doc, insc.id_inscripcion,
       arch.id_archivo, arch.path, d.id_documento,
       d.formato_admitido, d.tipo, d.peso_max_mb, arch.fecha_creacion, arch.notas,
       (case when arch.id_archivo is null then -1 else arch.estado end) as estatusFile,
       (case when arch.id_archivo is null then -1 else arch.estado_revision end) as estadoRevisado
        from documento d, curso c, grupo gpo, asignacion_grupo asig, inscripcion insc,
             docs_solicitados_curso dsol LEFT JOIN archivo arch ON arch.id_doc_sol_fk = dsol.id_doc_sol
        WHERE dsol.id_documento_fk = d.id_documento
        AND c.id_curso = dsol.id_curso_fk
        AND gpo.id_curso_fk = c.id_curso
        AND asig.id_grupo_fk = gpo.id_grupo
        AND insc.id_asignacion_fk = asig.id_asignacion
         ".$contat. " ORDER BY estadoRevisado DESC";

        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    //funcion OK
    function queryListFilesPendientesAlumno($idAlumno,$showPendientes){
        $inscripcion = $this->getIdInscripcionFk() > 0 ? " AND insc.id_inscripcion =  ". $this->getIdInscripcionFk():'';
        $pendintes = $showPendientes ? "HAVING estatusFile <> 1 ":"";
        $query="SELECT insc.id_inscripcion, insc.id_alumno_fk, dsol.id_doc_sol, dsol.obligatorio, d.nombre_doc, insc.id_inscripcion,
       arch.id_archivo, arch.path, d.id_documento,arch.notas AS notasFile, c.id_curso, c.nombre_curso,
       d.formato_admitido, d.tipo, d.peso_max_mb, arch.fecha_creacion, arch.notas,gpo.grupo,
       (case when arch.id_archivo is null then -1 else arch.estado end) as estatusFile,
       (case when arch.id_archivo is null then -1 else arch.estado_revision end) as estadoRevisado
        FROM documento d, curso c, grupo gpo, asignacion_grupo asig, inscripcion insc,
             docs_solicitados_curso dsol LEFT JOIN archivo arch ON arch.id_doc_sol_fk = dsol.id_doc_sol
        WHERE dsol.id_documento_fk = d.id_documento
          AND c.id_curso = dsol.id_curso_fk
          AND gpo.id_curso_fk = c.id_curso
          AND asig.id_grupo_fk = gpo.id_grupo
          AND insc.id_asignacion_fk = asig.id_asignacion
            AND insc.id_alumno_fk = ".$idAlumno."
        ".$inscripcion." ".$pendintes."
        ORDER BY estadoRevisado DESC, d.nombre_doc ASC";

        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    //funcion REESCRIBIR
    function queryUpdateEstadoArchivo($id,$estatus){
        $query="UPDATE `archivo` SET `estado_revision`='$estatus' WHERE `id_archivo`='$id'";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    //funcion OK
    function queryCountArchRevisa(){
        $query="select a.id_archivo from archivo a, inscripcion i
                where a.id_inscripcion_fk = i.id_inscripcion
                      AND a.estado_revision = 0 AND a.estado = 0
                AND i.autorizacion_inscripcion>=0";
        $this->connect();
        $datos = $this->numRows($query);
        $this->close();
        return $datos;
    }

    //funcion OK
    function queryValidaDocSolMatch($idAlumno){
        $query = "SELECT doc.id_documento, doc.nombre_doc, doc.formato_admitido, doc.tipo, doc.peso_max_mb,
       ds.id_doc_sol, ds.id_curso_fk, ds.obligatorio,
       c.id_curso
        FROM docs_solicitados_curso ds, curso c, documento doc
        WHERE ds.id_curso_fk = c.id_curso
        AND doc.id_documento = ds.id_documento_fk
        AND ds.id_doc_sol = ".$this->getIdDocSol()."
        AND c.id_curso IN (SELECT c.id_curso FROM inscripcion insc, asignacion_grupo ag,
                                                  grupo gpo, curso c
                           WHERE insc.id_asignacion_fk = ag.id_asignacion
                             AND gpo.id_grupo = ag.id_grupo_fk
                             AND c.id_curso = gpo.id_curso_fk
                             AND insc.id_alumno_fk = ".$idAlumno."
                             AND insc.id_inscripcion = ".$this->getIdInscripcionFk().")";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    //funcion OK
    function queryValidaDocEntregadoMatch($idAlumno){
        $query = "SELECT doc.id_documento, doc.nombre_doc, doc.formato_admitido, doc.tipo, doc.peso_max_mb,
       ds.id_doc_sol, ds.id_curso_fk, ds.obligatorio, c.id_curso, a.*
        FROM docs_solicitados_curso ds, curso c, documento doc, archivo a
        WHERE ds.id_curso_fk = c.id_curso
          AND doc.id_documento = ds.id_documento_fk
          AND a.id_doc_sol_fk = ds.id_doc_sol
          AND ds.id_doc_sol = 33
          AND a.id_archivo = 22
            AND c.id_curso IN (SELECT c.id_curso 
                                FROM inscripcion insc, asignacion_grupo ag,  grupo gpo, curso c
                                 WHERE insc.id_asignacion_fk = ag.id_asignacion
                                   AND gpo.id_grupo = ag.id_grupo_fk
                                   AND c.id_curso = gpo.id_curso_fk
                                   AND insc.id_alumno_fk = 95
                                   AND insc.id_inscripcion = 22012804715989)";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }
}