<?php
include_once "CONEXION_M.php";
class ESTADISTICAS extends CONEXION_M
{
    function queryEstadisticasAnioSolicitudes(){
        $sql = "SELECT count(*) as cantidad,
                    MONTHNAME(t.fecha_solicitud) as mes, YEAR(t.fecha_solicitud) as anio
                FROM
                    inscripcion t
                GROUP BY EXTRACT(YEAR_MONTH FROM t.fecha_solicitud) ASC LIMIT 12";
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

    function  consultaUltimosPagos($limit){
        $limite = $limit >0 ? 'LIMIT '.$limit:'';
        $sql="SELECT vi.id_inscripcion_fk, vi.fecha_validacion,
       vi.fecha_pago, vi.monto_pago_realizado, vi.descripcion, vi.notas,
       concat(per.nombre, ' ', per.app,' ', per.apm) AS nombre_completo
        FROM validacion_inscripcion vi, administrador admin,
                         profesor prof, persona per
        WHERE vi.id_profesor_admin_fk = admin.id_profesor_admin_fk
        AND prof.id_profesor = admin.id_profesor_admin_fk
        AND per.id_persona = prof.id_persona_fk
        AND fecha_validacion BETWEEN NOW() - INTERVAL 30 DAY AND NOW()
        ORDER BY fecha_validacion DESC ".$limite;
        $this->connect();
        $result = $this->getData($sql);
        $this->close();
        return $result;
    }
}