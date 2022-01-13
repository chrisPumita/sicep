<?php
include_once "CONEXION_M.php";
class ESTADISTICAS extends CONEXION_M
{
    function queryEstadisticasAnioSolicitudes(){
        $sql = "select Mes, anio, Valor, Orden from (
                select 'Ene' as Mes, YEAR(I.fecha_solicitud) AS anio, (13 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor
                from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 1
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE)
                and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Feb' as Mes, YEAR(I.fecha_solicitud) AS anio, (14 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 2
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Mar' as Mes, YEAR(I.fecha_solicitud) AS anio, (15 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 3
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Abr' as Mes, YEAR(I.fecha_solicitud) AS anio, (16 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 4
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'May' as Mes, YEAR(I.fecha_solicitud) AS anio, (17 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 5
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Jun' as Mes, YEAR(I.fecha_solicitud) AS anio, (18 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 6
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Jul' as Mes, YEAR(I.fecha_solicitud) AS anio, (19 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 7
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Ago' as Mes, YEAR(I.fecha_solicitud) AS anio, (20 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 8
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Sep' as Mes, YEAR(I.fecha_solicitud) AS anio, (21 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 9
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Oct' as Mes, YEAR(I.fecha_solicitud) AS anio, (22 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 10
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Nov' as Mes, YEAR(I.fecha_solicitud) AS anio, (23 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 10
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
                union select 'Dic' as Mes, YEAR(I.fecha_solicitud) AS anio, (24 - EXTRACT(MONTH FROM DATE_SUB(NOW(),INTERVAL 1 YEAR))) mod 12 as Orden, count(*) as Valor from inscripcion I where EXTRACT(MONTH FROM I.fecha_solicitud) = 12
                and I.fecha_solicitud between CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE) and DATE_ADD(CAST(DATE_FORMAT(DATE_SUB(NOW(),INTERVAL 1 YEAR) ,'%Y-%m-01') as DATE), INTERVAL 1 YEAR)
            ) t order by anio DESC, orden ASC";
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }

    function queryCuentaCursosActivos(){
        $sql = "select id_curso from curso
                where id_profesor_admin_acredita IS NOT NULL
                  AND aprobado = 1
                ";
        $this->connect();
        $result = $this->numRows($sql);
        $this->close();
        return $result;
    }

    function cuentaAlumnosVerificados(){
        $sql = "select a.id_alumno from alumno a, persona p
                    WHERE p.id_persona = a.id_persona
                    AND p.estatus >0";
        $this->connect();
        $result = $this->numRows($sql);
        $this->close();
        return $result;
    }

    function queryCuentaConstancias(){
        $sql = "select id_constancia_alumno from constancia_alumno 
                where estatus = 1 AND verificada = 1 ";
        $this->connect();
        $result = $this->numRows($sql);
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

    function  numericDashbiard(){
        $sql="SELECT 
       (SELECT COUNT(*) FROM curso WHERE curso.id_profesor_admin_acredita IS NOT NULL AND curso.aprobado = 1) as cursos,
        (SELECT COUNT(*) FROM inscripcion, inscripcion_acta WHERE inscripcion.validacion_constancia = 0
          AND inscripcion.id_inscripcion IN (SELECT inscripcion_acta.id_inscripcion_acta FROM inscripcion_acta)
          AND inscripcion_acta.id_inscripcion_acta NOT IN (SELECT constancia_alumno.id_inscripcion_acta_fk FROM constancia_alumno)) as constancias,
       (SELECT COUNT(*) FROM alumno, persona WHERE persona.estatus=1 and persona.id_persona=alumno.id_persona) as alumnos";
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }
}