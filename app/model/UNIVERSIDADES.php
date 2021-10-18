<?php


class UNIVERSIDADES
{
	private $id_universidad;
	private $nombre;
    private $siglas;

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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * @param mixed $siglas
     */
    public function setSiglas($siglas): void
    {
        $this->siglas = $siglas;
    }

}