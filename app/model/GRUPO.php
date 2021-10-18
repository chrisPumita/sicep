<?php

include_once "I_GRUPO.php";
include_once "CONEXION_M.php";

class GRUPO extends CONEXION_M implements I_GRUPO
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

    public  function consultaGrupos($id_curso)
    {
        $query = "SELECT `id_curso`, `id_profesor_admin_acredita`, `id_profesor_autor`, `codigo`, `nombre_curso`, 
       `dirigido_a`, `objetivo`, `descripcion`, `no_sesiones`, `antecedentes`, `aprobado`, `costo_sugerido`, 
       `link_temario_pdf`, `fecha_creacion`, `fecha_acreditacion`, `banner_img`, `tipo_curso` FROM `curso` WHERE 1";
    }
}