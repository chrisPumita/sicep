<?php
include ("CONEXION_M.php");
include_once "I_DOCUMENTOS.php";

class DOCUMENTO extends CONEXION_M implements I_DOCUMENTOS
{
    private $id_documento;
    private $nombre_doc;
    private $formato_admitido;
    private $tipo;
    private $peso_max_mb;
    private $estatus_documento;

    /**
     * @return mixed
     */
    public function getEstatusDocumento()
    {
        return $this->estatus_documento;
    }

    /**
     * @param mixed $estatus_documento
     */
    public function setEstatusDocumento($estatus_documento): void
    {
        $this->estatus_documento = $estatus_documento;
    }
    /**
     * @return mixed
     */
    public function getIdDocumento()
    {
        return $this->id_documento;
    }

    /**
     * @param mixed $id_documento
     */
    public function setIdDocumento($id_documento): void
    {
        $this->id_documento = $id_documento;
    }

    /**
     * @return mixed
     */
    public function getNombreDoc()
    {
        return $this->nombre_doc;
    }

    /**
     * @param mixed $nombre_doc
     */
    public function setNombreDoc($nombre_doc): void
    {
        $this->nombre_doc = $nombre_doc;
    }

    /**
     * @return mixed
     */
    public function getFormatoAdmitido()
    {
        return $this->formato_admitido;
    }

    /**
     * @param mixed $formato_admitido
     */
    public function setFormatoAdmitido($formato_admitido): void
    {
        $this->formato_admitido = $formato_admitido;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getPesoMaxMb()
    {
        return $this->peso_max_mb;
    }

    /**
     * @param mixed $peso_max_mb
     */
    public function setPesoMaxMb($peso_max_mb): void
    {
        $this->peso_max_mb = $peso_max_mb;
    }


    function consultaDocumentos()
    {
        $this->connect();
        $datos = $this-> getData("SELECT * FROM `documento` WHERE  `documento`.`estatus` >0 ");
        $this->close();
        return $datos;
    }

    function modificaDocumento()
    {

        $sql = "UPDATE `documento` SET 
                       `nombre_doc` = '".$this->getNombreDoc()."', 
                       `formato_admitido` = '".$this->getFormatoAdmitido()."', 
                       `tipo` = '".$this->getTipo()."', 
                       `peso_max_mb` = '".$this->getPesoMaxMb()."', 
                       `estatus` = '".$this->getEstatusDocumento()."' 
                WHERE `documento`.`id_documento` = ".$this->getIdDocumento();
        $this->connect();
        $result = $this->executeInstruction($sql);
        $this->close();
        return $result;
    }

    function crearDocumento()
    {
        $sql = "INSERT INTO `documento`(`id_documento`,`nombre_doc`,`formato_admitido`,`tipo`,`peso_max_mb`,`estatus`)
            VALUES (NULL,'".$this->getNombreDoc()."','".$this->getFormatoAdmitido()."','".$this->getTipo()."','".$this->getPesoMaxMb()."','".$this->getEstatusDocumento()."');";
        $this->connect();
        $result = $this-> executeInstruction($sql);
        $this->close();
        return $result;
    }

    function borrarDocumento($idDocumento,$estatus)
    {
        $sql = "UPDATE `documento` SET `estatus`='".$estatus."' WHERE `id_documento`=".$idDocumento;
        $this->connect();
        $datos = $this-> executeInstruction($sql);
        $this->close();
        return $datos;
    }
}