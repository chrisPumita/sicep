$(document).ready(function () {
    consultaInfoInscripcion();
});

function consultaInfoInscripcion() {
    //llamado a ffuncion asincrona
    consultaAsyncFichaInsc(ID_INSC,0).then(function (result) {
        console.log(result);
        buildHTMLFicha(result);
        if (result.C_SS != null) {
            let cardHTML = buildCardSerSoc(result.C_SS);
            $("#acountSS").html(cardHTML);
        }
        let tablDocs = buildTBLDocsSolicitados(result.DOCS);
        $("#containerDocs").html(tablDocs);
    })
}

function buildHTMLFicha(FICHA) {
    let DATOS = FICHA.DATOS;
    $("#avatarImage").attr("src",DATOS.perfil_image);
    $("#breadName").html(DATOS.nombre_completo);
    $("#fichaName").html(DATOS.nombre_completo);
    $("#fichaCarrera").html(DATOS.carrera_especialidad);
    $("#fichaProcedencia").html(DATOS.tipo_procedencia);
    $("#fichaValidaAlumno").html(cuentaAlumnoDraw(DATOS.estatusAlumno));
    //Data
    $("#fichaSexo").html(sexoPersona(DATOS.sexo));
    $("#fichaTelefono").html(DATOS.telefono);
    $("#fichaCorreo").html(DATOS.email);
    $("#fichaLocalidad").html(DATOS.municipio+', '+DATOS.edoRep);
    //Academica
    $("#carrera").html(DATOS.carrera_especialidad);
    $("#fichaNameUni").html(DATOS.nombreUni+' ('+DATOS.siglas+')');
    $("#fichaMatricula").html(DATOS.matricula);
    $("#fichaAltaCuenta").html('Registrada el '+getLegibleFechaHora(DATOS.fecha_registro));
    //DETALLES DEL CURSO
    $("#bannerCurso").attr("src",DATOS.banner_img);
    $("#idFechaSol").html('Recibida el '+getLegibleFechaHora(DATOS.fecha_solicitud));
    $("#fichaNameCurso").html(DATOS.codigo+' '+DATOS.nombre_curso);
    $("#fichaGrupo").html(DATOS.grupo);
    $("#fichasemestre").html(DATOS.semestre);
    $("#fichaGen").html(DATOS.generacion);
    $("#fichaCampus").html(getCampusCede(DATOS.campus_cede));
    $("#fichaProfe").html(DATOS.profesor);
    //COSTOS
    $("#fichaCoste").html('$ '+DATOS.costo_real+' MXN');
    //-50% ($500.00 MXN)
    let descuento = DATOS.DESCUENTO === null ? 'No Aplica': ''+DATOS.DESCUENTO+' % <cite>('+DATOS.tipo_procedencia+')</cite>';
    let totalPago = DATOS.DESCUENTO === null ? '$ '+DATOS.costo_real+' MXN': '$ '+calculaDescuento(DATOS.costo_real,DATOS.DESCUENTO)+' MXN';
    $("#fichaDesc").html(descuento);
    $("#fichaTotal").html(totalPago);
    $("#fichaNotas").html(DATOS.notasInscripcion.length>0?DATOS.notasInscripcion.length:'Sin nota alguna');
}


function buildCardSerSoc(SS) {
    return `<div class="card-body pb-3">
                                <div class="m-auto">
                                    <h5>Información de Servicio Social</h5>
                                    Este alumno está registrado con una cuenta de Servicio Social 
                                    <span class="badge bg-primary">${estadoServSoc(SS.estatusSS)}</span>
                                </div>

                                <div class="row py-3">
                                    <h5 class="text-secondary">Detalles:</h5>
                                    <div class="row py-1">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Inicio de servicio</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold">${getLegibleFechaHora(SS.fecha_inicio_serv)}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Fin de servicio</h6>
                                        </div>
                                        <div class="col-sm-7 text-primary text-bold">${getLegibleFechaHora(SS.fecha_termino_serv)}</div>
                                    </div>
                                    <hr>
                                    <div class="row py-1">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Notas</h6>
                                        </div>
                                        <div class="col-sm-9 text-primary text-bold">${SS.notas}</div>
                                    </div>                                   
                                </div>
                            </div>`;
}
/*
"url":"./webhook/lista-solicitudes-inscripcion.php",
                "type": "POST",
                "data": {"idInsc": 0}
* */

/*
<i class="fas fa-check-circle text-primary avatar-status" data-bs-toggle="tooltip" data-bs-placement="top" title="Cuanta Verificada"></i>
* */