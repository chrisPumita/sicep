<?php
include_once "CONEXION_M.php";
include_once "I_PERSONA.php";

class PERSONA extends CONEXION_M implements I_PERSONA
{
    protected $id_persona;
    protected $nombre;
    protected $app;
    protected $apm;
    protected $telefono;
    protected $sexo;
    protected $estatus;

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->id_persona;
    }

    /**
     * @param mixed $id_persona
     */
    public function setIdPersona($id_persona)
    {
        $this->id_persona = $id_persona;
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
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return mixed
     */
    public function getApm()
    {
        return $this->apm;
    }

    /**
     * @param mixed $apm
     */
    public function setApm($apm)
    {
        $this->apm = $apm;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
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
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    }
    public function getNombreCompleto(){
        return $this->nombre." ".$this->app." ".$this->apm;
    }

    public function verificaUsuario()
    {
        //debe existir dentro de la base de datos
    }

    function login()
    {
        // TODO: Implement login() method.
    }

    function logout()
    {
        // matar la sesion

    }

    function registraPersona()
    {
        $query ="INSERT INTO `persona` (`id_persona`, `nombre`, `app`, `apm`, `telefono`, `sexo`, `estatus`) 
                VALUES ('".$this->getIdPersona()."', '".$this->getNombre()."', '".$this->getApp()."',
                 '".$this->getApm()."', '".$this->getTelefono()."', '".$this->getSexo()."', 
                 '".$this->getEstatus()."')";

        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function actualizaPersona()
    {
        $query ="UPDATE `persona` SET `nombre`='".$this->getNombre()."',`app`='".$this->getApp()."',
        `apm`='".$this->getApm()."',`telefono`='".$this->getTelefono()."',`sexo`='".$this->getSexo()."' 
        WHERE `id_persona`=".$this->getIdPersona();
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function eliminarPersona()
    {
        // TODO: Implement eliminarPersona() method.
    }
}