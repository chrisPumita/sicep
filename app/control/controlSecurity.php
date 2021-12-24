<?php
include_once "../../config/SERVER.php";
function limpiar_cadena($cadena)
{
    #elimina espacios dentro de los string
    $cadena = trim($cadena);
    #elimina .\ plecas invertidas
    $cadena = stripslashes($cadena);
    $cadena = str_ireplace("<script>","",$cadena);
    $cadena = str_ireplace("</script>","",$cadena);
    $cadena = str_ireplace("<script src>","",$cadena);
    $cadena = str_ireplace("</script type=>","",$cadena);
    $cadena = str_ireplace("SELECT * FROM","",$cadena);
    $cadena = str_ireplace("DELETE FROM","",$cadena);
    $cadena = str_ireplace("INSERT INTO","",$cadena);
    $cadena = str_ireplace("DROP TABLE","",$cadena);
    $cadena = str_ireplace("DROP DATABASE","",$cadena);
    $cadena = str_ireplace("TRUNCATE TABLE","",$cadena);
    $cadena = str_ireplace("SHOW TABLES","",$cadena);
    $cadena = str_ireplace("SHOW DATABASES","",$cadena);
    $cadena = str_ireplace("<?php","",$cadena);
    $cadena = str_ireplace("?>","",$cadena);
    $cadena = str_ireplace("--","",$cadena);
    $cadena = str_ireplace(">","",$cadena);
    $cadena = str_ireplace("<","",$cadena);
    $cadena = str_ireplace("[","",$cadena);
    $cadena = str_ireplace("]","",$cadena);
    $cadena = str_ireplace("^","",$cadena);
    $cadena = str_ireplace("==","",$cadena);
    $cadena = str_ireplace(";","",$cadena);
    $cadena = str_ireplace("::","",$cadena);

    #elimina .\ plecas invertidas
    $cadena = stripslashes($cadena);
    #elimina espacios dentro de los string
    $cadena = trim($cadena);

    return $cadena;
}

function verificar_datos($filtro,$cadena)
{
    if (preg_match("/^".$filtro."$/",$cadena)) {
        # no tiene errore en el fotmato
        return false;
    } else {
        # Si tiene errores
        return true;
    }
}

function verificar_fecha($fecha)
{
    # verificamos que el fot}rmato de la fecha sea correcta
    #checkdate

    #Separamos en un array los valores que vienen divididos en - 01-01-1995
    $valores = explode('-',$fecha);

    if (count($valores)==3 &&  checkdate($valores[1],$valores[2],$valores[0])) {
        return false;
    } else {
        #si tiene errores
        return true;
    }
}

function encryption($string){
    $output=FALSE;
    $key=hash('sha256', SECRET_KEY);
    $iv=substr(hash('sha256', SECRET_IV), 0, 16);
    $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
    $output=base64_encode($output);
    return $output;
}

function decryption($string){
    $key=hash('sha256', SECRET_KEY);
    $iv=substr(hash('sha256', SECRET_IV), 0, 16);
    $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
    return $output;
}