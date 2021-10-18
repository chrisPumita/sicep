<?php

include_once "PERSONA.php";
include_once "I_PROFESOR.php";
class PROFESOR extends PERSONA implements I_PROFESOR
{
    private $id_profesor;
    private $id_persona_fk;
    private $id_depto_fk;
    private $nombre_departamento;
    private $no_trabajador;
    private $prefijo;
    private $email;
    private $pw;
    private $key_hash;
    private $fecha_registro;
    private $firma_digital;
    private $firma_digital_img;
    private $estatus_profesor;

    /*******************************************************************************
     * Inician Getters and Setters
     *******************************************************************************/

    /**
     * @return mixed
     */
    public function getIdProfesor()
    {
        return $this->id_profesor;
    }

    /**
     * @param mixed $id_profesor
     */
    public function setIdProfesor($id_profesor): void
    {
        $this->id_profesor = $id_profesor;
    }

    /**
     * @return mixed
     */
    public function getIdDeptoFk()
    {
        return $this->id_depto_fk;
    }

    /**
     * @param mixed $id_depto_fk
     */
    public function setIdDeptoFk($id_depto_fk): void
    {
        $this->id_depto_fk = $id_depto_fk;
    }

    /**
     * @return mixed
     */
    public function getNombreDepartamento()
    {
        return $this->nombre_departamento;
    }

    /**
     * @param mixed $nombre_departamento
     */
    public function setNombreDepartamento($nombre_departamento): void
    {
        $this->nombre_departamento = $nombre_departamento;
    }

    /**
     * @return mixed
     */
    public function getNoTrabajador()
    {
        return $this->no_trabajador;
    }

    /**
     * @param mixed $no_trabajador
     */
    public function setNoTrabajador($no_trabajador): void
    {
        $this->no_trabajador = $no_trabajador;
    }

    /**
     * @return mixed
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * @param mixed $prefijo
     */
    public function setPrefijo($prefijo): void
    {
        $this->prefijo = $prefijo;
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
    public function getKeyHash()
    {
        return $this->key_hash;
    }

    /**
     * @param mixed $key_hash
     */
    public function setKeyHash($key_hash): void
    {
        $this->key_hash = $key_hash;
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
    public function getFirmaDigital()
    {
        return $this->firma_digital;
    }

    /**
     * @param mixed $firma_digital
     */
    public function setFirmaDigital($firma_digital): void
    {
        $this->firma_digital = $firma_digital;
    }

    /**
     * @return mixed
     */
    public function getFirmaDigitalImg()
    {
        return $this->firma_digital_img;
    }

    /**
     * @param mixed $firma_digital_img
     */
    public function setFirmaDigitalImg($firma_digital_img): void
    {
        $this->firma_digital_img = $firma_digital_img;
    }

    /**
     * @return mixed
     */
    public function getEstatusProfesor()
    {
        return $this->estatus_profesor;
    }

    /**
     * @param mixed $estatus_profesor
     */
    public function setEstatusProfesor($estatus_profesor): void
    {
        $this->estatus_profesor = $estatus_profesor;
    }

    /*******************************************************************************
     * Terminan Getters and Setters
     *******************************************************************************/

    /*******************************************************************************
     * Inician Funciones de Interfaz
     *******************************************************************************/
   function ListaProfesoresA($filtro){
       switch ($filtro){
           case "1":
               $condicion=" AND prof.`estatus`=1 ";
               break;
           case "2":
               $condicion=" AND prof.`estatus`=0 ";
               break;
           default:
               $condicion="";
               break;
       }
       $query = "SELECT per.`id_persona`, 
        per.`nombre`, per.`app`, per.`apm`, 
        per.`telefono`, per.`sexo`, per.`estatus` AS estatus_persona, 
        prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`, 
        prof.`email`, prof.`key_hash`, prof.`fecha_registro`, 
        prof.`firma_digital`, prof.`firma_digital_img`, 
        prof.`estatus` AS estatus_profesor, 
        depto.`id_depto`, depto.`nombre` AS depto_name,
        prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`, 
        prof.`email`, prof.`key_hash`, prof.`fecha_registro`, 
        prof.`firma_digital`, prof.`firma_digital_img`, 
        prof.`estatus` AS estatus_profesor,
        CASE WHEN admin.id_profesor_admin_fk IS NULL THEN 0
    	ELSE admin.id_profesor_admin_fk
        END AS admin
        FROM  `persona` per,`departamentos` depto,`profesor` prof 
        LEFT JOIN administrador admin ON  prof.id_profesor =admin.`id_profesor_admin_fk`
        WHERE prof.`id_persona_fk`=per.`id_persona` 
        AND per.`estatus` = 1
        AND prof.`id_depto_fk`= depto.`id_depto`
        ".$condicion."
        ORDER BY `per`.`app`,`per`.`apm`,`per`.`nombre` ASC";
       $this->connect();
       $datos = $this-> getData($query);
       $this->close();
       return $datos;
   }


    public function getListaProfesoresNoAdmin()
    {
        $query = "SELECT DISTINCT per.`id_persona`, per.`nombre`, 
        per.`app`, per.`apm`, per.`telefono`, 
        per.`estatus` AS estatus_persona, prof.`id_profesor`, 
        prof.`no_trabajador`, prof.`prefijo`, prof.`email`, 
        prof.`fecha_registro`, prof.`estatus` AS estatus_profesor, 
        depto.`id_depto`, depto.`nombre` AS depto_name 
        FROM `profesor` prof, `persona` per,`departamentos` depto 
        WHERE per.`id_persona` = prof.`id_persona_fk` 
        AND prof.`estatus` = 1 AND per.`estatus`=1 
        AND depto.`id_depto`= prof.`id_depto_fk` 
        AND prof.`id_profesor` NOT IN 
            (SELECT admin.`id_profesor_admin_fk` 
            FROM `administrador` admin) 
        ORDER BY `per`.`app`,`per`.`apm`,`per`.`nombre` ASC";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function updateEstatusProf($id_profesor, $estatus)
    {
        $filtro = $id_profesor > 0 ? " WHERE `profesor`.`id_profesor`=" . $id_profesor : "";
        $this->connect();
        $datos = $this-> executeInstruction("UPDATE `profesor` 
                                                SET `profesor`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $datos;
    }

    function consultaProfesor($id_profesor)
    {
        $query="SELECT per.`id_persona`, 
        per.`nombre`, per.`app`, per.`apm`, 
        per.`telefono`, per.`sexo`, 
        per.`estatus` AS estatus_persona, 
        prof.`id_profesor`, prof.`no_trabajador`, 
        prof.`prefijo`, prof.`email`, prof.`key_hash`, 
        prof.`fecha_registro`, prof.`firma_digital`, 
        prof.`firma_digital_img`, 
        prof.`estatus` AS estatus_profesor, 
        depto.`id_depto`, depto.`nombre` AS depto_name 
        FROM `profesor` prof, `persona` per,`departamentos` depto 
        WHERE prof.`id_persona_fk`=per.`id_persona` 
        AND per.`estatus` = 1
        AND prof.`id_depto_fk`= depto.`id_depto` 
        AND prof.id_profesor =".$id_profesor." 
        ORDER BY `per`.`app`,`per`.`apm`,`per`.`nombre` ASC";
        $this->connect();
        $datos = $this-> getData($query);
        $this->close();
        return $datos;
    }

    function agregaProfesor()
    {
        date_default_timezone_set("America/Mexico_City");
        $query = "INSERT INTO `profesor`
        (`id_profesor`, `id_persona_fk`, `id_depto_fk`, `no_trabajador`, 
        `prefijo`, `email`, `pw`, `key_hash`, `fecha_registro`, 
        `firma_digital`, `firma_digital_img`, `estatus`) 
        VALUES (NULL,'".$this->getIdPersona()."','".$this->getIdDeptoFk()."',
        '".$this->getNoTrabajador()."','".$this->getPrefijo()."',
        '".$this->getEmail()."','".$this->getPw()."','".$this->getKeyHash()."',
        '".date('Y-m-d H:i:s')."','".$this->getFirmaDigital()."',
        '".$this->getFirmaDigitalImg()."','1')";
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function modificaProfesor()
    {
        $query="UPDATE `profesor` 
        SET 
        `id_depto_fk`='".$this->getIdDeptoFk()."',
        `no_trabajador`='".$this->getNoTrabajador()."',
        `prefijo`='".$this->getPrefijo()."',
        `email`='".$this->getEmail()."' 
        WHERE `id_profesor`=".$this->getIdProfesor();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function modifcaPw($id_profesor,$pw)
    {
        $query="UPDATE `profesor` 
        SET `pw`='".$pw."' 
        WHERE `id_profesor`=".$id_profesor;
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function eliminaProfesor($id_profesor)
    {
        $query="UPDATE profesor 
        SET profesor.estatus=0 
        WHERE profesor.id_profesor=".$id_profesor;
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function creaFirmaDigital()
    {
        // TODO: Implement creaFirmaDigital() method.
    }

    function cargaFirmaImagen()
    {
        // TODO: Implement cargaFirmaImagen() method.
    }
    /*******************************************************************************
     * Terminan Funciones de Interfaz
     *******************************************************************************/
}