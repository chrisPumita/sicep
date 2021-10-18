<?php

include_once "PERSONA.php";
include_once "I_ALUMNO.php";
class ALUMNO extends  PERSONA implements I_ALUMNO
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

    /*******************************************************************************
     * Inician Getters and Setters
     *******************************************************************************/
    //Asociacion
    private $cuenta_SERVICIO_SOCIAL;

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

    public function consultarListaAlumnos($edoFiltro,$idAlumno)
    {
        $filtro = $edoFiltro > 0 ? " AND per.`estatus` = ".$edoFiltro : "";
        $filtroIdAlumno = $idAlumno >= 0 ? " AND al.`id_alumno` = ".$idAlumno : "";
        $query = "SELECT al.`id_alumno`, al.`id_municipio`, mun.`id_estado_fk`, mun.`municipio`,
        al.`matricula`, al.`id_persona`, al.`carrera_especialidad`, 
        al.`email`, al.`estatus` AS estatus_alumno, per.`id_persona`, 
        per.`nombre`, per.`app`, per.`apm`, per.`telefono`, 
        per.`estatus` AS estatus_persona, per.`sexo`,tipproc.`id_tipo_procedencia`, 
        tipproc.`tipo_procedencia` AS nameproc FROM `alumno` al, 
       `persona` per , `tipo_procedencia` tipproc , `municipios` mun
        WHERE al.`id_persona` = per.`id_persona` 
        AND al.`id_municipio` = mun.`id_municipio`
        AND al.`id_tipo_procedencia_fk`= tipproc.`id_tipo_procedencia` 
        ".$filtro." ".$filtroIdAlumno."
        ORDER BY per.`app`, per.`apm`,per.`nombre` ASC";
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }



    function agregaAlumno()
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
            .date('Y-m-d H:i:s')."', '', '"
            .$this->getEstatusAlumno()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function consultaAlumno($id_alumno)
    {
        $query = "SELECT per.`id_persona`, per.`nombre` AS nombre_alumno, 
        per.`app`, per.`apm`, alu.`email`, per.`telefono`, est.`estado`, 
        mun.`municipio`, tipproc.`tipo_procedencia`, uni.`siglas`, 
        uni.`nombre` AS nombre_uni, alu.`carrera_especialidad`, alu.`matricula`, 
        per.`estatus`AS status_persona, tipproc.`id_tipo_procedencia`, 
        alu.`id_alumno`, alu.`id_municipio` AS id_municipio_fk, 
        alu.`id_universidad`, alu.`id_persona`, alu.`id_tipo_procedencia_fk`, 
        uni.`id_universidad`, mun.`id_municipio`, mun.`id_estado_fk`, 
        est.`id_estado`, est.`abrev` 
        FROM `persona` per, `tipo_procedencia` tipproc, `alumno` alu, 
        `universidades` uni, `municipios` mun, `estados` est 
        WHERE per.`id_persona` = alu.`id_persona` 
        AND tipproc.`id_tipo_procedencia` = alu.`id_tipo_procedencia_fk` 
        AND alu.`id_municipio` = mun.`id_municipio` 
        AND mun.`id_estado_fk` = est.`id_estado` 
        AND alu.`id_universidad` = uni.`id_universidad`
        AND alu.`id_alumno`= ".$id_alumno;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }


    public function filtrarListaAlumnos($tipo_filtro, $valor)
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

    function updateEstatusAlumno($id_alumno, $estatus)
    {
        $filtro = $id_alumno > 0 ? " WHERE `alumno`.`id_alumno`=" . $id_alumno : "";
        $query = "UPDATE `alumno` SET `alumno`.`estatus` = '$estatus' ".$filtro;
        $this->connect();
        $response = $this->executeInstruction($query);
        $this->close();
        return $response;
    }

    function modificaAlumno()
    {
        $query = "";
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    function modifcaPw($id_alumn,$pwd)
    {
        $query =    "UPDATE `alumno` 
                    SET `pw` = '".$pwd."' 
                    WHERE `alumno`.`id_alumno` = ".$this->id_alumno;
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;

    }

    function eliminaAlumno($id_alumno)
    {
        $query = "DELETE FROM `alumno` WHERE `alumno`.`id_alumno` =".$id_alumno;
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

    function consultaCuentaServSoc($id_alumn)
    {
        include_once "SERVICIO_SOCIAL.php";
        $obj_serv = new SERVICIO_SOCIAL();
        $obj_serv->setIdAlumno($this->getIdAlumno());
        return $obj_serv->consultaCuenta();
    }
    /****************************************************
     *
     *          P E N D I E N T E
     *
     *  CREAR CUENTA SERVICIO SOCIAL
     *
     * **************************************************/
    function crearCuentaServSoc()
    {
        include_once "../model/SERVICIO_SOCIAL.php";
        $objServSoc = new SERVICIO_SOCIAL();
        $query = "INSERT INTO `servicio_social` (
                               `id_alumno`, 
                               `clave_acceso`, 
                               `fecha_alta`, 
                               `fecha_inicio_serv`, 
                               `fecha_termino_serv`, 
                               `notas`, 
                               `permisos`, 
                               `estatus`) 
                               VALUES ('".$objServSoc->getIdAlumno($this->getIdAlumno())."', 
                               '".$objServSoc->getClaveAcceso()."', 
                               '".date('Y-m-d H:i:s')."', 
                               '".$objServSoc->getFechaInicioServ()."', 
                               '".$objServSoc->getFechaTerminoServ()."', 
                               '".$objServSoc->getNotas()."', 
                               '".$objServSoc->getPermisos()."', 
                               '".$objServSoc->getEstatus()."')";

    }
    /****************************************************
     *
     *          P E N D I E N T E
     *
     *  CREAR CUENTA SERVICIO SOCIAL
     *
     * **************************************************/
    function modificarCuentaServSoc()
    {
        // TODO: Implement modificarCuentaServSoc() method.
    }

    function terminarServSoc()
    {
        // TODO: Implement terminarServSoc() method.
    }

    function cambiarClaveServSoc()
    {
        // TODO: Implement cambiarClaveServSoc() method.
    }

    /*******************************************************************************
     * Terminan Funciones de Interfaz
     *******************************************************************************/

}