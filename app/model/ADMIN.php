<?php
    include("PROFESOR.php");
    include "I_admin.php";

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
    public function getListaAdministradores($estatus_admin)
    {
        //CASE TODO
        $filtro = $estatus_admin > 0 ? " AND admin
        .`estatus`=" . $estatus_admin : "";
        $this->connect();
        $datos = $this-> getData("SELECT 
        per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, 
        per.`telefono`, per.`sexo`, per.`estatus` AS estatus_persona, 
        prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`, 
        prof.`email`, prof.`key_hash`, prof.`fecha_registro`, 
        prof.`firma_digital`, prof.`firma_digital_img`, 
        prof.`estatus` AS estatus_profesor, admin.`cargo`, 
        admin.`permisos`, admin.`estatus` AS estatus_admin, 
        depto.`id_depto`, depto.`nombre` AS depto_name 
        FROM `administrador` admin,`profesor` prof, `persona` per,
        `departamentos` depto 
        WHERE admin.`id_profesor_admin_fk`=prof.`id_profesor` 
        AND prof.`id_persona_fk`=per.`id_persona` 
        AND per.`estatus` = 1 
        AND prof.`id_depto_fk`= depto.`id_depto`".$filtro." 
        ORDER BY `per`.`app`,`per`.`apm`,`per`.`nombre` ASC");
        $this->close();
        return $datos;
    }

    public function updateStatusAdmin($admin,$estatus)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $response = $this->executeInstruction("UPDATE `administrador` 
        SET `administrador`.`estatus`= '$estatus' ".$filtro);
        $this->close();
        return $response;
    }

    public function deleteAdmin($admin)
    {
        $filtro = $admin > 0 ? " WHERE `administrador`.`id_profesor_admin_fk`=" . $admin : "";
        $this->connect();
        $datos = $this-> getData("DELETE * FROM `administrador`".$filtro);
        $this->close();
        return $datos;
    }
//Busca una cuenta de un profesor que sea administrador
    public function buscaCuentaAdmin($id_profesor_admin)
    {
        $sql = "SELECT `id_profesor_admin_fk`, `cargo`, `permisos`, 
        `clave_confirmacion`, `estatus` 
        FROM `administrador` 
        WHERE `id_profesor_admin_fk` = '".$id_profesor_admin."' ";
        $this->connect();
        $datos = $this-> getData($sql);
        $this->close();
        return $datos;
    }
    function  actualiza_cuenta($idAdmin,$cargo,$permisosA){
        $sql = "UPDATE `administrador` SET `cargo`='".$cargo."' , `permisos`='".$permisosA."' WHERE `id_profesor_admin_fk`=".$idAdmin;
        $this->connect();
        $datos = $this->executeInstruction($sql);
        $this->close();
        return $datos;
    }
}