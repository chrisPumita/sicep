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
                        //Archivo enviado por el alumno a revision
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
                        //Archivo validado
                        botonesPDF =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;
                        botonesAcion =``;
                        fechaInfo = `Documento <span class='badge bg-success'>Aprobado</span>. <br> Subido el ${getLegibleFechaHora(doc.fecha_creacion)}`;
                        break;

                    case -1:
                        //Archivo pendiente para subir
                        botonesPDF = "";
                        botonesAcion = `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-primary btnUpload" onclick="modalOpen('${doc.formato_admitido}');"><i class="fas fa-upload"></i></button>
                                    </div>`;
                        fechaInfo = "Pendiente para subir..."
                        break;

                    default:
                        botonesPDF =
                            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;
                        botonesAcion = `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-primary btnUpload" onclick="modalOpen('${doc.formato_admitido}');"><i class="fas fa-upload"></i></button>
                                    </div>`;
                        let moreInfo = estadoActualArchivoViewAlumno(doc.estatusFile);
                        fechaInfo = "El archivo fue rechazado, debe subirse nuevamente<br><blockquote>"+moreInfo+".</blockquote>";
                        break;
                }

                template += `<tr id_insc="${doc.id_inscripcion}"  idDoc="${doc.id_archivo}" idDocSol="${doc.id_doc_sol}" docSol="${doc.nombre_doc}" ${styleTr}>
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


$(document).on("click", ".btnUpload", function ()
{
    let lementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idDoc = $(lementDOM).attr("iddoc");
    let idDocSol = $(lementDOM).attr("iddocsol");
    let idDocSolName = $(lementDOM).attr("docSol");
    $("#dosSolName").html("Subir "+idDocSolName);
    $("#folio").val(ID_FICHA);
    $("#idDocSol").val(idDocSol);
    $("#idFile").val(idDoc!= "null"?idDoc:0);
});

$(document).on("click", ".btnCancelFile", function ()
{
    let elementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idDocSol = $(elementDOM).attr("iddocsol");
    let name = $(elementDOM).attr("docSol");
    let idFile = $(elementDOM).attr("iddoc");
    let idFicha = $(elementDOM).attr("id_insc");
    sweetConfirm('Cancelar envio del documento: '+ name, '¿Estas seguro de que quitar este documento?' +
        ' el documento se borrará y deberas subirlo nuevamente', async function (confirmed) {
        if (confirmed) {
            actionDocumentFile(idFile,idDocSol,idFicha).then(function (result) {
                if (result.messageType == 1){
                    alertaEmergente(result.messageText);
                    try{
                        consultaInfoInscripcionAlumno();
                    }
                    catch (e) {
                        //documentacion load
                        consultaDocsAlumnoPorRevisar();
                    }
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
    var f = $(this);
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
        let response = JSON.parse(res);
        let titulo;
        if (response.type == 1){
            titulo= "ARCHIVO ENVIADO";
            try{
                consultaInfoInscripcionAlumno();
            }
            catch (e) {
                //documentacion load
                consultaDocsAlumnoPorRevisar();
            }
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