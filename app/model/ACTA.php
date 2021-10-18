<?php


class ACTA
{
	private $folio;
	private $id_asignacion_fk;
	private $fecha_creacion;
	private $sello_digital;
    private $acreditacion;
    private $estatus;

	/*Dependencia de uso*/
    private $GRUPO_ASIGNACION;

    /*COMPOSICION  1 ------- 1*   */
    private $lista_INSCRIPCIONES_ACTA;

    /**
     * @return mixed
     */
    public function getListaINSCRIPCIONESACTA()
    {
        return $this->lista_INSCRIPCIONES_ACTA;
    }

    /**
     * @param mixed $lista_INSCRIPCIONES_ACTA
     */
    public function setListaINSCRIPCIONESACTA($lista_INSCRIPCIONES_ACTA): void
    {
        $this->lista_INSCRIPCIONES_ACTA = $lista_INSCRIPCIONES_ACTA;
    }

    /**
     * @return mixed
     */
    public function getGRUPOASIGNACION()
    {
        return $this->GRUPO_ASIGNACION;
    }

    /**
     * @param mixed $GRUPO_ASIGNACION
     */
    public function setGRUPOASIGNACION($GRUPO_ASIGNACION): void
    {
        $this->GRUPO_ASIGNACION = $GRUPO_ASIGNACION;
    }
    /**
     * @return mixed
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * @param mixed $folio
     */
    public function setFolio($folio): void
    {
        $this->folio = $folio;
    }

    /**
     * @return mixed
     */
    public function getIdAsignacionFk()
    {
        return $this->id_asignacion_fk;
    }

    /**
     * @param mixed $id_asignacion_fk
     */
    public function setIdAsignacionFk($id_asignacion_fk): void
    {
        $this->id_asignacion_fk = $id_asignacion_fk;
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
    public function getSelloDigital()
    {
        return $this->sello_digital;
    }

    /**
     * @param mixed $sello_digital
     */
    public function setSelloDigital($sello_digital): void
    {
        $this->sello_digital = $sello_digital;
    }

    /**
     * @return mixed
     */
    public function getAcreditacion()
    {
        return $this->acreditacion;
    }

    /**
     * @param mixed $acreditacion
     */
    public function setAcreditacion($acreditacion): void
    {
        $this->acreditacion = $acreditacion;
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

}