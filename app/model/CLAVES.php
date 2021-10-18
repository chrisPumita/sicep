<?php


class CLAVES
{
    const SALT = 'EstoEsUnSalt';
    public static function hash($password) {
        return hash('sha512', self::SALT . $password);
    }
    public static function verify($password, $hash) {
        return ($hash == self::hash($password));
    }

    public  static function generaClaveUsuario($long){
        //Carácteres para la contraseña
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $clave = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for($i=0;$i<$long;$i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $clave .= substr($str,rand(0,62),1);
        }
        //Mostramos la contraseña generada
        return $clave;
    }
}