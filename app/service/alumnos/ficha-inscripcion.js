
$(document).ready(function() {
    console.log(ID_FICHA);
    consultaInfoInscripcionAlumno();
});


function consultaInfoInscripcionAlumno() {
    //llamado a ffuncion asincrona
    consultaAsyncFichaInscAlumno(ID_FICHA,0).then(function (result) {
        console.log(result);

        $("#tiitleCurso").html(result.DATOS.nombre_curso);

        buildHTMLFicha(result);
        /*
if (result.C_SS != null) {
    let cardHTML = buildCardSerSoc(result.C_SS);
    $("#acountSS").html(cardHTML);
}
if (parseInt(result.DATOS.autorizacion_inscripcion)>=0){
    if (result.VALIDACION!=null){
        let cardInscripcionAcredita = buildCardInscripcion(result.VALIDACION);
        $("#cardPago").html(cardInscripcionAcredita);
    }
}
else{
    let cardCancelado = buildCardInscripcionCancelacion(result.DATOS);
    $("#cardPago").html(cardCancelado);
}
* */
        let tablDocs = buildTBLDocsSolicitadosAlumno(result.DOCS);
        $("#containerDocs").html(tablDocs);


    })
}

function buildTBLDocsSolicitadosAlumno(DOCS) {
    let template;
    if (DOCS.length > 0){
        template = `<div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <tbody><thead>
                                <tr>
                                    <th>DOCUMENTO</th>
                                    <th>DETALLES</th>
                                    <th>VER</th>
                                    <th>SUBIR</th>
                                </tr>
                            </thead>`;
        DOCS.forEach(
            (doc)=>{
                //Validando el arrrchivo a spara presentarlo
                let botonesPDF, botonesAcion, fechaInfo,badgeRevisa ='';
                let estadoFile = getTipoEstado(doc.estatusFile,doc.estadoRevisado);
                let styleTr ='';
                switch (estadoFile) {
                    case 0:
                        botonesPDF =
                            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#modalViewFile" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;

                        botonesAcion =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-success btnConfirmFile"><i class="fas fa-check-square"></i></button>
                                      <button type="button" class="btn btn-danger btnCancelFile"><i class="fas fa-window-close"></i></button>
                                    </div>`;

                        fechaInfo = "Documento enviado el " + getLegibleFechaHora(doc.fecha_creacion);
                        // styleTr = 'style="background-color: lightgray;"';
                        badgeRevisa = "<br><span class='badge bg-warning'>REVISAR</span>";
                        break;
                    case 1:
                        botonesPDF =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#modalViewFile" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;
                        botonesAcion =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-danger btnCancelFile"><i class="fas fa-window-close"></i></button>
                                    </div>`;

                        fechaInfo = `Documento <span class='badge bg-success'>Aprobado</span>. <br> Subido el ${doc.fecha_creacion}`;
                        break;

                    case -1:
                        botonesPDF = "";
                        botonesAcion = "";
                        fechaInfo = "Sibir..."
                        break;

                    default:
                        botonesPDF = "";
                        botonesAcion = "";
                        fechaInfo = "El archivo fue rechazado y regresado al alumno.";
                        break;
                }

                template += `
                            <tr  idDoc="${doc.id_archivo}" ${styleTr}>
                                <td class="text-sm-start">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="spinner-grow text-${getColorEstatusFile(doc.estatusFile)}" role="status"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-md-start px-3">
                                            <p class="mb-0 text-xs">${doc.nombre_doc} ${badgeRevisa}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-sm-start">
                                    ${fechaInfo}
                                </td>
                                <td>
                                    ${botonesPDF}
                                </td>
                                <td>
                                    ${botonesAcion}
                                </td>
                            </tr>`;
            }
        );
        template += `</tbody>
                        </table></div>
        <div class="container">
            <div class="row small text-primary">
                <div class="col-12 col-md-2">
                 <i class="fas fa-circle text-success dotDocs small"></i> Acreditado
                </div>
                <div class="col-12 col-md-2">
                 <i class="fas fa-circle text-warning dotDocs small"></i>   Por Revisar
                </div>
                <div class="col-12 col-md-2">
                  <i class="fas fa-circle text-info dotDocs small"></i>  Rechazado
                </div>
                <div class="col-auto">
                <i class="fas fa-circle text-black dotDocs small"></i>  Esperando que el alumno suba el archivo
                </div>
            </div>
        </div>
    `;
    }
    else{
        template += `<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Sin documentación</h4>
                      <p>Este curso no necesita documentación. Por lo que solo es necesario acreditar la inscripcion de forma manual.
                      </p>
                      <hr>
                      <p class="mb-0">Si esto es un error y se necesita documentación alguna, porfavot vaya al Curso y edite la documentacion requerida.</p>
                    </div>`;
    }
    return template;
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
    $("#idFechaSol").html('Enviada el '+getLegibleFechaHora(DATOS.fecha_solicitud));
    $("#fichaNameCurso").html(DATOS.codigo+' '+DATOS.nombre_curso);
    $("#fichaGrupo").html(DATOS.grupo);
    $("#fichasemestre").html(DATOS.semestre);
    $("#fichaGen").html(DATOS.generacion);
    $("#fichaCampus").html(getCampusCede(DATOS.campus_cede));
    $("#fichaProfe").html(DATOS.profesor);
    //COSTOS
    $("#fichaCoste").html('$ '+DATOS.costo_real+' MXN');
    let descuento = DATOS.DESCUENTO === null ? 'No Aplica': ''+DATOS.DESCUENTO+' % <cite>('+DATOS.tipo_procedencia+')</cite>';
    let totalPago = DATOS.DESCUENTO === null ? '$ '+DATOS.costo_real+' MXN': '$ '+calculaDescuento(DATOS.costo_real,DATOS.DESCUENTO)+' MXN';
    $("#fichaDesc").html(descuento);
    $("#fichaTotal").html(totalPago);
    $("#cardPagoTotal").html(totalPago);
    $("#fichaNotas").html(DATOS.notasInscripcion.length>0?DATOS.notasInscripcion.length:'Sin nota alguna');
}

/*Async regresa lista del documentos pendient3s por revisar*/
async function consultaAsyncFichaInscAlumno(idInscipcion,filtro) {
    return await consultaAsyncFichaInscAlumnoAJAX(idInscipcion,filtro);
}

//Funcion ajax de asignaciones
async function consultaAsyncFichaInscAlumnoAJAX(idInscipcion,filtro){
    return $.ajax({
        url: "../app/webhook/detalles-ficha-inscripcion.php",
        type: 'POST',
        dataType: "json",
        data: {
            idInscipcion:idInscipcion,
            filtro:filtro
        },
        success: function (response) {
            //   console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer los documentos por revisar");
        }
    });
}