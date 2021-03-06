<?php

include_once "CONEXION_M.php";
class VALIDACION_INSCRIPCION extends CONEXION_M
{
    private $id_inscripcion_fk;
    private $id_profesor_admin_fk;
    private $fecha_pago;
    private $monto_pago_realizado;
    private $descripcion;
    private $nota;

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
    public function getIdProfesorAdminFk()
    {
        return $this->id_profesor_admin_fk;
    }

    /**
     * @param mixed $id_profesor_admin_fk
     */
    public function setIdProfesorAdminFk($id_profesor_admin_fk): void
    {
        $this->id_profesor_admin_fk = $id_profesor_admin_fk;
    }

    /**
     * @return mixed
     */
    public function getFechaPago()
    {
        return $this->fecha_pago;
    }

    /**
     * @param mixed $fecha_pago
     */
    public function setFechaPago($fecha_pago): void
    {
        $this->fecha_pago = $fecha_pago;
    }

    /**
     * @return mixed
     */
    public function getMontoPagoRealizado()
    {
        return $this->monto_pago_realizado;
    }

    /**
     * @param mixed $monto_pago_realizado
     */
    public function setMontoPagoRealizado($monto_pago_realizado): void
    {
        $this->monto_pago_realizado = $monto_pago_realizado;
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
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota): void
    {
        $this->nota = $nota;
    }

    //Llamado de control de verificacion
    function queryValidaInscripcion(){
        $sql = "INSERT INTO `validacion_inscripcion` (
            `id_inscripcion_fk`, `id_profesor_admin_fk`, `fecha_validacion`, `fecha_pago`, `monto_pago_realizado`, `descripcion`, `notas`) 
                VALUES ('".$this->getIdInscripcionFk()."', '".$this->getIdProfesorAdminFk()."', 
                CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '".$this->getMontoPagoRealizado()."', '".$this->getDescripcion()."', '".$this->getNota()."')";
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    function queryFichaValidacion(){
        $sql = "SELECT per.`id_persona`,
               per.`nombre`, per.`app`, per.`apm`,
               per.`telefono`, per.`sexo`, per.`estatus` AS estatus_persona,
               prof.img_perfil, prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`,
               prof.`email`, prof.`fecha_registro`, prof.`estatus` AS estatus_profesor,
               concat(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo,
               depto.`nombre` AS depto_name, prof.`id_profesor`, prof.`no_trabajador`, prof.`prefijo`,
               prof.`email`, prof.`fecha_registro`,  prof.`estatus` AS estatus_profesor,
               vi.id_inscripcion_fk, vi.fecha_validacion, vi.fecha_pago, vi.monto_pago_realizado,
               vi.descripcion, vi.notas
        FROM `persona` per,`departamentos` depto,`profesor` prof, validacion_inscripcion vi,
             administrador admin
        WHERE  prof.`id_persona_fk`=per.`id_persona`
          AND prof.`id_depto_fk`= depto.`id_depto`
        AND  admin.id_profesor_admin_fk = prof.id_profesor
        AND vi.id_profesor_admin_fk = admin.id_profesor_admin_fk
        AND vi.id_inscripcion_fk = ".$this->getIdInscripcionFk();
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

}