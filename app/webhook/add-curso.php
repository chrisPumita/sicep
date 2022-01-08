<?php
if(isset($_POST['nombre_curso']) && isset($_POST['descripcion_curso'])&& isset($_POST['objetivo_curso'])&& isset($_POST['dirigido_A'])
&& isset($_POST['antecedentes'])){
    //Generamos el params y mandamos a crear al control para el curso
    $params =[
        "idProfesorAdmin"=>"",
        "codigo"=>$_POST['codigo'],
        "nombre_curso"=>$_POST['nombre_curso'],
        "dirigido"=>$_POST['dirigido_A'],
        "objetivo"=>$_POST['objetivo_curso'],
        "descripcion"=>$_POST['descripcion_curso'],
        "noSesiones"=>$_POST['noSesiones'],
        "antecedentes"=>$_POST['antecedentes'],
        "costo"=>$_POST['costo'],
        "linkTemarioName"=>$_FILES['temarioPDF']['name'],
        "linkTemarioFile"=>$_FILES['temarioPDF']['tmp_name'],
        "bannerName"=>$_FILES['banner']['name'],
        "bannerFile"=>$_FILES['banner']['tmp_name'],
        "tipoCurso"=>$_POST['tipoCurso']
        ];
        $documentacion = isset($_POST['documentos']) ? $_POST['documentos']: null;

        include_once "../control/controlCursos.php";

        $result = addCurso($params,$documentacion);
        if($result){
            $mjeType= 1;
            $isReturn = $result;
            $mensaje="Se ha creado una propuesta de curso";
        } else{
            $mjeType=-1;
            $isReturn = 0;
            $mensaje="No se ha podo almacenar el curso";
        }
}
else {
    $mjeType= 0;
    $mensaje="Faltan datos";
}    
$mje = array(
    "mjeType" => $mjeType,
    "idReturn" => $isReturn,
    "Mensaje" => $mensaje
  );

  echo json_encode($mje);    