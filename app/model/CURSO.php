<?php

include_once "CONEXION_M.php";
include_once "interface/I_CURSO.php";
class CURSO extends CONEXION_M implements I_CURSO
{
    private $id_curso;
    private $id_profesor_admin_acredita;
    private $id_profesor_autor;
    private $codigo;
    private $nombre_curso;
    private $dirigido_a;
    private $objetivo;
    private $descripcion;
    private $no_sesiones;
    private $antecedentes;
    private $aprobado;
    private $costo_sugerido;
    private $link_temario_pdf;
    private $fecha_creacion;
    private $fecha_acreditacion;
    private $banner_img;
    private $tipo_curso;
    private $route;
    /*Composiciones*/
    private $lista_temas;
    private $lista_grupos;
    private $lista_docs_solicitados;
    private $lista_group_keys;
    private $obj_profesor_autor;
    private $obj_profesor_admin_acredita;

    /* asociacion */

    /*******************************************************************************
     * Inician Getters and Setters
     *******************************************************************************/
    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route): void
    {
        $this->route = $route;
    }
    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->id_curso;
    }

    /**
     * @param mixed $id_curso
     */
    public function setIdCurso($id_curso): void
    {
        $this->id_curso = $id_curso;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAdminAcredita()
    {
        return $this->id_profesor_admin_acredita;
    }

    /**
     * @param mixed $id_profesor_admin_acredita
     */
    public function setIdProfesorAdminAcredita($id_profesor_admin_acredita): void
    {
        $this->id_profesor_admin_acredita = $id_profesor_admin_acredita;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAutor()
    {
        return $this->id_profesor_autor;
    }

    /**
     * @param mixed $id_profesor_autor
     */
    public function setIdProfesorAutor($id_profesor_autor): void
    {
        $this->id_profesor_autor = $id_profesor_autor;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNombreCurso()
    {
        return $this->nombre_curso;
    }

    /**
     * @param mixed $nombre_curso
     */
    public function setNombreCurso($nombre_curso): void
    {
        $this->nombre_curso = $nombre_curso;
    }

    /**
     * @return mixed
     */
    public function getDirigidoA()
    {
        return $this->dirigido_a;
    }

    /**
     * @param mixed $dirigido_a
     */
    public function setDirigidoA($dirigido_a): void
    {
        $this->dirigido_a = $dirigido_a;
    }

    /**
     * @return mixed
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * @param mixed $objetivo
     */
    public function setObjetivo($objetivo): void
    {
        $this->objetivo = $objetivo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getNoSesiones()
    {
        return $this->no_sesiones;
    }

    /**
     * @param mixed $no_sesiones
     */
    public function setNoSesiones($no_sesiones): void
    {
        $this->no_sesiones = $no_sesiones;
    }

    /**
     * @return mixed
     */
    public function getAntecedentes()
    {
        return $this->antecedentes;
    }

    /**
     * @param mixed $antecedentes
     */
    public function setAntecedentes($antecedentes): void
    {
        $this->antecedentes = $antecedentes;
    }

    /**
     * @return mixed
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * @param mixed $aprobado
     */
    public function setAprobado($aprobado): void
    {
        $this->aprobado = $aprobado;
    }

    /**
     * @return mixed
     */
    public function getCostoSugerido()
    {
        return $this->costo_sugerido;
    }

    /**
     * @param mixed $costo_sugerido
     */
    public function setCostoSugerido($costo_sugerido): void
    {
        $this->costo_sugerido = $costo_sugerido;
    }

    /**
     * @return mixed
     */
    public function getLinkTemarioPdf()
    {
        return $this->link_temario_pdf;
    }

    /**
     * @param mixed $link_temario_pdf
     */
    public function setLinkTemarioPdf($link_temario_pdf): void
    {
        $this->link_temario_pdf = $link_temario_pdf;
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
    public function getFechaAcreditacion()
    {
        return $this->fecha_acreditacion;
    }

    /**
     * @param mixed $fecha_acreditacion
     */
    public function setFechaAcreditacion($fecha_acreditacion): void
    {
        $this->fecha_acreditacion = $fecha_acreditacion;
    }

    /**
     * @return mixed
     */
    public function getBannerImg()
    {
        return $this->banner_img;
    }

    /**
     * @param mixed $banner_img
     */
    public function setBannerImg($banner_img): void
    {
        $this->banner_img = $banner_img;
    }

    /**
     * @return mixed
     */
    public function getTipoCurso()
    {
        return $this->tipo_curso;
    }

    /**
     * @param mixed $tipo_curso
     */
    public function setTipoCurso($tipo_curso): void
    {
        $this->tipo_curso = $tipo_curso;
    }


    /*******************************************************************************
     * Terminan Getters and Setters
     *******************************************************************************/

    /*******************************************************************************
     * Inician Funciones de Interfaz
     *******************************************************************************/

//Funcion que trae todos los cursos, aprobados, por aprobar.
    public function queryconsultaCursos($typeFiltro,$value)
    {
        //revisar el tipo de filtro que esta ingresando
        switch ($typeFiltro){
            case "0":
                $filtro = " AND c.aprobado = ".$value;
                break;

            case "1":
                //trar el de un ID especifico
                $filtro = " AND c.id_curso = ".$value;
                break;

                //Traemos los cursos realizados por un profesor
            case "2":
                $filtro = " AND c.id_profesor_autor = ".$value;
                break;
            //Traer todos los cursos
            default:
                $filtro = "";
                break;
        }
        $query="SELECT c.id_profesor_admin_acredita, c.id_curso, c.codigo, c.nombre_curso, 
                   c.dirigido_a, c.objetivo, c.`route`,c.descripcion, c.no_sesiones, 
                   c.antecedentes, c.costo_sugerido, c.link_temario_pdf, c.fecha_creacion, 
                   c.fecha_acreditacion, c.banner_img, c.tipo_curso, c.aprobado,c.banner_img,
                    concat(pr.nombre, ' ', pr.app,' ', pr.apm) AS nombre_completo,
                   pr.nombre , pr.app , pr.apm,c.aprobado, prof.prefijo, prof.img_perfil, prof.estatus AS estatus_profesor,
                    (SELECT COUNT(*) FROM asignacion_grupo ag, grupo gpo
                    WHERE   ag.id_grupo_fk = gpo.id_grupo and gpo.id_curso_fk = c.id_curso) AS grupos_abiertos
                        FROM curso c, profesor prof, persona pr
                            WHERE c.id_profesor_autor = prof.id_profesor 
                            and prof.id_persona_fk = pr.id_persona ".$filtro." order by c.nombre_curso ASC";
        $this->connect();
        $cursos=$this->getData($query);
        $this->close();
        return $cursos;
    }

    public function consultaAcreditacion($idCurso){
        $this->connect();
        $query = "select curso.id_profesor_admin_acredita, 
       admin.permisos, admin.cargo, prof.prefijo, prof.no_trabajador, 
       depto.nombre as departamento, per.nombre, per.app, per.apm from curso, administrador 
        admin, profesor prof, persona per ,departamentos depto 
        where curso.id_profesor_admin_acredita = admin.id_profesor_admin_fk 
          and admin.id_profesor_admin_fk = prof.id_profesor 
          and prof.id_depto_fk = depto.id_depto 
          and prof.id_persona_fk = per.id_persona 
          and `id_curso` = ". $idCurso;
        $detalles = $this-> getData($query);
        $this->close();
        return $detalles;
    }

    function queryCountPerdientesRevisar(){
        $query = "SELECT * FROM curso 
                    WHERE `curso`.`id_profesor_admin_acredita` IS NULL 
                    AND `curso`.`aprobado` = 0 AND `curso`.`fecha_acreditacion` IS NULL";
        $this->connect();
        $datos = $this->numRows($query);
        $this->close();
        return $datos;
    }

    public function consultaGroupKeys($id_curso)
    {
        $this->connect();
        $temas = $this-> getData("SELECT * FROM `group_key` 
        WHERE `id_curso_fk` = ".$id_curso." 
        ORDER BY `group_key`.`id_curso_fk` ASC ");
        $this->close();
        return $temas;
    }

    public function consultaDocsSolicitados($id_curso)
    {
        include "../model/DOCS_SOLICITADOS_CURSO.php";
        return DOCS_SOLICITADOS_CURSO::class(consultarListaDocumentosSol($this->getIdCurso()));
    }

    function registraCurso()
    {
        //la ruta del route debe quedar asi:
        // resources/banner/E931C40F8171665B3852329702A01562/4561516.jpg
        $query = "INSERT INTO `curso` (
                    `id_curso`, 
                    `id_profesor_admin_acredita`,
                    `id_profesor_autor`,
                    `codigo`, 
                     `route`,
                    `nombre_curso`, 
                    `dirigido_a`, 
                    `objetivo`, 
                    `descripcion`, 
                    `no_sesiones`, 
                    `antecedentes`, 
                    `aprobado`, 
                    `costo_sugerido`, 
                    `link_temario_pdf`, 
                    `fecha_creacion`, 
                    `fecha_acreditacion`, 
                    `banner_img`, 
                    `tipo_curso`) VALUES 
                    ('".$this->getIdCurso()."', NULL, '"
                    .$this->getIdProfesorAutor()."', '".$this->getCodigo()."', '".$this->getRoute()."', 
                    '".$this->getNombreCurso()."', '".$this->getDirigidoA()."', '"
                    .$this->getObjetivo()."', '".$this->getDescripcion()."', '"
                    .$this->getNoSesiones()."', '".$this->getAntecedentes()."', 
                    '0', '".$this->getCostoSugerido()."', '".$this->getLinkTemarioPdf()."', 
                    '".date('Y-m-d H:i:s')."', NULL, '".$this->getBannerImg()."', '"
                    .$this->getTipoCurso()."')";
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    //En el actualiza no se actualiza la verificacion del
    // profesor que acredita, esta sera acreditada por el admin en la clase admin
    function actualizaCurso()
    {
        $query = "UPDATE `curso` SET 
                    `nombre_curso` = '".$this->getNombreCurso()."', 
                    `dirigido_a` = '".$this->getDirigidoA()."', 
                    `objetivo` = '".$this->getObjetivo()."', 
                    `descripcion` = '".$this->getDescripcion()."', 
                    `no_sesiones` = '".$this->getNoSesiones()."', 
                    `antecedentes` = '".$this->getAntecedentes()."', 
                    `costo_sugerido` = '".$this->getCostoSugerido()."', 
                    `tipo_curso` = '".$this->getTipoCurso()."' 
                    WHERE `curso`.`id_curso` = '".$this->getIdCurso()."'";
        $this->connect();
        $response = $this->executeInstruction($query);
        $this->close();
        return $response;
    }

    function acreditaCurso()
    {
        $query = "UPDATE `curso` SET 
                    `id_profesor_admin_acredita` = '".$this->getIdProfesorAdminAcredita()."', 
                    `fecha_acreditacion` = '".($this->getAprobado() == "1" ? date('Y-m-d H:i:s') : NULL)."'
                    WHERE `curso`.`id_curso` = '".$this->getIdCurso()."'";
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    function agregaKeywordGrupo($keyword)
    {
        // TODO: Implement agregaKeywordGrupo() method.
    }

    function quitarKeyword($id_key, $id_curso)
    {
        // TODO: Implement quitarKerword() method.
    }
    /*
        function agregaDocumentoSol($documentoSolicitado,$obl)
        {
            include_once "DOCS_SOLICITADOS_CURSO.php";
            $doc = new DOCS_SOLICITADOS_CURSO();
            $doc ->setIdDocumento($documentoSolicitado);
            $doc ->setIdCursoFk($this->getIdCurso());
            $doc->setObligatorio($obl);
            return $doc -> crearDocumentosSol()? "Se ha creado el documento":"Error al crear documento";
        }
    */
    function quitarDocumetoSolicitado($id_doc_solicitado, $id_curso)
    {
        // TODO: Implement quitarDocumetoSolicitado() method.
    }
    /*******************************************************************************
     * Terminan Funciones de Interfaz
     *******************************************************************************/


    /*
     * Otras funciones temas
     * */

    protected function consultaTemasCurso(){
        include_once "./TEMAS.php";
        $tema = new TEMAS();
        return $tema->consultaTemas($this->getIdCurso());
    }

    function queryConsultaListaGrupos(){
        include_once "GROUPS.php";
        $ls_grupos = new GROUPS();
        return $ls_grupos->consultaListaGrupos($this->getIdCurso());
    }

    function queryUpdateBanner(){
        $query = "UPDATE seltic.curso t
                    SET t.banner_img = '".$this->getBannerImg()."'
                    WHERE t.id_curso = ".$this->getIdCurso();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    public function queryUpdateLinkTemario(){
        $query = "UPDATE `curso` SET `link_temario_pdf` = '".$this->getLinkTemarioPdf()."' WHERE `curso`.`id_curso` = ".$this->getIdCurso();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

}