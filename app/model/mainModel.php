<?php


class mainModel
{

    /** Metodos de esnciptacion/desencriptacion de URL  */

    #Las vistas podran tener acceso a esta funcion para encriptar las peticiones
    public function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }


    protected static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    /** Funcion para generar codigos aleatorios propios de la plataforma de prestamos */
    protected static function generar_codigo_aleatorio($letra,$longitud,$numero)
    {
        # A151131-1 -> Ejmeplo de codigo generado
        for ($i=0; $i < $longitud ; $i++) {
            $aleatorio = rand(0,9);
            $letra .= $aleatorio;
        }
        return $letra."-".$numero;
    }

    /** Funcion para limpiar cadenas y evitar inyeccion de sql */
    protected static function limpiar_cadena($cadena)
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

    /** Verificar  formato de datos */
    protected static function verificar_datos($filtro,$cadena)
    {
        if (preg_match("/^".$filtro."$/",$cadena)) {
            # no tiene errore en el fotmato
            return false;
        } else {
            # Si tiene errores
            return true;
        }
    }

    /** Verificar  las fechas */
    protected static function verificar_fecha($fecha)
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

    /** Funcion de paginador de tablas */
    protected static function paginador_tablas($pagina,$Npaginas,$url,$botones)
    {
        $tabla = '<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">';
        #Se crean botones de << y atnerior
        if ($pagina==1) {
            $tabla .= ' <li class="page-item disabled">
                            <a class="page-link">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>';
        } else {
            $tabla .= ' 
            <li class="page-item">
                <a class="page-link" href="'.$url.'1/">
                  <i class="fas fa-angle-double-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="'.$url.($pagina-1).'/">Anterior</a>
            </li>';
        }

        #iteracion para crear los botones

        $ci = 0;
        for ($i=$pagina; $i <= $Npaginas ; $i++) {
            # mostramos solo los botones que deseamos
            if ($ci>=$botones) {
                # ya no construimos mas botones y terminamos el ciclo
                break;
            }

            if ($pagina == $i) {
                # creamos el boton seleccionado
                $tabla .= '<li class="page-item">
                                <a class="page-link active" href="'.$url.$i.'/">'.$i.'</a>
                            </li> ';
            } else {
                # creamos el boton que no esta seleccionado
                $tabla .= '<li class="page-item">
                                <a class="page-link" href="'.$url.$i.'/">'.$i.'</a>
                            </li> ';
            }

            $ci++;
        }

        #Se crean botones de >> y siguiente
        if ($pagina==$Npaginas) {
            $tabla .= ' <li class="page-item disabled">
                            <a class="page-link">
                              <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>';
        } else {
            $tabla .= ' 
            <li class="page-item">
                <a class="page-link" href="'.$url.($pagina+1).'/">Siguiente</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="'.$url.$Npaginas.'/">
                <i class="fas fa-angle-double-right"></i>
                </a>
            </li>';
        }

        $tabla .= '</ul></nav>';
        return $tabla;
    }
}