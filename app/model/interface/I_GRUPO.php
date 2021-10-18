<?php

interface I_GRUPO
{
    public  function crearGrupo();

    public  function modificaGrupo();

    public  function eliminaGrupo($id_grupo);

    public  function consultaGrupos($id_curso);
}