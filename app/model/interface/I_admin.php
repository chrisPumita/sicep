<?php

interface I_admin
{
    /*Contrato para implementar la clase ADMIN*/
    public function getListaAdministradores($filtro);
    public function updateStatusAdmin($admin,$estatus);
    public function deleteAdmin($admin);
    public function buscaCuentaAdmin($id_profesor_admin);
}