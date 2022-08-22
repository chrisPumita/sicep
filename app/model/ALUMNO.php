<?php

include_once "PERSONA.php";
include_once "interface/I_ALUMNO.php";
class ALUMNO extends PERSONA implements I_ALUMNO
{
    private $id_alumno;
    private $id_municipio;
    private $id_universidad;
    private $matricula;
    private $nombre_uni;
    private $tipo_procedencia;
    private $id_procedencia;
    private $carrera_especialidad;
    private $email;
    private $pw;
    private $fecha_registro;
    private $perfil_image;
    private $estatus_alumno;
    private $update_doc_at;
    private $path_doc_valida;
    //Asociacion
    private $cuenta_SERVICIO_SOCIAL;
    /*******************************************************************************
     * Inician Getters and Setters
     *******************************************************************************/
    /**
     * @return mixed
     */
    public function getPathDocValida()
    {
        return $this->path_doc_valida;
    }

    /**
     * @param mixed $path_doc_valida
     */
    public function setPathDocValida($path_doc_valida): void
    {
        $this->path_doc_valida = $path_doc_valida;
    }

    /**
     * @return mixed
     */
    public function getUpdateDocAt()
    {
        return $this->update_doc_at;
    }

    /**
     * @param mixed $update_doc_at
     */
    public function setUpdateDocAt($update_doc_at): void
    {
        $this->update_doc_at = $update_doc_at;
    }

    /**
     * @return mixed
     */
    public function getCuentaSERVICIOSOCIAL()
    {
        return $this->consultaCuentaServSoc();
    }

    /**
     * @param mixed $cuenta_SERVICIO_SOCIAL
     */
    public function setCuentaSERVICIOSOCIAL($cuenta_SERVICIO_SOCIAL): void
    {
        $this->cuenta_SERVICIO_SOCIAL = $cuenta_SERVICIO_SOCIAL;
    }
    /**
     * @return mixed
     */
    public function getIdAlumno()
    {
        return $this->id_alumno;
    }

    /**
     * @param mixed $id_alumno
     */
    public function setIdAlumno($id_alumno): void
    {
        $this->id_alumno = $id_alumno;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * @param mixed $id_municipio
     */
    public function setIdMunicipio($id_municipio): void
    {
        $this->id_municipio = $id_municipio;
    }

    /**
     * @return mixed
     */
    public function getIdUniversidad()
    {
        return $this->id_universidad;
    }

    /**
     * @param mixed $id_universidad
     */
    public function setIdUniversidad($id_universidad): void
    {
        $this->id_universidad = $id_universidad;
    }

    /**
     * @return mixed
     */
    public function getIdProcedencia()
    {
        return $this->id_procedencia;
    }

    /**
     * @param mixed $id_procedencia
     */
    public function setIdProcedencia($id_procedencia): void
    {
        $this->id_procedencia = $id_procedencia;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getNombreUni()
    {
        return $this->nombre_uni;
    }

    /**
     * @param mixed $nombre_uni
     */
    public function setNombreUni($nombre_uni): void
    {
        $this->nombre_uni = $nombre_uni;
    }

    /**
     * @return mixed
     */
    public function getTipoProcedencia()
    {
        return $this->tipo_procedencia;
    }

    /**
     * @param mixed $tipo_procedencia
     */
    public function setTipoProcedencia($tipo_procedencia): void
    {
        $this->tipo_procedencia = $tipo_procedencia;
    }

    /**
     * @return mixed
     */
    public function getCarreraEspecialidad()
    {
        return $this->carrera_especialidad;
    }

    /**
     * @param mixed $carrera_especialidad
     */
    public function setCarreraEspecialidad($carrera_especialidad): void
    {
        $this->carrera_especialidad = $carrera_especialidad;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param mixed $pw
     */
    public function setPw($pw): void
    {
        $this->pw = $pw;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    /**
     * @param mixed $fecha_registro
     */
    public function setFechaRegistro($fecha_registro): void
    {
        $this->fecha_registro = $fecha_registro;
    }

    /**
     * @return mixed
     */
    public function getPerfilImage()
    {
        return $this->perfil_image;
    }

    /**
     * @param mixed $perfil_image
     */
    public function setPerfilImage($perfil_image): void
    {
        $this->perfil_image = $perfil_image;
    }

    /**
     * @return mixed
     */
    public function getEstatusAlumno()
    {
        return $this->estatus_alumno;
    }

    /**
     * @param mixed $estatus_alumno
     */
    public function setEstatusAlumno($estatus_alumno): void
    {
        $this->estatus_alumno = $estatus_alumno;
    }
    /*******************************************************************************
     * Terminan Getters and Setters
     *******************************************************************************/

    /*******************************************************************************
     * Inician Funciones de Interfaz
     *******************************************************************************/

    public function queryConsultaListaAlumnos($edoFiltro,$idAlumno)
    {
        $filtro = $edoFiltro >= 0 ? " AND  al.`estatus` = ".$edoFiltro : "";
        $filtroIdAlumno = $idAlumno > 0 ? " AND al.`id_alumno` = ".$idAlumno : "";
        $query = "SELECT al.`id_alumno`, al.`id_municipio`, mun.`id_estado_fk`, mun.`municipio`,
       al.`matricula`, al.`id_persona`, al.`carrera_especialidad`, al.perfil_image, al.nombre_uni, al.id_universidad,
       al.`email`, al.`estatus` AS estatus_alumno, per.`id_persona`,  al.fecha_registro, al.path_doc_valida, al.update_doc_at,
       per.`nombre`, per.`app`, per.`apm`, per.`telefono`,
       concat(per.`app`,' ', per.`apm`,' ', per.`nombre`) AS nombre_completo,
       per.`estatus` AS estatus_persona, per.`sexo`,tipproc.`id_tipo_procedencia`,
       tipproc.`tipo_procedencia` AS nameproc, uni.nombre AS uni_name, uni.siglas,
       edosRep.estado AS edoRepName, edosRep.abrev AS abrevEdo,
       ss.id_alumno_fk, ss.estatus AS statusSS, (case when ss.id_alumno_fk is null then 0 else 1 end) as flagServSoc,
       TIMESTAMPDIFF(DAY, update_doc_at, now()) AS dias
        FROM  universidades uni, `persona` per , `tipo_procedencia` tipproc , 
             `municipios` mun, estados edosRep, alumno al
             left join servicio_social ss on ss.id_alumno_fk = al.id_alumno
        WHERE al.`id_persona` = per.`id_persona`
          AND uni.id_universidad = al.id_universidad
          AND al.`id_municipio` = mun.`id_municipio`
          AND edosRep.id_estado = mun.id_estado_fk
          AND al.`id_tipo_procedencia_fk`= tipproc.`id_tipo_procedencia`
        ".$filtro." ".$filtroIdAlumno."
        ORDER BY per.`app`, per.`apm`,per.`nombre` ASC";
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }

    public function queryCountCuentasPorVerificar()
    {
        $query = "select id_alumno from alumno where estatus = 0";
        $this->connect();
        $datos = $this->numRows($query);
        $this->close();
        return $datos;
    }

    function queryBuscaMatriculaCorreo(){
        $query = "select email from alumno where matricula LIKE '".$this->getMatricula()."'
                    OR email LIKE '".$this->getEmail()."'";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryInsertAlumno()
    {
        $query ="INSERT INTO `alumno` (
            `id_alumno`, `id_municipio`, 
            `id_universidad`, `id_persona`, 
            `id_tipo_procedencia_fk`, `matricula`, 
            `nombre_uni`, `carrera_especialidad`, 
            `email`, `pw`, `fecha_registro`, 
            `perfil_image`, `estatus`) 
            VALUES (NULL, '".$this->getIdMunicipio()."', '"
            .$this->getIdUniversidad()."','"
            .$this->getIdPersona()."', '"
            .$this->getIdProcedencia()."', '"
            .$this->getMatricula()."', '"
            .$this->getNombreUni()."','"
            .$this->getCarreraEspecialidad()."',
            '".$this->getEmail()."', '"
            .$this->getPw()."', '"
            .date('Y-m-d H:i:s')."', '../resources/default-avatar.png', '"
            .$this->getEstatusAlumno()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryConsultaAlumno()
    {
        $query = "SELECT  per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, per.`telefono`,
        concat(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo,
        mun.`municipio`, tipproc.`tipo_procedencia`, uni.`siglas`,
        uni.`nombre` AS nombre_uni, al.`carrera_especialidad`, al.`matricula`,
        per.`estatus`AS status_persona, tipproc.`id_tipo_procedencia`,
        al.`id_alumno`, al.`id_municipio` AS id_municipio_fk, al.`email`,
        al.`id_universidad`, al.`id_persona`, al.`id_tipo_procedencia_fk`,
        uni.`id_universidad`, mun.`id_municipio`, mun.`id_estado_fk`,
        est.`id_estado`, est.`abrev`, est.`estado`, ss.id_alumno_fk,
       (case when ss.id_alumno_fk is null then 0 else 1 end) as flagServSoc
            from `persona` per, `tipo_procedencia` tipproc,
                 `universidades` uni, `municipios` mun, `estados` est, alumno al
             left join servicio_social ss on ss.id_alumno_fk = al.id_alumno
            WHERE per.`id_persona` = al.`id_persona`
              AND tipproc.`id_tipo_procedencia` = al.`id_tipo_procedencia_fk`
              AND al.`id_municipio` = mun.`id_municipio`
              AND mun.`id_estado_fk` = est.`id_estado`
              AND al.`id_universidad` = uni.`id_universidad`
        AND alu.`id_alumno`= ".$this->getIdAlumno();
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }


    public function queryFiltrarListaAlumnos($tipo_filtro, $valor)
    {
        //Defiunir Control de filtro
        //`al`.`carrera_especialidad`
        $filtro = "";
        switch ($tipo_filtro){
            case "1":
                //Filtro por sexo
                $filtro = " AND p.sexo = ".$valor;
                break;
            case "2":
                //Filtro por municipio
                $filtro = " AND al.id_municipio = ".$valor;
                break;
            case "3":
                //Filtro por por estatus de la cuenta (activa/inactva)
                $filtro = " AND p.estatus = ".$valor;
                break;
            case "4":
                //Filtro por por Id de iniversidad
                $filtro = " AND al.id_universidad = ".$valor;
                break;
            case "5":
                //Filtro por tipo de procedenceia
                $filtro = " AND al.tipo_procedencia = ".$valor;
                break;
            case "6":
                //Filtro por carrera
                $filtro = " AND al.carrera_especialidad = ".$valor;
                break;
            default:
                $filtro = "";
                break;
        }
        $query = "SELECT 
            al.id_alumno, p.nombre, p.app, 
            p.apm, p.telefono, p.sexo, 
            p.estatus AS estatus_p, al.id_municipio, 
            al.id_universidad, al.id_persona, 
            al.matricula, al.nombre_uni, al.carrera_especialidad, 
            al.email, al.fecha_registro, al.perfil_image, al.estatus 
            AS estatus_al, tp.id_tipo_procedencia, tp.tipo_procedencia
            FROM alumno al,persona p , tipo_procedencia tp
            WHERE al.id_persona = p.id_persona 
            AND al.id_tipo_procedencia_fk = tp.id_tipo_procedencia
            AND p.estatus = 1  ".$filtro." ORDER BY `p`.`nombre` ASC";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function queryUpdateEstatusAlumno()
    {
        $query = "UPDATE `alumno` SET 
                    `update_doc_at` = '".date('Y-m-d H:i:s')."', 
                    `estatus` = '1' 
                    WHERE `alumno`.`id_alumno` = ".$this->getIdAlumno();
        $this->connect();
        $response = $this->executeInstruction($query);
        $this->close();
        return $response;
    }

    function queryDeleteAlumno()
    {
        $query = "DELETE FROM `alumno` WHERE `alumno`.`id_alumno` =".$this->getIdAlumno();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryUpdateAlumno()
    {
        $query = "UPDATE alumno t
                        SET t.id_municipio           = ".$this->getIdMunicipio().",
                            t.id_universidad         = ".$this->getIdUniversidad().",
                            t.nombre_uni             = '".$this->getNombreUni()."',
                            t.id_tipo_procedencia_fk = ".$this->getIdProcedencia().",
                            t.carrera_especialidad   = '".$this->getCarreraEspecialidad()."',
                            t.email                  = '".$this->getEmail()."'
                        WHERE t.id_alumno = ".$this->getIdAlumno();

        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    function queryUpdatePw()
    {
        $query =    "UPDATE `alumno` 
                    SET `pw` = '".$this->getPw()."' 
                    WHERE `alumno`.`id_alumno` = ".$this->id_alumno;
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;

    }


    function queryAcountAlumno(){
            $query = "select  per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, per.`telefono`,
        concat(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo,
        per.`estatus`AS status_persona, mun.`municipio`, tipproc.`tipo_procedencia`,
       uni.`siglas`, uni.`nombre` AS nombre_uni, al.`carrera_especialidad`, al.`matricula`,
         tipproc.`id_tipo_procedencia`, al.`id_alumno`, al.`id_municipio` AS id_municipio_fk,
       al.`email`, al.`id_universidad`, al.`id_persona`, al.`id_tipo_procedencia_fk`,
       al.estatus AS estatusAlumno, al.perfil_image,
        uni.`id_universidad`, mun.`id_municipio`, mun.`id_estado_fk`,
        est.`id_estado`, est.`abrev`, est.`estado`, ss.id_alumno_fk,
        (case when ss.id_alumno_fk is null then 0 else 1 end) as flagServSoc
        from `persona` per, `tipo_procedencia` tipproc,
             `universidades` uni, `municipios` mun, `estados` est, alumno al
             left join servicio_social ss on ss.id_alumno_fk = al.id_alumno
        WHERE per.`id_persona` = al.`id_persona`
          AND tipproc.`id_tipo_procedencia` = al.`id_tipo_procedencia_fk`
          AND al.`id_municipio` = mun.`id_municipio`
          AND mun.`id_estado_fk` = est.`id_estado`
          AND al.`id_universidad` = uni.`id_universidad`
          AND al.id_alumno>0
         AND per.estatus = 1 AND al.email LIKE '".$this->getEmail()."'
        AND al.pw LIKE '".$this->getPw()."'";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    /*******************************************************************************
     * Terminan Funciones de Interfaz
     *******************************************************************************/
    function queryUpdateFotoAlumno(){
        $query = "UPDATE `alumno` SET `perfil_image` = '".$this->getPerfilImage()."' WHERE `alumno`.`id_alumno` = ".$this->getIdAlumno();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }
}