<?php

include_once "interface/I_GRUPO.php";
include_once "../model/CONEXION_M.php";
class GROUPS extends CONEXION_M implements I_GRUPO
{
private $id_grupo;
private $id_curso_fk;
private $grupo;
private $estatus;

    /**
     * @return mixed
     */
    public function getIdGrupo()
    {
        return $this->id_grupo;
    }

    /**
     * @param mixed $id_grupo
     */
    public function setIdGrupo($id_grupo): void
    {
        $this->id_grupo = $id_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdCursoFk()
    {
        return $this->id_curso_fk;
    }

    /**
     * @param mixed $id_curso_fk
     */
    public function setIdCursoFk($id_curso_fk): void
    {
        $this->id_curso_fk = $id_curso_fk;
    }

    /**
     * @return mixed
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * @param mixed $grupo
     */
    public function setGrupo($grupo): void
    {
        $this->grupo = $grupo;
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

    //// Implemtacion de la interface

    public  function crearGrupo()
    {
        $query = "INSERT INTO `grupo` (`id_grupo`, `id_curso_fk`, `grupo`, `estatus`) 
                    VALUES (NULL, '".$this->getIdCursoFk()."', '".$this->getGrupo()."', '".$this->getEstatus()."')";

    }

    public  function modificaGrupo()
    {
        // TODO: Implement modificaGrupo() method.
    }

    public  function eliminaGrupo($id_grupo)
    {
        // TODO: Implement eliminaGrupo() method.
    }

    public  function consultaListaGrupos($id_curso)
    {
        $query = "select g.id_grupo , g.grupo, g.estatus from grupo g where g.id_curso_fk = ".$id_curso;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }
}