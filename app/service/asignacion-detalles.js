let ID_ASIG = $("#idAsignacion").val();

$(document).ready(function() {
    consultaListaProfesores();
    loadGeneraciones();
    loadSemestre();
    loadSolicitudes(ID_ASIG);
});

window.onload = function(){
    consultaInfoAsignacion(ID_ASIG,1);
}


//Consulta de asignacion con funcion asincrona

function consultaInfoAsignacion(idAsig,filtro) {
    consultaInfoAsignacionAjax(idAsig,filtro).then(function (e) {
        if (e.length==1){
            loadDataAsignacion(e[0]);
        }
    });
}

function loadSolicitudes(idAsig) {
    consultaListaInscAsig(idAsig).then(function (result) {
        console.log(result);
        buildTBLListaOficial(result.OficList);
        buildTBLSolicPendientes(result.SolicPend);
    })
}

function buildTBLListaOficial(LISTA) {
    $("#badgeAprobados").html(LISTA.length);
    let template = ``;
    if (LISTA.length>0){
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
                        <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Dar de Baja">
                        <i class="fas fa-ban"></i></a>
                    </td>
                </tr>`;
            }
        );
        template += `
                </tbody>
            </table>
            <button class="btn btn-primary btnDowloadFileList" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#horarioVirtual">
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
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#previaDocs" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Aprobar">
                            <i class="fas fa-check-circle"></i>
                            </a>
                          <a href="#" class="btn btn-primary btnViewFicha" 
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Ver ficha de Inscripcion">
                           <i class="far fa-file-alt"></i>
                           </a>
                            <a href="#" class="btn btn-outline-primary btnVieDocs" data-bs-toggle="modal" data-bs-target="#viewDocsInscripcion" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Ver documentacion">
                            <i class="fas fa-folder"></i>
                            </a>
                            <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#confrimaCnacelacion"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Dar de Baja" >
                            <i class="fas fa-ban"></i></a>
                        </td>
                    </tr>`;
            }
        );
            template += `
            </tbody>
        </table>`;
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

function loadDataAsignacion(asig){
    consultaGrupos(asig.id_curso).then(function () {

        $("#fondoImg").css("background", "url('"+asig.banner_img+"')");

        $("#profesorAsig").prepend("<option value='0' selected>Ninguno</option>");
        $("#grupos").prepend("<option value='0' selected>Ninguno</option>");
        $("#generacion").prepend("<option value='0' selected>Ninguno</option>");
        $("#semestre").prepend("<option value='0' selected>Ninguno</option>");
        let visible = asig.visible_publico === "1" ? '<i class="fas fa-eye text-primary"></i> VISIBLE' : '<i class="fas fa-eye-slash text-danger"></i> NO PUBLICADO';
        $("#liCursoAction").on("click", );
        $('#liCursoAction').attr('onClick', 'openCurso('+asig.id_curso+');');
        $("#nameAsignacion").html(asig.nombre_curso);
        $("#nameCursoTittle").html(asig.nombre_curso);
        $("#nameBreadCurso").html(asig.nombre_curso);
        $("#lblVisible").html(visible);
        $("#grupoBread").html('GPO-'+asig.grupo+' - GEN'+ asig.generacion);
        $("#profesorAsigActual").val(asig.prefijo+' '+asig.nombre_completo);
        $("#lblProfesorName").html(asig.prefijo+' '+asig.nombre_completo);

        let estatusAsig = estadoAsig(asig.estado_asig);
        $("#statusFlag").html(estatusAsig);
        $("#lblGrupo").html(asig.grupo);
        $("#lblGeneracion").html(asig.generacion);
        $("#lblModalidad").html(getModalidadCurso(asig.modalidad));
        $("#lblCupo").html(asig.cupo +' lugares');
        $("#lblCampusCede").html(getCampusCede(asig.campus_cede));
        $("#lblSemestre").html(asig.semestre);
        $("#lblCostoFinal").html('$ '+asig.costo_real);
        $("#lblNotas").html(asig.notas);
        //Fechas
        $("#lblInsc").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_inscripcion) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_lim_inscripcion));
        $("#lblClases").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin));
        $("#lblCalif").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_actas) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin_actas));

        $("#grpoActual").val(asig.grupo);
        $("#genActual").val(asig.generacion);
        $("#semestreActual").val(asig.semestre);
        $("#idCursoGrupo").val(asig.id_curso);
        $("#modalidad-edita").val(asig.modalidad);
        $("#numCupo").val(asig.cupo);
        $("#campus").val(asig.campus_cede);
        $("#notas").val(asig.notas);
        $("#costo").val(asig.costo_real);
        $("#lblCostoFinalCallout").html('$ '+asig.costo_real);
        $("#costoRecom").val(asig.costo_sugerido);
        $("#visibilidad").val(asig.visible_publico);

        $("#InicioCurso").val(asig.fecha_inicio);
        $("#finCurso").val(asig.fecha_fin);
        $("#inicioInsc").val(asig.fecha_inicio_inscripcion);
        $("#finInsc").val(asig.fecha_lim_inscripcion);
        $("#inicioCal").val(asig.fecha_inicio_actas);
        $("#finCal").val(asig.fecha_fin_actas);
        consultaTblDescuentosAplicados(asig.id_curso,asig.costo_real);
    })
}

//CRUD DESCUENTOS
function consultaTblDescuentosAplicados(idCurso,costoAplicado) {
    consultaDescuentos(idCurso).then(function (e) {
        buildTBLHtmlDescuentos(e,costoAplicado);
    });
}

function buildTBLHtmlDescuentos(DESCUENTOS,costoAplicado) {
    let template ="";
    let btnidCurso =0;
    if (DESCUENTOS.length > 0) {
        template += `<table class="table table-hover table-striped" >
                            <thead>
                            <tr>
                                <th>DIRIGIDO A</th>
                                <th>DESCUENTO</th>
                                <th>T.DESC</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-Desc">`;
        DESCUENTOS.forEach(
            (des)=>
            {
                btnidCurso = des.id_curso_fk;
                let costoFinal = parseFloat(costoAplicado);
                let DescApli = parseFloat(des.porcentaje_desc);
                let DescTotal = (costoFinal*DescApli)/100;
                let totalDesc = costoFinal-DescTotal;
                let descApli = parseInt(des.porcentaje_desc)!="0" ? `<span class="badge bg-info"><i class="fas fa-tag"></i> ${des.porcentaje_desc}% OFF</span>`: 'N/A';

                template += `<tr id_procedencia="${des.id_tipo_procedencia_fk}">
                                <td>${des.tipo_procedencia}</td>
                                <td>${descApli}</td>
                                <td>-$ ${DescTotal}</td>
                                <td>$ ${totalDesc}</td>
                            </tr>`;
            }
        );

        template += `      </tbody>
                        </table>
                        <button class="btn btn-primary w-50" onclick="openCurso(${btnidCurso});">
                            <i class="fas fa-percent"></i> Editar
                        </button>`;
    }
    else{
        template = `<div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                      <strong> ATENCION: </strong>
                       Nadie podra inscribirse a este curso, agregue al menos un grupos de alumnos de los que se pueden inscribir,
                       al mismo tiempo puede agregarles el descuento que desee. Este se aplicara de forma automatica al momento de
                       abrir grupos para nuevas generaciones.
                      </div>
                    </div>`;
    }
    $("#containerDescuentos").html(template);
}

$("#frm-update-detalles-asig").on("submit", function(e){
    //Ruta del Webbhook
    let ruta = "./webhook/update-detalles-asig.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        idAsignacion : $("#idAsignacion").val(),
        idProfesorAsig : $("#profesorAsig").val(),
        idGrupo : $("#grupos").val(),
        idGeneracion : $("#generacion").val(),
        semestre : $("#semestre").val(),
        costo : $("#costo").val(),
        modalidad : $("#modalidad-edita").val(),
        visibilidad : $("#visibilidad").val(),
        cupo: $("#numCupo").val(),
        campus :$("#campus").val(),
        notas : $("#notas").val()
    };
    //Llamado de la funcion Async y resolviendo la promesa
    enviaForm(params,ruta).then(function () {
        $("#editarDetallesAsig").modal('hide');
        consultaInfoAsignacion(ID_ASIG,1);
    });
    e.preventDefault();
});

$("#frm-update-detalles-asig-fechas").on("submit", function(e){
    //Ruta del Webbhook
    let ruta = "./webhook/update-fechas-asignacion.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        idAsignacion : $("#idAsignacion").val(),
        inicioCurso: $("#InicioCurso").val(),
        finCurso:$("#finCurso").val(),
        inicioInsc:$("#inicioInsc").val(),
        finInsc: $("#finInsc").val(),
        inicioCal: $("#inicioCal").val(),
        finCal: $("#finCal").val()
    };
    //Llamado de la funcion Async y resolviendo la promesa
    enviaForm(params,ruta).then(function () {
        $("#editarDetallesAsigFechas").modal('hide');
        consultaInfoAsignacion(ID_ASIG,1);
    });
    e.preventDefault();
});

function openCurso(id) {
    let url = "./detalles-curso#sectionDescuentos";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnViewFicha", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    console.log(elementClienteSelect);
    let id = $(elementClienteSelect).attr("folio");
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".btnVieDocs", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    console.log(id);
    consultaAsyncDocsRevisa(id,1).then(function (response) {
        console.log(response);
        let templateDocs = buildTBLDocsSolicitados(response);
        $("#containerDocs").html(templateDocs);
    })
});