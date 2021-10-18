<?php

include_once "CONEXION_M.php";
class VALIDACION_INSCRIPCION extends CONEXION_M
{
    private $id_inscripcion_fk;
    private $id_profesor_admin_fk;
    private $fecha_validacion;
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
    public function getFechaValidacion()
    {
        return $this->fecha_validacion;
    }

    /**
     * @param mixed $fecha_validacion
     */
    public function setFechaValidacion($fecha_validacion): void
    {
        $this->fecha_validacion = $fecha_validacion;
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
    function validaInscripcion($id_inscripcion,$id_admin){
        $sql = "INSERT INTO `validacion_inscripcion` (
        `id_inscripcion_fk`, `id_profesor_admin_fk`, `fecha_validacion`, `fecha_pago`, `monto_pago_realizado`, `descripcion`, `notas`) 
        VALUES (
        '".$id_inscripcion."', '".$id_admin."', '".date('Y-m-d H:i:s')."', '".$this->getFechaPago()."', 
        '".$this->getMontoPagoRealizado()."', '".$this->getDescripcion()."', '".$this->getNota()."');";
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

}