function loadSolicitudes(idAsig) {
    consultaListaInscAsig(idAsig).then(function (result) {
        buildTBLListaOficial(result.OficList);
        buildTBLSolicPendientes(result.SolicPend);
    })
}

function buildTBLListaOficial(LISTA) {
    $("#badgeAprobados").html(LISTA.length);
    let template = ``;
    if (LISTA.length>0){
        let idAsig = LISTA[0].id_asignacion_fk;
        template = `
            <table class="table table-hover table-striped" id="tblListaGrupo">
                <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DETALLES</th>
                    <th style='width: 300px;'>SOLICITUD</th>
                    <th style='width: 350px;'>ACREDITACION</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody id="tbl-listaGrupo">`;
        LISTA.forEach(
            (insc)=>
            {
                let fechaHora = getLegibleFechaHora(insc.fecha_validacion);
                let fechaHoraAprueba = getLegibleFechaHora(insc.fecha_validacion);
                let fechaHoraPago = getLegibleFechaHora(insc.fecha_pago);
                let estatusInsc = insc.estatusInscripcion === "1"? 'success' :'warning';
                let estatusInscText = insc.estatusInscripcion === "1"? '<i class="fas fa-check-circle text-success"></i> Aprobado' :'<i class="fas fa-ban text-danger"></i> BAJA';
                let estatusAlumnos = insc.estatusAlumno === "1" ? 'success':'danger';
                let tramite;
                if (insc.validacion_constancia==="1"){
                    tramite = "CONCLUIDO, Constrancia Acreditada";
                }
                else if (insc.estatusInscripcion === 1 ){
                    tramite = "Por calificar";
                }
                else{
                    tramite = "iniciado";
                }
                template += `
                <tr folio="${insc.id_inscripcion}">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="${insc.perfil_image}" alt="" srcset="">
                                <span class="avatar-status bg-${estatusAlumnos}"></span>
                            </div>
                            <div class="d-flex flex-column justify-content-center px-3">
                                <p class="mb-0 text-xs">${insc.nombre_completo}</p>
                                <p class="text-sm text-primary mb-0"><i class="fas fa-id-card"></i> ${insc.matricula}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-xs"><strong>${insc.carrera_especialidad}</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.tipo_procedencia} (${insc.siglas})</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.email}</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.telefono}</strong></p>
                        </div>
                    </td>
                    <td> 
                    <div class="d-flex align-items-center">
                                <div class="col-auto" style="width: 30px;">
                                    <div class="spinner-grow text-${estatusInsc}" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="mb-0 text-xs"><strong><strong>Recibida el  ${fechaHora}</strong></strong></p>
                                    <p class="mb-0 text-xs"><strong>${estatusInscText}</strong></p>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                          <p class="ms-3 mb-0">Pagado ${fechaHoraPago}. Aprobada el ${fechaHoraAprueba}</p>
                        </div>
                    </td>
                    <td>
                           <a href="#" class="btn btn-primary btnViewFicha" 
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Ver ficha de Inscripcion">
                           <i class="far fa-file-alt"></i>
                           </a>
                        <a href="#" class="btn btn-outline-primary btnVieDocs" data-bs-toggle="modal" data-bs-target="#viewDocsInscripcion" 
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Ver documentacion">
                        <i class="fas fa-folder"></i>
                        </a>
                    </td>
                </tr>`;
            }
        );
        template += `
                </tbody>
            </table>
            <button class="btn btn-primary btnDowloadFileList" onclick="dowloadExcel(${idAsig})">
                <i class="fas fa-download"></i>Descargar
            </button>`;
    }
    else{
        template = `<div class="alert alert-warning d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Este grupo no tiene Inscripciones Confirmadas aun. Porfavor vaya a las solicitudes y revise la informacion.
                        Una vez aprobado la solicitud, esta aparecerá en este apartado.
                      </div>
                    </div>`;
    }

    $("#lista_oficial_container").html(template);
}

function buildTBLSolicPendientes(LISTA) {
    $("#badgePendientes").html(LISTA.length);
    let template = ``;
    if (LISTA.length>0){
        template = `
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="tblSolInscripcion">
                <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DETALLES</th>
                    <th>TRÁMITE</th>
                    <th style='width: 300px;'>SOLICITUD</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody id="tbl-SolInsc">
                `;
        LISTA.forEach(
            (insc)=>
            {
                let fechaHora = getLegibleFechaHora(insc.fecha_solicitud);
                let estatusInsc = insc.estatusInscripcion === "1"? 'warning' :'danger';
                let estatusPago = insc.pago_confirmado === "1"? ' PAGADO' :' PENDIENTE';
                let statusInsc = insc.autorizacion_inscripcion === "1"? ' APROBADA' :' POR REVISAR';
                let estatusAlumnos = insc.estatusAlumno === "1" ? 'success':'danger';
                template += `
                <tr folio="${insc.id_inscripcion}">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="${insc.perfil_image}" alt="" srcset="">
                                <span class="avatar-status bg-${estatusAlumnos}"></span>
                            </div>
                            <div class="d-flex flex-column justify-content-center px-3">
                                <p class="mb-0 text-xs">${insc.nombre_completo}</p>
                                <p class="text-sm text-primary mb-0"><i class="fas fa-id-card"></i> ${insc.matricula}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-xs"><strong>${insc.carrera_especialidad}</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.tipo_procedencia} (${insc.siglas})</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.email}</strong></p>
                            <p class="mb-0 text-xs"><strong>${insc.telefono}</strong></p>
                        </div>
                    </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="col-auto" style="width: 30px;">
                                    <div class="spinner-grow text-${estatusInsc}" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="mb-0 text-xs"><strong>PAGO: </strong>${estatusPago} </p>
                                    <p class="mb-0 text-xs"><strong>SOLICITUD: </strong>${statusInsc} </p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                              <p class="font-bold ms-3 mb-0">Recibida el  ${fechaHora}</p>
                           </div>
                        </td>
                        <!-- BOTON ACCIONES -->
                        <td>
                          <a href="#" class="btn btn-primary btnViewFicha" 
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Ver ficha de Inscripcion">
                           <i class="far fa-file-alt"></i>
                           </a>
                            <a href="#" class="btn btn-outline-primary btnVieDocs" data-bs-toggle="modal" data-bs-target="#viewDocsInscripcion" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Ver documentacion">
                            <i class="fas fa-folder"></i>
                            </a>
                        </td>
                    </tr>`;
            }
        );
        template += `
            </tbody>
        </table> </div>`;
    }
    else{
        template = `<div class="alert alert-success d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <div>
                        Excelente! No hay solicitudes por revisar.
                      </div>
                    </div>`;
    }

    $("#solic_pendientes_container").html(template);
}

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnViewFicha", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".btnVieDocs", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    consultaAsyncDocsRevisa(id,1).then(function (response) {
        let templateDocs = buildTBLDocsSolicitados(response);
        $("#containerDocs").html(templateDocs);
    })
});

function dowloadExcel(idAsig) {
    var url = './reportes/download_lists.php';
    redirect_by_post(url, {  id: idAsig }, true);
}