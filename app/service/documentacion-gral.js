//regresa un template datatable con una lista de documentos
function buildTBLDocsSolicitados(DOCS) {
    let template = "";
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
                let isConfirm = doc.obligatorio === "1" ? true:false;
                switch (estadoFile) {
                    case 0:
                        botonesPDF =
                            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                              <button type="button" class="btn btn-primary"   data-bs-toggle="modal" data-bs-target="#modalViewFile" 
                              onclick="viewFileModal('${doc.path}','${doc.nombre_doc}','${doc.id_archivo}',${isConfirm});"><i class="fas fa-eye"></i></button>
                              <a href="${doc.path}" download="" target="_blank"  type="button" class="btn btn-info"><i class="fas fa-download"></i></a>
                            </div>`;

                        botonesAcion =`<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                      <button type="button" class="btn btn-success btnConfirmFile"><i class="fas fa-check-square"></i></button>
                                      <button type="button" class="btn btn-danger btnCancelFile"><i class="fas fa-window-close"></i></button>
                                    </div>`;

                        fechaInfo = "Revisar Documento. <br> Subido el " + doc.fecha_creacion;
                        // styleTr = 'style="background-color: lightgray;"';
                        let revisaAdmin =isConfirm ? '<i class="fas fa-user-tie"></i>':'';
                        badgeRevisa = "<br><span class='badge bg-warning'>REVISAR "+revisaAdmin+"</span>";
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
                            <tr confirm="${isConfirm}"  idDoc="${doc.id_archivo}" ${styleTr}>
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
function viewFileModal(path,name, id,isConfirm) {
    let body = `<embed src="${path}" frameborder="0" width="100%" style="height: 70vh;">`;
    let titulo = name + (isConfirm ? " -- (REQUIERE CONFIRMACION POR CONTRASEÑA)":"");
    $('#fileView').html(body);
    $('#viewFileName').html(titulo);
    $('#idDocument').val(id);
    $("#chkPw").attr('checked', isConfirm);
}

$(document).on("click", ".actionFile", function ()
{
    let ElementDOM = $(this)[0];
    let actionToDo = $(ElementDOM).attr("action");
    let MjeAction = getTipoAccion(actionToDo);
    let idArchivo = $("#idDocument").val();
    let confirm = $("#chkPw").attr('checked')? true:false;
    actionDocument(idArchivo,actionToDo,MjeAction,confirm)
});

$(document).on("click", ".btnConfirmFile", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idSelected = $(ElementDOM).attr("idDoc");
    let confirm = $(ElementDOM).attr("confirm") ==="true"?true:false;
    actionDocument(idSelected,1,"ACREDITAR",confirm);
});

$(document).on("click", ".btnCancelFile", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement.parentElement;
    let idSelected = $(ElementDOM).attr("idDoc");
    let confirm = $(ElementDOM).attr("confirm") ==="true"?true:false;
    actionDocument(idSelected,-1,"RECHAZAR",confirm);
});

function actionDocument(idFile,option,action,confirma) {
    let titulo = action;
    let mjeQuestion  = "¿Estas seguro de que deseas "+action+" este documento?";
    sweetConfirm(titulo ,mjeQuestion, async function (confirmed) {
        if (confirmed) {
            //sendAcionFile
            let pwAdmin = null;
            if (confirma)
            {
                callbackPwAdmin().then(function (pw) {
                    pwAdmin = pw.value;
                    if(pw.isConfirmed && (pw.value != null || pw.value.length()>0)){
                        revisaDocumento(idFile, option,pwAdmin);
                    }
                })
            }else{
                revisaDocumento(idFile, option,pwAdmin);
            }
            $("#modalViewFile").modal('hide');
        };
    });
}

async function callbackPwAdmin() {
    return { value: password } = await Swal.fire({
        title: 'AUNTENTICAR CUENTA',
        icon: 'info',
        input: 'password',
        inputLabel: "Se requiere la contraseña de administrador para procesar este archivo",
        inputPlaceholder: 'Contraseña de administrador',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        inputAttributes: {
            maxlength: 100,
            autocapitalize: 'off',
            autocorrect: 'off'
        }
    }).then((password)=>{
        return password ? password :null;
    });
}


function revisaDocumento(idFile,value,pw){
    //consulto nuevamente el archivo para verificar que sea necesario acreitar identidad.
    revisionDocumentoRecibido(idFile,value,pw).then(function (resultado){
        switch (resultado.mjeType) {
            case 0:
                alerta(resultado.Mensaje, "ERROR", "warning");
                break;
            case 1:
               alertaEmergente("Se ha marcado el documento, ya se notificó al alumno");
               //Consultar documentacion
                try {
                    consultaDocsPorRevisar();
                }catch (e) {
                    $("#viewDocsInscripcion").modal('hide');
                    $("#modalViewFile").modal('hide');
                }
                
                break;
            case 99:
                alerta(resultado.Mensaje, "La contraseña es incorrecta o tal vez NO tiene los permisos necesarios para procesar este tipo de archivo.", "error")
                break;
            default:
                alerta(resultado.Mensaje,"Se genero un error no identificado","error");
                break;
        }
    });
}


