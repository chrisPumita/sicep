<?php

include_once "CONEXION_M.php";
class DESCUENTOS extends CONEXION_M
{
    private $id_tipo_procedencia_fk;
    private $id_curso_fk;
    private $porcentaje_desc;

    /**
     * @return mixed
     */
    public function getIdTipoProcedenciaFk()
    {
        return $this->id_tipo_procedencia_fk;
    }

    /**
     * @param mixed $id_tipo_procedencia_fk
     */
    public function setIdTipoProcedenciaFk($id_tipo_procedencia_fk): void
    {
        $this->id_tipo_procedencia_fk = $id_tipo_procedencia_fk;
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
    public function getPorcentajeDesc()
    {
        return $this->porcentaje_desc;
    }

    /**
     * @param mixed $porcentaje_desc
     */
    public function setPorcentajeDesc($porcentaje_desc): void
    {
        $this->porcentaje_desc = $porcentaje_desc;
    }

    function queryConsultaDesceuntosCurso(){
        $query = "SELECT tp.tipo_procedencia, asp.id_tipo_procedencia_fk,
       asp.id_curso_fk, FORMAT(asp.porcentaje_desc,0) AS porcentaje_desc,
       c.costo_sugerido,
       FORMAT(((c.costo_sugerido*asp.porcentaje_desc)/100),2) AS desTotal
        FROM asignacion_procedencia asp,  tipo_procedencia tp, curso c
        WHERE tp.id_tipo_procedencia = asp.id_tipo_procedencia_fk
        AND asp.id_curso_fk = c.id_curso AND c.id_curso = ".$this->getIdCursoFk();
        $this->connect();
        $horario=$this->getData($query);
        $this->close();
        return $horario;
    }
    function queryDeleteDescuento(){
        $query = "DELETE FROM `asignacion_procedencia` WHERE `asignacion_procedencia`.`id_tipo_procedencia_fk` = ".$this->getIdTipoProcedenciaFk()." 
        AND `asignacion_procedencia`.`id_curso_fk` = ".$this->getIdCursoFk();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateDescuento(){
        $query="UPDATE `asignacion_procedencia` SET `porcentaje_desc` = '".$this->getPorcentajeDesc()."' 
        WHERE `asignacion_procedencia`.`id_tipo_procedencia_fk` = ".$this->getIdTipoProcedenciaFk()." AND `asignacion_procedencia`.`id_curso_fk` = ".$this->getIdCursoFk();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryInsertDescuento(){
        $query="INSERT INTO `asignacion_procedencia` (`id_tipo_procedencia_fk`, `id_curso_fk`, `porcentaje_desc`) 
        VALUES ('".$this->getIdTipoProcedenciaFk()."', '".$this->getIdCursoFk()."', '".$this->getPorcentajeDesc()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }
}