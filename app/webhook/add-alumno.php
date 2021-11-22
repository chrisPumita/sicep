<?php

if($_POST['contrasena']== $_POST['contrasenaconfirmar']){
    $params = [
        "id_municipio"  => $_POST['municipios'],
        "id_universidad"  => $_POST['universidades'],
        "matricula"  => $_POST['matricula'],
        //"nombre_uni"  => $_POST[''],
        "idProcedencia"  => $_POST['procedencia'],
        "carrera_especialidad"  => $_POST['carrera'],
        "email"  => $_POST['correoAlumno'],
        "pw"  => $_POST['contrasena'],
        "nombre"  => $_POST['nombreAlumno'],
        "app"  => $_POST['appAlumno'],
        "apm"  => $_POST['apmAlumno'],
        "telefono"  => $_POST['telAlumno'],
        "sexo"  => $_POST['sexo']
      ];
      include_once "../control/controlAlum.php";
      echo crearCuentaAlumno($params);
}
