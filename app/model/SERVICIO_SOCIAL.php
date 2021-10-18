<?php


class SERVICIO_SOCIAL
{
    private $id_alumno;
    private $clave_acceso;
    private $fecha_alta;
    private $fecha_inicio_serv;
    private $fecha_termino_serv;
    private $notas;
    private $permisos;
    private $estatus;

    /**
     * @return mixed
     */
    public function getIdAlumno()
    {
        return $this->id_alumno;
    }

    /**
     * @param mixed $id_alumno
     */
    public function setIdAlumno($id_alumno): void
    {
        $this->id_alumno = $id_alumno;
    }

    /**
     * @return mixed
     */
    public function getClaveAcceso()
    {
        return $this->clave_acceso;
    }

    /**
     * @param mixed $clave_acceso
     */
    public function setClaveAcceso($clave_acceso): void
    {
        $this->clave_acceso = $clave_acceso;
    }

    /**
     * @return mixed
     */
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }

    /**
     * @param mixed $fecha_alta
     */
    public function setFechaAlta($fecha_alta): void
    {
        $this->fecha_alta = $fecha_alta;
    }

    /**
     * @return mixed
     */
    public function getFechaInicioServ()
    {
        return $this->fecha_inicio_serv;
    }

    /**
     * @param mixed $fecha_inicio_serv
     */
    public function setFechaInicioServ($fecha_inicio_serv): void
    {
        $this->fecha_inicio_serv = $fecha_inicio_serv;
    }

    /**
     * @return mixed
     */
    public function getFechaTerminoServ()
    {
        return $this->fecha_termino_serv;
    }

    /**
     * @param mixed $fecha_termino_serv
     */
    public function setFechaTerminoServ($fecha_termino_serv): void
    {
        $this->fecha_termino_serv = $fecha_termino_serv;
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas): void
    {
        $this->notas = $notas;
    }

    /**
     * @return mixed
     */
    public function getPermisos()
    {
        return $this->permisos;
    }

    /**
     * @param mixed $permisos
     */
    public function setPermisos($permisos): void
    {
        $this->permisos = $permisos;
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

    public function consultaCuenta()
    {
        $cuenta = "";
        return $cuenta;
    }


}