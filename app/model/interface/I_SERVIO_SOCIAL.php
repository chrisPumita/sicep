<?php

interface I_SERVIO_SOCIAL
{
    //MODEL SERVICIO SOCIAL RCSG
    function queryConsultaFichaCuentaServSoc();
    function queryConsultaListaCuentasSS();
    function queryCreateCuentaServSoc();
    function queryModificarCuentaServSoc();
    function queryTerminarServSoc();
    function queryCambiarClaveServSoc();
}