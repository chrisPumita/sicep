<?php
include("DOCUMENTO.php");
include_once "I_DOCS_SOLICITADOS.php";
class DOCS_SOLICITADOS_CURSO extends  DOCUMENTO implements I_DOCS_SOLICITADOS
{
    private $id_doc_sol;
    private $id_curso_fk;
    private $obligatorio;


    /**
     * @return mixed
     */
    public function getIdDocSol()
    {
        return $this->id_doc_sol;
    }

    /**
     * @param mixed $id_doc_sol
     */
    public function setIdDocSol($id_doc_sol): void
    {
        $this->id_doc_sol = $id_doc_sol;
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
    public function getObligatorio()
    {
        return $this->obligatorio;
    }

    /**
     * @param mixed $obligatorio
     */
    public function setObligatorio($obligatorio): void
    {
        $this->obligatorio = $obligatorio;
    }


    function consultarListaDocumentosSol($id_curso)
    {
        $sql = "SELECT d.*, ds.`obligatorio` 
                                    FROM `documento` d, `docs_solicitados_curso` ds  
                                    WHERE d.`id_documento` = ds.`id_documento_fk` 
                                    AND ds.`id_curso_fk`=" . $id_curso ;
        $this->connect();
        $datos = $this-> getData($sql);
        $this->close();
        return $datos;
    }

    //ejecuta la insctruccion y me regresa true si se efectuo de forma correcta
    public function crearDocumentosSol()
    {
        $query = "INSERT INTO `docs_solicitados_curso` (`id_doc_sol`, `id_documento_fk`, 
                   `id_curso_fk`, `obligatorio`) 
                  VALUES (NULL,'".$this->getIdDocumento()."','".$this->getIdCursoFk()."','".$this->getObligatorio()."')";

        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    function eliminaDocumentoSolicitado($id_documento_sol)
    {
        $this->connect();
        $datos = $this-> executeInstruction("DELETE FROM `docs_solicitados_curso` WHERE `id_doc_sol`= ".$id_documento_sol);
        $this->close();
        return $datos;
    }

    function cambiarOblig($estatus)
    {
        $this->connect();
        $sql = "UPDATE `docs_solicitados_curso` SET `obligatorio` = '".$estatus."' 
        WHERE `docs_solicitados_curso`.`id_doc_sol` = ".$this->getIdDocSol();
        $response = $this-> executeInstruction($sql);
        $this->close();
        return $response;
    }
}