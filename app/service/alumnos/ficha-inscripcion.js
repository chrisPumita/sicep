
$(document).ready(function() {
    consultaInfoInscripcionAlumno();
});


function consultaInfoInscripcionAlumno() {
    //llamado a ffuncion asincrona
    consultaAsyncFichaInscAlumno(ID_FICHA,0).then(function (result) {
        $("#tiitleCurso").html(result.DATOS.nombre_curso);
        buildHTMLFicha(result);

        if (parseInt(result.DATOS.autorizacion_inscripcion)>=0){
            let cardInscripcionAcredita
            if (result.VALIDACION!=null){
                cardInscripcionAcredita = buildCardInscripcion(result.VALIDACION);
            }
            else{
                cardInscripcionAcredita = buildCardEnviada(result.VALIDACION);
            }

            $("#cardPago").html(cardInscripcionAcredita);
        }
        else{
            let cardCancelado = buildCardInscripcionCancelacion(result.DATOS);
            $("#cardPago").html(cardCancelado);
            $("#containerTblDocs").remove();
            $("#btnPrinter").remove();
        }
        let tablDocs = buildTBLDocsSolicitadosAlumno(result.DOCS);
        $("#containerDocs").html(tablDocs);
    })
}

function buildCardInscripcionCancelacion(DATOS){
    let template = `<div class="d-flex">
                        <div class="m-auto">
                            <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                        </div>
                        <div class="col-8 m-auto">
                            <h3>CANCELADO</h3>
                            <h6>Tu solicitud fue cancelada el <span id="cardPagoTotal">${getLegibleFechaHora(DATOS.fecha_conclusion)}</span></h6>
                            <div class="d-flex justify-center align-items-center">
                            <h6>Ya no puedes inscribirte al curso</h6>
                            </div>
                        </div>
                    </div>`;
    return template;
}

function buildCardEnviada(DATOS){
    let template = `<div class="d-flex">
                                    <div class="m-auto">
                                        <img src="../assets/images/icons/mail2.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="col-8 m-auto">
                                        <h5>Enviada</h5>
                                        <h6>Tu solicitud ha sido enviada, pero aun no se ha revisado.</h6>
                                    </div>
                                </div>`;
    return template;
}

function buildCardInscripcion(DATOS){
    return `<div class="d-flex">
                <div class="col-auto m-auto">
                    <img src="../assets/images/icons/checked1.svg" width="80" alt="svg ok">
                </div>
                <div class="col-8 m-auto">
                    <h5>Inscripción <strong>acreditada</strong></h5>
                    <h6>Se acredito el  ${getLegibleFechaHora(DATOS.fecha_validacion)}</h6>
                </div>
            </div>`;
}

function buildTBLDocsSolicitadosAlumno(DOCS) {
    let template ="";
    if (DOCS.length > 0){
        template = `<div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <tbody><thead>
                                <tr>
                                    <th>DOCUMENTO</th>
                                    <th>DETALLES</th>
                                    <th>VER</th>
                                    <th>OPCIONES</th>
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
                              <button type="button" class="btn btn-primary" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;

                        botonesAcion =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-danger btnCancelFile"><i class="fas fa-window-close"></i></button>
                                    </div>`;

                        fechaInfo = "Documento enviado el " + getLegibleFechaHora(doc.fecha_creacion);
                        badgeRevisa = "<br><span class='badge bg-info'>ENVIADO</span>";
                        break;
                    case 1:
                        botonesPDF =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;
                        botonesAcion =``;
                        fechaInfo = `Documento <span class='badge bg-success'>Aprobado</span>. <br> Subido el ${getLegibleFechaHora(doc.fecha_creacion)}`;
                        break;

                    case -1:
                        botonesPDF = "";
                        botonesAcion = `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-primary btnUpload" onclick="modalOpen('${doc.formato_admitido}');"><i class="fas fa-upload"></i></button>
                                    </div>`;
                        fechaInfo = "Pendiente para subir..."
                        break;

                    default:
                        botonesPDF = "";
                        botonesAcion = "";
                        fechaInfo = "El archivo fue rechazado debe subirse nuevamente";
                        break;
                }

                template += `<tr  idDoc="${doc.id_archivo}" idDocSol="${doc.id_doc_sol}" docSol="${doc.nombre_doc}" ${styleTr}>
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
                 <i class="fas fa-circle text-warning dotDocs small"></i> Enviado a Revisión
                </div>
                <div class="col-12 col-md-2">
                  <i class="fas fa-circle text-info dotDocs small"></i> Rechazado
                </div>
                <div class="col-auto">
                <i class="fas fa-circle text-black dotDocs small"></i> Pendiente para subir
                </div>
            </div>
        </div>
    `;
    }
    else{
        template += `<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Sin documentación</h4>
                      <p>Este curso no necesita documentación: Porfavor de esperar a que la inscripción sea aprobada por 
                      el departamento correspondiente.  
                      </p>
                      <hr>
                      <p class="mb-0">Si tu solicitud aun no se ha acreditado. Porfavor envia un correo al Centro de Computo para agilizar
                      tu proceso de inscripoción y revisar tu situación.</p>
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

$(document).on("click", ".btnUpload", function ()
{
    let lementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idDoc = $(lementDOM).attr("iddoc");
    let idDocSol = $(lementDOM).attr("iddocsol");
    let idDocSolName = $(lementDOM).attr("docSol");
    $("#dosSolName").html("Subir "+idDocSolName);
    $("#folio").val(ID_FICHA );
    $("#idDocSol").val(idDocSol);
    $("#idFile").val(idDoc!= "null"?idDoc:0);
});

$(document).on("click", ".btnCancelFile", function ()
{
    let elementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idDocSol = $(elementDOM).attr("iddocsol");
    let name = $(elementDOM).attr("docSol");
    let idFile = $(elementDOM).attr("iddoc");
    sweetConfirm('Cancelar envio del documento: '+ name, '¿Estas seguro de que quitar este documento?' +
        ' el documento se borrará y deberas subirlo nuevamente', async function (confirmed) {
        if (confirmed) {
            actionDocumentFile(idFile,idDocSol,ID_FICHA).then(function (result) {
                if (result.messageType == 1){
                    alertaEmergente(result.messageText);
                    consultaInfoInscripcionAlumno();
                }
                else if (result.messageType == 0){
                    alerta("Archivo no procesado",result.messageText, "error");

                }
                else { alerta("Error interno",result.messageText, "error"); }
            })

        }
    });

});

function modalOpen(acepta) {
    $("#modal-uploadFile").modal('show');
    let aceptaType = aceptFiles(acepta);
    $("#archivo").attr('accept',aceptaType);
}

//Update PDF Curso
$("#frm-upload-file").on("submit", function(e){
    e.preventDefault();
    let fileSelect = document.getElementsByName("fileupload");
    console.log(fileSelect);
        var f = $(this);
        console.log(f)
        var formData = new FormData(document.getElementById("frm-upload-file"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "../app/webhook/alumno.upload-file.php",
            type: "post",
            dataType: "html",
            data: formData,
            contentType: false,
            processData: false
        }).done(function(res){
            console.log(res);
            let response = JSON.parse(res);
            console.log(response);
            let titulo;
            if (response.type == 1){
                titulo= "ARCHIVO ENVIADO";
                consultaInfoInscripcionAlumno();
            }
            else if (response.type == 0){
                titulo= "NO SELECCIONÓ UN ARCHIVO";
            }
            else{
                titulo= "ERROR GENERAL";
            }
            alerta(titulo,response.mensaje,response.action);
            $("#frm-upload-file").trigger('reset');
            $("#modal-uploadFile").modal('hide');
        });



});


function viewFileModal(path,name, id) {
    let body = `<embed src="${path}" frameborder="0" width="100%" style="height: 70vh;">`;
    $('#fileView').html(body);
    $('#modalViewFile').modal('show');
    $('#viewFileName').html(name);
    $('#idDocument').val(id);
}