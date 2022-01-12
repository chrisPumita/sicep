<?php
    include("PROFESOR.php");
    include "interface/I_admin.php";

class ADMIN extends PROFESOR implements I_admin
{

    private $cargo;
    private $permisos;
    private $clave_confirmacion;
    private $estatus_admin;

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getPermisos()
    {
        return $this->permisos;
    }

    /**
     * @param mixed $permisos
     */
    public function setPermisos($permisos)
    {
        $this->permisos = $permisos;
    }

    /**
     * @return mixed
     */
    public function getClaveConfirmacion()
    {
        return $this->clave_confirmacion;
    }

    /**
     * @param mixed $clave_confirmacion
     */
    public function setClaveConfirmacion($clave_confirmacion)
    {
        $this->clave_confirmacion = $clave_confirmacion;
    }

    /**
     * @return mixed
     */
    public function getEstatusAdmin()
    {
        return $this->estatus_admin;
    }

    /**
     * @param mixed $estatus_admin
     */
    public function setEstatusAdmin($estatus_admin)
    {
        $this->estatus_admin = $estatus_admin;
    }


///+++++++++++++ FUNCIONES PROPIAS DE LA CLASE ADMINISTRADOR ++++++++++++++++++///
    public function queryListaAdministradores()
    {
        $query = "SELECT 
        per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, 
       concat(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo,
        per.`telefono`, per.`sexo`, prof.img_perfil,
        prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`, 
        prof.`email`, prof.`fecha_registro`,
        prof.`estatus` AS estatus_profesor, admin.`cargo`, 
        admin.`permisos`, admin.`estatus` AS estatus_admin, 
        depto.`id_depto`, depto.`nombre` AS depto_name 
        FROM `administrador` admin,`profesor` prof, `persona` per,
        `departamentos` depto 
        WHERE admin.`id_profesor_admin_fk`=prof.`id_profesor` 
        AND prof.`id_persona_fk`=per.`id_persona` 
        AND per.`estatus` = 1 
        AND prof.`id_depto_fk`= depto.`id_depto`
        ORDER BY `per`.`nombre`,`per`.`app`,`per`.`apm` ASC";
       $this->connect();
       $datos = $this-> getData($query);
       $this->close();
       return $datos;
    }

    public function queryUpdateStatusAdmin($admin,$estatus)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $response = $this->executeInstruction("UPDATE `administrador` 
        SET `administrador`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $response;
    }

    public function queryDeleteAdmin($admin)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $datos = $this-> getData("DELETE * FROM `administrador`".$filtro);
        $this->close();
        return $datos;
    }

    function  queryUpdateAccount($idAdmin,$cargo,$permisosA){
        $sql = "UPDATE `administrador` SET `cargo`='".$cargo."' , `permisos`='".$permisosA."' WHERE `id_profesor_admin_fk`=".$idAdmin;
        $this->connect();
        $datos = $this->executeInstruction($sql);
        $this->close();
        return $datos;
    }

    public function queryBuscaCuentaAdmin()
    {
        $sql = "SELECT `id_profesor_admin_fk`, `cargo`, `permisos`, 
        `clave_confirmacion`, `estatus` 
        FROM `administrador` 
        WHERE `id_profesor_admin_fk` = '".$this->getIdProfesor()."' ";
        $this->connect();
        $datos = $this-> getData($sql);
        $this->close();
        return $datos;
    }
}