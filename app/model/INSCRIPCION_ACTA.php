<?php
include ("INSCRIPCION.php");

class INSCRIPCION_ACTA extends INSCRIPCION
{
    private $id_inscripcion_acta;
    private $folio_acta_fk;
    private $fecha_incorpora;
    private $calificacion;


    /**
     * @return mixed
     */
    public function getIdInscripcionActa()
    {
        return $this->id_inscripcion_acta;
    }

    /**
     * @param mixed $id_inscripcion_acta
     */
    public function setIdInscripcionActa($id_inscripcion_acta): void
    {
        $this->id_inscripcion_acta = $id_inscripcion_acta;
    }

    /**
     * @return mixed
     */
    public function getFolioActaFk()
    {
        return $this->folio_acta_fk;
    }

    /**
     * @param mixed $folio_acta_fk
     */
    public function setFolioActaFk($folio_acta_fk): void
    {
        $this->folio_acta_fk = $folio_acta_fk;
    }

    /**
     * @return mixed
     */
    public function getFechaIncorpora()
    {
        return $this->fecha_incorpora;
    }

    /**
     * @param mixed $fecha_incorpora
     */
    public function setFechaIncorpora($fecha_incorpora): void
    {
        $this->fecha_incorpora = $fecha_incorpora;
    }

    /**
     * @return mixed
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * @param mixed $calificacion
     */
    public function setCalificacion($calificacion): void
    {
        $this->calificacion = $calificacion;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus): void
    {
        $this->estatus = $estatus;
    }
    private $estatus;
}