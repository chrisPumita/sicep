<?php


class HOME extends CONEXION_M
{
    function  contarHome(){
        $sql="SELECT (SELECT COUNT(*) FROM curso WHERE curso.id_profesor_admin_acredita IS NOT NULL AND curso.aprobado = 1) as cursos,
               (SELECT COUNT(*) FROM inscripcion, inscripcion_acta
                WHERE inscripcion.validacion_constancia=0
                  AND inscripcion.id_inscripcion IN (SELECT inscripcion_acta.id_inscripcion_acta FROM inscripcion_acta)
                  AND inscripcion_acta.id_inscripcion_acta NOT IN (SELECT constancia_alumno.id_inscripcion_acta_fk FROM constancia_alumno)) as constancias,
               (SELECT COUNT(*) FROM alumno, persona WHERE alumno.estatus=1 and persona.estatus=1 and persona.id_persona=alumno.id_persona) as alumno,
               (SELECT COUNT(*) FROM inscripcion WHERE inscripcion.autorizacion_inscripcion=0) as inscripcion";
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    //CHRIS
    function queryConteoInscripcionesAnio(){
        $query = "SELECT MONTH(insc.fecha_solicitud) Mes,
       COUNT(*) CantMes FROM inscripcion insc
        WHERE YEAR(insc.fecha_solicitud) = YEAR(CURDATE()) AND MONTH(insc.fecha_solicitud)
        BETWEEN 1 and 12 GROUP BY MONTH(insc.fecha_solicitud) ORDER BY 1";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    //CRIS
    function queryConteoHM(){
        $query = "SELECT per.sexo, COUNT(*) AS suma,
                   (count(per.sexo)/(select count(*) from alumno))*100 as PORCENTAJE FROM alumno al, persona per
                     WHERE per.id_persona = al.id_persona GROUP BY per.sexo";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }
}