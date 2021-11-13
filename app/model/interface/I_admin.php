<?php

interface I_admin
{
    /*Contrato para implementar la clase ADMIN*/
    public function queryListaAdministradores($filtro);
    public function queryUpdateStatusAdmin($admin,$estatus);
    public function queryDeleteAdmin($admin);
    public function queryBuscaCuentaAdmin($id_profesor_admin);
}