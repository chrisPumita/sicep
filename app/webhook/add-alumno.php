<?php
if(isset($_POST['municipios'])&& isset($_POST['universidades'])&& isset($_POST['matricula'])&& isset($_POST['procedencia'])
&& isset($_POST['carrera'])&& isset($_POST['correoAlumno'])&& isset($_POST['contrasena'])&& isset($_POST['nombreAlumno'])
&& isset($_POST['appAlumno'])&& isset($_POST['apmAlumno'])&& isset($_POST['telAlumno'])&& isset($_POST['sexo'])){
  if($_POST['contrasena']== $_POST['contrasenaconfirmar']){
    $params = [
      "id_municipio"  => $_POST['municipios'],
      "id_universidad"  => $_POST['universidades'],
      "matricula"  => $_POST['matricula'],
      "nombre_uni"  => $_POST['nombreUni'],
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
    $result=crearCuentaAlumno($params);
    if($result){
      $mjeType=1;
      $mensaje="Se ha registrado exitosamente";
    }
    else {
      $mjeType=-1;
      $mensaje="Error interno";
    }
  } else{
    $mjeType=0;
    $mensaje="Las contraseñas no coinciden";
  }
    
}
else {
  $mjeType=0;
  $mensaje="Faltan Datos";
}
$mje = array(
  "mjeType" => $mjeType,
  "Mensaje" => $mensaje
);
echo json_encode($mje);    