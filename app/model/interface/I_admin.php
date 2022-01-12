<?php

interface I_admin
{
    /*Contrato para implementar la clase ADMIN*/
    public function queryListaAdministradores();
    public function queryUpdateStatusAdmin($admin,$estatus);
    public function queryDeleteAdmin($admin);
    public function queryBuscaCuentaAdmin();
}