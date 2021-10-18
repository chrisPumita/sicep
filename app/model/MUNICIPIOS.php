<?php


class MUNICIPIOS
{
	private $id_municipio;
	private $id_estado_fk;
	private $clave;

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
    public function getIdEstadoFk()
    {
        return $this->id_estado_fk;
    }

    /**
     * @param mixed $id_estado_fk
     */
    public function setIdEstadoFk($id_estado_fk): void
    {
        $this->id_estado_fk = $id_estado_fk;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     */
    public function setClave($clave): void
    {
        $this->clave = $clave;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio): void
    {
        $this->municipio = $municipio;
    }
	private $municipio;
}