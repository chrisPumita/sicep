//regresa un template datatable con una lista de documentos
function buildTBLDocsSolicitados(DOCS) {
    let template;
    if (DOCS.length > 0){
        template = `<div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <tbody><thead>
                                <tr>
                                    <th>DOCUMENTO</th>
                                    <th>ESTADO</th>
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
                              <button type="button" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#modalViewFile" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}');"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;

                        botonesAcion =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-success btnConfirmFile"><i class="fas fa-check-square"></i></button>
                                      <button type="button" class="btn btn-danger btnCancelFile"><i class="fas fa-window-close"></i></button>
                                    </div>`;

                        fechaInfo = "Revisar Documento. <br> Subido el " + doc.fecha_creacion;
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
                        fechaInfo = "Esperando..."
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

//funciones de acceso
function viewFileModal(path,name, id) {
    let body = `<embed src="${path}" frameborder="0" width="100%" style="height: 70vh;">`;
    $('#fileView').html(body);
    $('#viewFileName').html(name);
    $('#idDocument').val(id);
}

$(document).on("click", ".actionFile", function ()
{
    let ElementDOM = $(this)[0];
    console.log(ElementDOM);
    let actionToDo = $(ElementDOM).attr("action");
    let MjeAction = getTipoAccion(actionToDo);
    sweetConfirm(MjeAction, '¿Estas seguro de que deseas marcar el archivo como: '+MjeAction, function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            $("#modalViewFile").modal('hide');
        }
    });
});

$(document).on("click", ".btnConfirmFile", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement.parentElement;
    console.log(ElementDOM);
    let idSelected = $(ElementDOM).attr("idDoc");
    console.log(idSelected);
    sweetConfirm("Acreditar Documento", '¿Estas seguro de que deseas ACREDITAR este documento?', function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            alert("CONFIRMADO");
        }
    });
});

$(document).on("click", ".btnCancelFile", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement.parentElement;
    console.log(ElementDOM);
    let idSelected = $(ElementDOM).attr("idDoc");
    console.log(idSelected);
    sweetConfirm("RECHAZAR DOCUMENTO", '¿Estas seguro de que deseas RECHAZAR este documento? ', function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            alert("RECHAZADO");
        }
    });
});
