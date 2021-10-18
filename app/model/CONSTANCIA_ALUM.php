<?php
include "CONEXION_M.php";

class CONSTANCIA_ALUM extends CONEXION_M
{
	private $id_constancia_alumno;
	private $id_profesor_admin_firma_fk;
	private $id_inscripcion_acta_fk;
	private $sello_digital;
	private $verificada;
	private $fecha_creacion;
	private $estatus;
	private $qr_verificador;

    /**
     * @return mixed
     */
    public function getQrVerificador()
    {
        return $this->qr_verificador;
    }

    /**
     * @param mixed $qr_verificador
     */
    public function setQrVerificador($qr_verificador): void
    {
        $this->qr_verificador = $qr_verificador;
    }

	/*Asociacion*/
	private $INCRIPCION_ACTA;

    /**
     * @return mixed
     */
    public function getINCRIPCIONACTA()
    {
        return $this->INCRIPCION_ACTA;
    }

    /**
     * @param mixed $INCRIPCION_ACTA
     */
    public function setINCRIPCIONACTA($INCRIPCION_ACTA): void
    {
        $this->INCRIPCION_ACTA = $INCRIPCION_ACTA;
    }
    /**
     * @return mixed
     */
    public function getIdConstanciaAlumno()
    {
        return $this->id_constancia_alumno;
    }

    /**
     * @param mixed $id_constancia_alumno
     */
    public function setIdConstanciaAlumno($id_constancia_alumno): void
    {
        $this->id_constancia_alumno = $id_constancia_alumno;
    }

    /**
     * @return mixed
     */
    public function getIdProfesorAdminFirmaFk()
    {
        return $this->id_profesor_admin_firma_fk;
    }

    /**
     * @param mixed $id_profesor_admin_firma_fk
     */
    public function setIdProfesorAdminFirmaFk($id_profesor_admin_firma_fk): void
    {
        $this->id_profesor_admin_firma_fk = $id_profesor_admin_firma_fk;
    }

    /**
     * @return mixed
     */
    public function getIdInscripcionActaFk()
    {
        return $this->id_inscripcion_acta_fk;
    }

    /**
     * @param mixed $id_inscripcion_acta_fk
     */
    public function setIdInscripcionActaFk($id_inscripcion_acta_fk): void
    {
        $this->id_inscripcion_acta_fk = $id_inscripcion_acta_fk;
    }

    /**
     * @return mixed
     */
    public function getSelloDigital()
    {
        return $this->sello_digital;
    }

    /**
     * @param mixed $sello_digital
     */
    public function setSelloDigital($sello_digital): void
    {
        $this->sello_digital = $sello_digital;
    }

    /**
     * @return mixed
     */
    public function getVerificada()
    {
        return $this->verificada;
    }

    /**
     * @param mixed $verificada
     */
    public function setVerificada($verificada): void
    {
        $this->verificada = $verificada;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
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

    function consultarlistaConstanciasAl(){

        $query = "SELECT const_al.id_constancia_alumno,const_al.sello_digital, 
                    const_al.verificada, const_al.fecha_creacion, const_al.qr_verificador,
                    const_al.estatus,per.nombre,per.app,per.apm, ins.id_inscripcion 
                    FROM constancia_alumno const_al,administrador adm,profesor prof,persona per,
                         inscripcion_acta ins_act, acta act, inscripcion ins 
                    WHERE const_al.id_profesor_admin_firma_fk=adm.id_profesor_admin_fk 
                      and adm.id_profesor_admin_fk = prof.id_profesor 
                      and prof.id_persona_fk = per.id_persona 
                      and ins_act.id_inscripcion_acta=ins.id_inscripcion 
                      and ins_act.folio_acta_fk=act.folio and ins_act.estatus=1";
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }
    function consultarConstanciaAl($inscripcion){
        $query = "SELECT const_al.id_constancia_alumno,const_al.sello_digital, 
                    const_al.verificada, const_al.fecha_creacion, const_al.qr_verificador,
                    const_al.estatus,per.nombre,per.app,per.apm, ins.id_inscripcion 
                    FROM constancia_alumno const_al,administrador adm,profesor prof,persona per,
                         inscripcion_acta ins_act, acta act, inscripcion ins 
                    WHERE const_al.id_profesor_admin_firma_fk=adm.id_profesor_admin_fk 
                      and adm.id_profesor_admin_fk = prof.id_profesor 
                      and prof.id_persona_fk = per.id_persona 
                      and ins_act.id_inscripcion_acta=ins.id_inscripcion 
                      and ins_act.folio_acta_fk=act.folio and ins_act.estatus=1
                      and ins.id_inscripcion=".$inscripcion;
        $this->connect();
        $datos = $this->getData($query);
        $this->close();
        return $datos;
    }
    function  crearConstanciaAl(){
        $query = "INSERT INTO `constancia_alumno`(`id_constancia_alumno`, `id_profesor_admin_firma_fk`, `id_inscripcion_acta_fk`, `sello_digital`, `verificada`, `fecha_creacion`, `qr_verificador`, `estatus`) 
                  VALUES (NULL,'".$this->getIdProfesorAdminFirmaFk()."','".$this->getIdInscripcionActaFk()."','".$this->getSelloDigital()."','".$this->getVerificada()."','".date('Y-m-d H:i:s')."','".$this->getQrVerificador()."','".$this->getEstatus()."')";
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }
    function  modificarConstanciaAl(){
        $query = "UPDATE `constancia_alumno` SET `sello_digital`='".$this->getSelloDigital()."',`verificada`='".$this->getVerificada()."',`estatus`='".$this->getEstatus()."' WHERE `id_constancia_alumno`= ".$this->getIdConstanciaAlumno() ;
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }
    function  eliminarConstanciaAl(){
        $query = "UPDATE `constancia_alumno` SET `estatus`='".$this->getEstatus()."' WHERE `id_constancia_alumno`= ".$this->getIdConstanciaAlumno();
        $this->connect();
        $datos = $this->executeInstruction($query);
        $this->close();
        return $datos;
    }

}