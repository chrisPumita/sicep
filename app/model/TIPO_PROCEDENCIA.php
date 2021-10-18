<?php

include_once "CONEXION_M.php";

class TIPO_PROCEDENCIA extends CONEXION_M
{
    public $id_tipo_procede;

    /**
     * @return mixed
     */
    public function getIdTipoProcede()
    {
        return $this->id_tipo_procede;
    }

    /**
     * @param mixed $id_tipo_procede
     */
    public function setIdTipoProcede($id_tipo_procede): void
    {
        $this->id_tipo_procede = $id_tipo_procede;
    }
    public $tipo_procedencia;

    /**
     * @return mixed
     */
    public function getTipoProcedencia()
    {
        return $this->tipo_procedencia;
    }

    /**
     * @param mixed $tipo_procedencia
     */
    public function setTipoProcedencia($tipo_procedencia): void
    {
        $this->tipo_procedencia = $tipo_procedencia;
    }

    /********************************************************************************
     *                                     Funciones CRUD
     * ******************************************************************************/
    function consultaTiposProcedencia()
    {
        include_once "CONEXION_M.php";
        $query = "SELECT * FROM tipo_procedencia ORDER BY tipo_procedencia ASC";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    function editarTipoProcedencia(){
        include_once "CONEXION_M.php";
        $sql = "UPDATE tipo_procedencia SET tipo_procedencia = ". $this->getTipoProcedencia()." 
        WHERE id_tipo_procede =". $this->getIdTipoProcede();
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }


    function crearTipoProcedencia(){
        include_once "CONEXION_M.php";
        $query="INSERT INTO tipo_procedencia (
                id_procedencia,
                tipo_procedencia) VALUE(NULL,'".$this->getTipoProcedencia()."')";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function eliminarTipoProcedencia()
    {
        include_once "CONEXION_M.php";
        $sql = "DELETE FROM `tipo_procedencia` WHERE `id_tipo_procedencia`=".$this->getIdTipoProcede();

        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }
    /********************************************************************************
     *                                  END  Funciones CRUD
     * ******************************************************************************/

    function consultaProcedenciasAsig($idAsig){
        $sql = "SELECT TP.id_tipo_procedencia, TP.tipo_procedencia, AP.porcentaje_desc,AP.costo_final 
                FROM tipo_procedencia TP, asignacion_procedencia AP 
                WHERE TP.id_tipo_procedencia = AP.id_tipo_procedencia_fk 
                AND AP.id_asignacion_fk = ".$idAsig." 
                ORDER BY TP.tipo_procedencia ASC";
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }
    function consultaProcedencias(){
        $sql = "SELECT TP.id_tipo_procedencia, TP.tipo_procedencia 
                FROM tipo_procedencia TP
                ORDER BY TP.tipo_procedencia ASC";
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }
    function asignaProcAsig(){
        //INSERT INTO `asignacion_procedencia` (
        //`id_tipo_procedencia_fk`,
        // `id_asignacion_fk`,
        // `porcentaje_desc`,
        // `costo_final`)
        // VALUES ('1', '2', '50', '500'), ('2', '2', '0', '1000');
    }


}