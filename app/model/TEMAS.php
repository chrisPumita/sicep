<?php


class TEMAS extends CONEXION_M
{

private $id_tema;
private $id_curso_fk;
private $indice;
private $nombre;
private $resumen;

    /**
     * @return mixed
     */
    public function getIdTema()
    {
        return $this->id_tema;
    }

    /**
     * @param mixed $id_tema
     */
    public function setIdTema($id_tema): void
    {
        $this->id_tema = $id_tema;
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
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * @param mixed $indice
     */
    public function setIndice($indice): void
    {
        $this->indice = $indice;
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
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * @param mixed $resumen
     */
    public function setResumen($resumen): void
    {
        $this->resumen = $resumen;
    }

    public function consultaTemas($id_curso_fk)
    {
        $query = "SELECT * FROM `temas` 
                    WHERE `id_curso_fk` = ".$id_curso_fk." 
                    ORDER BY `temas`.`id_tema` ASC";
        $this->connect();
        $temas = $this-> getData($query);
        $this->close();
        return $temas;
    }
    function agregaTema()
    {
        $query = "INSERT INTO `temas` (
                     `id_tema`, 
                     `id_curso_fk`, 
                     `indice`, 
                     `nombre`, 
                     `resumen`) 
            VALUES (NULL, '".$this->getIdCursoFk()."', 
                    '".$this->getIndice()."',
                    '".$this->getNombre()."', 
                    '".$this->getResumen()."')";
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }
    function quitarTema($idTema)
    {
        $query = "DELETE FROM `temas` WHERE `temas`.`id_tema` = ".$idTema;
        $this->connect();
        $this->executeInstruction($query);
        $this->close();
        return true;
    }


    //eliminar el obj de que no llega por parametro
    function actualizaTema()
    {
        $query =    "UPDATE `temas` 
                    SET `indice` = '".$this->getIndice()."', 
                        `nombre` = '".$this->getNombre()."', 
                        `resumen` = '".$this->getResumen()."' 
                    WHERE `temas`.`id_tema` = ".$this->getIdTema();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

}