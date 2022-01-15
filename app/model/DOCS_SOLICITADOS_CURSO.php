<?php
include_once "DOCUMENTO.php";
include_once "interface/I_DOCS_SOLICITADOS.php";
class DOCS_SOLICITADOS_CURSO extends DOCUMENTO implements I_DOCS_SOLICITADOS
{
    private $id_doc_sol;
    private $id_documento_fk;
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
    public function getIdDocumentoFk()
    {
        return $this->id_documento_fk;
    }

    /**
     * @param mixed $id_documento_fk
     */
    public function setIdDocumentoFk($id_documento_fk): void
    {
        $this->id_documento_fk = $id_documento_fk;
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


    function queryListaDocumentosSol()
    {
        $sql = "select doc.id_documento, doc.nombre_doc, doc.formato_admitido,
                   doc.tipo, doc.peso_max_mb, doc.estatus, docs_cur.id_doc_sol,
                   docs_cur.id_documento_fk, docs_cur.id_curso_fk, docs_cur.obligatorio
                    from documento doc,  docs_solicitados_curso docs_cur
                    where doc.id_documento = docs_cur.id_documento_fk AND docs_cur.id_doc_sol>0
                    AND docs_cur.`id_curso_fk`=" . $this->getIdCursoFk() ;
        $this->connect();
        $datos = $this-> getData($sql);
        $this->close();
        return $datos;
    }

    //ejecuta la insctruccion y me regresa true si se efectuo de forma correcta
    function queryEliminaDocumentoSolicitado()
    {
        $query="UPDATE `docs_solicitados_curso` SET `id_doc_sol` = ".$this->getIdDocSol()."*-1 
        WHERE `docs_solicitados_curso`.`id_doc_sol` = ".$this->getIdDocSol();
        $this->connect();
        $datos = $this-> executeInstruction($query);
        $this->close();
        return $datos;
    }

    function cambiarObligDocSol()
    {
        $this->connect();
        $sql = "UPDATE seltic.docs_solicitados_curso t
                SET t.obligatorio = ".$this->getObligatorio()."
                WHERE t.id_doc_sol  = ".$this->getIdDocSol();
        $response = $this-> executeInstruction($sql);
        $this->close();
        return $response;
    }

    //Funcion para concatenar querys para una lista de doc. sol.

    public function  queryInsertLsDocsSol($lsDocSol){
        $cont=0;
        $query = "INSERT INTO `docs_solicitados_curso` (`id_doc_sol`, `id_documento_fk`, `id_curso_fk`, `obligatorio`) VALUES ";
        foreach($lsDocSol as $doc){
            $query.="(NULL, '".$doc."','".$this->getIdCursoFk()."', '0')";
            $cont++;
            $query.= count($lsDocSol)== $cont ? ";": ",";
        }
        $this->connect();
        $resultado = $this-> executeInstruction($query);
        $this->close();
        return $resultado;
    }

    
    public function queryInsertDocSolCurso()
    {
        $query="INSERT INTO `docs_solicitados_curso` (`id_doc_sol`, `id_documento_fk`, `id_curso_fk`, `obligatorio`) 
        VALUES (NULL , '".$this->getIdDocumentoFk()."', '".$this->getIdCursoFk()."', '".$this->getObligatorio()."')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
    public function queryUpdateDocSolCurso(){
        $query="UPDATE `docs_solicitados_curso` SET `id_documento_fk` = '".$this->getIdDocumentoFk()."',
         `obligatorio` = '".$this->getObligatorio()."' WHERE `docs_solicitados_curso`.`id_doc_sol` = ".$this->getIdDocSol();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
}