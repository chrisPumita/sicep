<?php


class CONSTANCIA_PROF
{
	private $id_constancia;
	private $id_admin_firma_fk;
	private $folio_acta_fk;
	private $sello_digital;
	private $verificada;

	/*Aspciacion*/
	private $ACTA;

    /**
     * @return mixed
     */
    public function getACTA()
    {
        return $this->ACTA;
    }

    /**
     * @param mixed $ACTA
     */
    public function setACTA($ACTA): void
    {
        $this->ACTA = $ACTA;
    }
    /**
     * @return mixed
     */
    public function getIdConstancia()
    {
        return $this->id_constancia;
    }

    /**
     * @param mixed $id_constancia
     */
    public function setIdConstancia($id_constancia): void
    {
        $this->id_constancia = $id_constancia;
    }

    /**
     * @return mixed
     */
    public function getIdAdminFirmaFk()
    {
        return $this->id_admin_firma_fk;
    }

    /**
     * @param mixed $id_admin_firma_fk
     */
    public function setIdAdminFirmaFk($id_admin_firma_fk): void
    {
        $this->id_admin_firma_fk = $id_admin_firma_fk;
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
    public function getVerificada()
    {
        return $this->verificada;
    }

    /**
     * @param mixed $verificada
     */
    public function setVerificada($verificada): void
    {
        $this->verificada = $verificada;
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
	private $fecha_creacion;
	private $estatus;
}