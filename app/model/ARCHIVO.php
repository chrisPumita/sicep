<?php
INCLUDE ("DOCS_SOLICITADOS_CURSO.php");
include_once "I_ARCHIVO.php";
class ARCHIVO extends DOCS_SOLICITADOS_CURSO implements I_ARCHIVO
{
    private $id_archivo;
    private $id_inscripcion_fk;
    private $codigo_doc;
    private $name_archivo;
    private $name_file_md5;
    private $path;
    private $fecha_creacion;
    private $notas;
    private $estado_revision;
    private $estadoArchivo;

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
    public function getCodigoDoc()
    {
        return $this->codigo_doc;
    }

    /**
     * @param mixed $codigo_doc
     */
    public function setCodigoDoc($codigo_doc): void
    {
        $this->codigo_doc = $codigo_doc;
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
    public function getNameFileMd5()
    {
        return $this->name_file_md5;
    }

    /**
     * @param mixed $name_file_md5
     */
    public function setNameFileMd5($name_file_md5): void
    {
        $this->name_file_md5 = $name_file_md5;
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

    function crearArchivo()
    {
        $query="INSERT INTO `archivo`(`id_archivo`, `id_doc_sol_fk`, `id_inscripcion_fk`, `codigo_doc`, `name_archivo`, `name_file_md5`, `path`, `fecha_creacion`, `notas`, `estado_revision`, `estado`) 
                                      VALUES (NULL,'".$this->getIdDocSol()."','".$this->getIdInscripcionFk()."','".$this->getCodigoDoc()."','".$this->getNameArchivo()."','".$this->getNameFileMd5().
            "','".$this->getPath()."','".$this->getFechaCreacion()."','".$this->getNotas()."','".$this->getEstadoRevision()."','".$this->getEstadoArchivo()."');";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function consultaArchivos($id_inscripcion)
    {
        $query="SELECT 
                    archivo.id_inscripcion_fk,
                    documento.nombre_doc as documento_solicitado,
                    documento.formato_admitido,
                    documento.peso_max_mb,
                    docs_solicitados_curso.obligatorio,
                    archivo.codigo_doc,
                    archivo.name_archivo as documento_subido,
                    archivo.fecha_creacion,
                    archivo.notas,
                    archivo.estado_revision,
                    archivo.estado
                        FROM archivo , docs_solicitados_curso ,documento 
                            WHERE archivo.id_doc_sol_fk=docs_solicitados_curso.id_doc_sol
                                AND docs_solicitados_curso.id_documento_fk =documento.id_documento
                                AND archivo.id_inscripcion_fk=".$id_inscripcion;
       $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }


    function modificaArchivo()
    {
        $query="UPDATE `archivo` SET `id_doc_sol_fk`='".$this->getIdDocSol()."',`id_inscripcion_fk`='".$this->getIdInscripcionFk()."',`codigo_doc`='".$this->getCodigoDoc()."'
                ,`name_archivo`='".$this->getNameArchivo()."',`name_file_md5`='".$this->getNameFileMd5()."',`path`='".$this->getPath()."',`fecha_creacion`='".$this->getFechaCreacion()."'
                ,`notas`='".$this->getNotas()."',`estado_revision`='".$this->getEstadoRevision()."',`estado`='".$this->getEstadoArchivo()."' 
                WHERE `id_archivo`=".$this->getIdArchivo();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
 

    function eliminarArchivo($id_archivo)
    {
        $this->connect();
        $datos = $this-> executeInstruction("DELETE FROM `archivo` WHERE `id_archivo`=".$id_archivo);
        $this->close();
        return $datos;
    }

    function eliminaArchivoPath($path)
    {
       $result= unlink($path);
       return $result;
    }

    function listaArchivos(){
        $query=" SELECT per.nombre,per.app,per.apm,insc.id_inscripcion,gpo.grupo,ar.estado_revision,docs.nombre_doc,ar.id_archivo
                    FROM persona per,inscripcion insc,alumno al, grupo gpo,asignacion_grupo ag,archivo ar,docs_solicitados_curso docsol,documento docs
                        WHERE per.id_persona=al.id_persona
                        and al.id_alumno= insc.id_alumno_fk
                        and insc.id_asignacion_fk= ag.id_asignacion
                        and ag.id_grupo_fk=gpo.id_grupo
                        and ar.id_inscripcion_fk=insc.id_inscripcion
                        and ar.id_doc_sol_fk=docsol.id_doc_sol
                        and docsol.id_documento_fk=docs.id_documento";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;

    }
    function modificaEstadoArchivo($id,$estatus){
        $query="UPDATE `archivo` SET `estado_revision`='$estatus' WHERE `id_archivo`='$id'";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function crearArchivoPath($nombreArchivo,$Archivo)
    {

        $inscripcion = $this->getIdInscripcionFk();
        $carpeta = "../model/prueba/" . $inscripcion;
        if (!file_exists($carpeta)) {
            if(!mkdir("$carpeta", 0777, true) ){
                echo "error al crear la carpeta";
            }
        }
        $ruta = $carpeta . '/' . md5($nombreArchivo);
        /*if (empty($nombreArchivo)) {
            $ruta = "";
        }*/
        if(move_uploaded_file($Archivo, $ruta)){
            return $ruta;
        }else{
            return false;
        }
    }
}