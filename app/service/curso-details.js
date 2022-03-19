
$(document).ready(function() {
    consultaGrupos(ID_CURSO);
    cargaAulasListDespl();
    cargaTblDocumentacion(ID_CURSO);
    consultaTblDescuentos(ID_CURSO);
    cargaListaDocsModal();
});

function cargaListaDocsModal() {
    consultaDocsAsync().then(function (JSONData) {
        let template = "";
        JSONData.forEach(
            (doc)=>{template+= `<option value="${doc.id_documento}">${doc.nombre_doc}</option>`; }
        );
        $("#modalListDosc").html(template);
    });
}

//Update Acreditar/ Remover Acreditacion Curso
function cambiaEstado(estatus,mensaje,isAcredit){
    let idCurso= ID_CURSO;
    let mjeText= "¿Estas seguro de que deseas "+mensaje+" este curso?";
    sweetConfirm('Estado del curso', mjeText, function (confirmed) {
        if (confirmed) {
            //Realizamos el envio de datos del estatus, y del id del curso
            $.ajax({
                url: "./webhook/update-estatus-curso.php",
                type: 'POST',
                dataType: "json",
                data: {
                    idCurso: idCurso,
                    estatus : estatus,
                    isAcredit : isAcredit
                },
                success: function(data){
                    let id = ID_CURSO;
                    cargaCursoDetails(1,id);
                },
                error: function(e) {
                    alert("Error occured")
                }
            });
        }
    });
}

function rechazar() {
    let idCurso= ID_CURSO;
    let mjeText= "¿Estas seguro de que deseas RECHAZAR este curso?. El autor podra modificarlo nuevamente.";
    sweetConfirm('Rechazar', mjeText, function (confirmed) {
        if (confirmed) {
            //Realizamos el envio de datos del estatus, y del id del curso
            $.ajax({
                url: "./webhook/rechazar-propuesta.php",
                type: 'POST',
                dataType: "json",
                data: {id: idCurso},
                success: function(data){
                    alerta("SE RECHAZO EL CURSO",data.Mensaje,'info')
                    setTimeout( function() { window.location.href = "lista-cursos"; }, 3000 );
                },
                error: function(e) {
                    alert("Error occured")
                }
            });
        }
    });
}

function buildCardStatusAcreditacion(obj_result,acreditado,activo) {
    let tmplate;
    if(acreditado){
        let leyenda = activo ? `<h6><i class="fas fa-circle text-success"></i> CURSO ACTIVO</h6>`:`<h6><i class="fas fa-circle text-warning"></i> CURSO SUSPENDIDO</h6>`;
        let btnActiva = activo ? `<a href="#" class="btn btn-warning me-1 mb-1" onclick="cambiaEstado(0,'Suspender',true);"><i class="fas fa-clock"></i> Suspender</a>`
            : `<a href="#" class="btn btn-success me-1 mb-1" onclick="cambiaEstado(1,'Habilitar',true);"><i class="fas fa-clock"></i> Habilitar</a>`;
        tmplate =`
                <div class="d-flex">
                    <div class="m-auto">
                        <img src="../assets/images/icons/ok.svg" width="80" alt="svg ok">
                    </div>
                    <div class="col-8 m-auto">
                        <h5>Aprobado por:</h5>
                        <input type="hidden" value="1" id="valAcredCurso">
                        <h5><strong>${obj_result.prefijo} ${obj_result.nombre} ${obj_result.app} ${obj_result.apm}</strong></h5>
                        <h6>No Trabajador: ${obj_result.no_trabajador}</h6>
                        <h6>Departamento de ${obj_result.depto_name}</h6>
                        ${leyenda}
                    </div>
                </div>
                <div class="col-auto px-3 d-flex justify-content-end">
                    ${btnActiva}
                </div>
            `;
    }
    else{
        tmplate =`
            <div class="d-flex">
                <div class="m-auto">
                    <img src="../assets/images/icons/cancel.svg" width="80" alt="svg ok">
                </div>
                <div class="m-auto">
                <input type="hidden" value="0" id="valAcredCurso">
                    <h5>Sin acreditar</h5>
                    <h6><strong>Este curso aun no se ha acreditado.</strong></h6>
                    <h6>Si este curso cumple con los requerimentos, puede aprobar este curso y comenzar a asignar grupos. Si no los cumple, de click en 
                    rechazar y el Autor podrá modificarlo.</h6>
                </div>
            </div>
            <div class="card-body d-flex text-align-right">
                <button type="button" class="btn btn-success btn-block me-1 mb-1"onclick="cambiaEstado(1,'Acreditar',false)">Acreditar</button>
                <button type="button" class="btn btn-danger btn-block me-1 mb-1"onclick="rechazar()">Rechazar</button>
            </div>`;

        $("#sectionDescuentos").html("");
    }
    $("#detallesAprobacionCurso").html(tmplate);
}

function detallesAcreditacion(id_Curso,acreditado,activo) {
    consultaDetailsAcredCursoAjax(id_Curso).then(function (result) {
        buildCardStatusAcreditacion(result,acreditado,activo);
    })
}

function cargaTblDocumentacion(id) {
    consultaDocumentacion(id).then(function (e) {
       buildTBLHtmlDocsSol(e)
    });
}

function buildTBLHtmlDocsSol(DOSC) {
    let template;
    if (DOSC.length > 0) {
        template= `
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>DOCUMENTO</th>
                        <th>DETALLES</th>
                        <th>REVISA</th>
                        <th>CONFIRMA INSCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                <tbody>`;
        DOSC.forEach(
            (doc)=>
            {
                let acre = doc.tipo == "1" ?`<i class="fas fa-user-shield"></i> ADMIN`:`CUALQUIERA`;
                let confirmaInsc = doc.obligatorio == "1" ?  `<ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center"  data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Al confirmar la entrega de este documento, automaticamente se confirmará la inscripcion del alumno, y este quedará asentado el la lista oficial. ">
                            <span> CONFIRMA</span>
                            <span class="badge bg-success badge-pill badge-round ml-1"><i class="fas fa-flag"></i></span>
                        </li>
                    </ul>` : `` ;
                template+= `
                        <tr id_doc_sol="${doc.id_doc_sol}">
                            <td>${doc.nombre_doc}</td>
                            <td>${doc.formato_admitido} - ${doc.peso_max_mb}MB Max.</td>
                            <td>${acre}</td>
                            <td>${confirmaInsc}</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="editaDocumentacion(${doc.id_doc_sol},${doc.id_documento_fk},${doc.obligatorio})"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger deleteDocSol"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
            }
        );
        template+= `
                </tbody>
              </table>`;
    }
    else{
        template= `
                <div class="alert alert-light alert-dismissible show fade">
                   No hay documentos requeridos. Agregue los documentos que se requieren para inscribirse en algun grupo
                   de este curso. Si no es necesario algun documento, omita esta opcion. Pero debe Acreditar las inscripciones
                   de forma manual.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblDocSol").html(template);
}

//Funcion agrega documentacion solicitada
function addDocumentacion(){
    $("#documentacionModal").modal('show');
    $("#idDocumentoSolicitado").val(0);
    $("#inscripcionConfirm").val(0);
}

//funcion actualiza documento solicitado
function editaDocumentacion(idDocSol,idDoc,inscripcion){
    $("#documentacionModal").modal('show');
    $("#idDocumentoSolicitado").val(idDocSol); 
    $("#modalListDosc").val(idDoc);
    $("#inscripcionConfirm").val(inscripcion);
}
//funcion actualiza agrega documento solicitado
$("#frm-add-update-docs").on("submit", function(e){
    let route = "./webhook/crud-doc-sol.php";
    var params = {
        idDocSol : $("#idDocumentoSolicitado").val(),
        idDocumento : $("#modalListDosc").val(),
        idCurso : ID_CURSO,
        obligatorio : $("#inscripcionConfirm").val()
    };
    //Funcion async
    enviaForm(params,route).then(function () {
        $("#documentacionModal").modal('hide');
        $("#frm-add-update-docs").trigger('reset');
        let id= ID_CURSO;
        cargaTblDocumentacion(id);
        
    });
    e.preventDefault();
});
//Elimina Documento Solicitado
$(document).on("click", ".deleteDocSol", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id_doc_sol");
    var route= "./webhook/delete-doc-sol.php";
    sweetConfirm('Eliminar Documento', '¿Estas seguro de que deseas eliminar este Documento?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                let id= ID_CURSO;
                cargaTblDocumentacion(id);
            });
        }
    });
});

function openGroup(id) {
    let url = "./nueva-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}


function buildHTMLDespEdificios(AULAS) {
    let template = "";
    let cupo = 0;
    let cont =0;
    AULAS.forEach(
        (AULA)=>{
            cont ++;
            if (cont===1) cupo = AULA.cupo;
            template += `<option value="${AULA.id_aula}"> ${AULA.edificio} - ${AULA.aula}</option>`;
        }
    );
    $("#aulas").html(template);
    $("#cupoAula").html(cupo);

}

//CRUD DESCUENTOS
function consultaTblDescuentos(idGpo) {
    consultaDescuentos(idGpo).then(function (e) {
        buildTBLHtmlDescuentos(e);
        comparaProcedencias(e).then(function (PROC_LIST) {
            let template;
            if (PROC_LIST.length > 0) {
                template = `<form id="frm-add-desc">
                                <div class="form-group row p-3" id="containerLisGpos">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Seleccione Procedencia</label>
                                    <select class="form-control w-auto" id="listProcedencias" name="listProcedencias"> 
                                    `;
                                PROC_LIST.forEach(
                                    (pro)=>
                                    {
                                        template += `<option value="${pro.id_tipo_procedencia}">${pro.tipo_procedencia}</option>`;
                                    }
                                );
                template += `
                                    </select>
                                     <input type="number" min="0"  max="100" required class="form-control" id="descuentoProcedencia" name="descuentoProcedencia" aria-describedby="aulaHelp" placeholder="0" value="0">
                                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-percent"></i> Descuento</label>
                                    <button id="btnAddProcedencia" type="button" class="btn btn-primary" onclick="addDescCurso();"> <i class="fas fa-plus-square"></i> Agregar </button>
                                </div>
                            </div>
                        </form>`;
            }
            else{
                template = `<div class="alert alert-success d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                              <div>
                                Este curso es apto para todo publico. Ya se han agregado todas las procedencias posibles.
                              </div>
                            </div>`;
            }
            $("#containerNewAsignaciones").html(template);
        })
    });
}

async function comparaProcedencias(PROC_APLI) {
    const PROCEDENCIAS = await consultaProcedenciasAjax("./");
    let PROCEDENCIAS_LISTA = [];
    //comparamos las que existen y no y las mandamos a pintar en el modal
    PROCEDENCIAS.forEach(
        (pro)=>
        {
            let isExistinf = PROC_APLI.find(x => x.id_tipo_procedencia_fk === pro.id_tipo_procedencia);
            if (isExistinf == null)
            {
                PROCEDENCIAS_LISTA.push(pro);
            }
        }
    );
    return PROCEDENCIAS_LISTA;
}

function buildTBLHtmlDescuentos(DESCUENTOS) {
    let template ="";
    if (DESCUENTOS.length > 0) {
        template += `<table class="table table-hover table-striped" >
                            <thead>
                            <tr>
                                <th>DIRIGIDO A</th>
                                <th>DESC %</th>
                                <th>DESCUENTO</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="tbl-Desc">`;
        DESCUENTOS.forEach(
            (des)=>
            {
                let descApli = parseInt(des.porcentaje_desc)!=0 ? `<span class="badge bg-info"><i class="fas fa-tag"></i> ${des.porcentaje_desc}% OFF</span>`: 'SIN DESCUENTO';
                let totalPagoSugerido = parseFloat(des.costo_sugerido);
                let totalDesc = (totalPagoSugerido*parseFloat(des.porcentaje_desc))/100;
                let total_pago = totalPagoSugerido-totalDesc;

                template += `<tr id_procedencia="${des.id_tipo_procedencia_fk}">
                                <td>${des.tipo_procedencia}</td>
                                <td>${descApli}</td>
                                <td>-$${des.desTotal}</td>
                                <td>$ ${total_pago}</td>
                                <td>
                                    <button class="btn btn-primary me-1 mb-1" onclick="editaDescuentoCurso(${des.id_tipo_procedencia_fk},'${des.tipo_procedencia}',${des.porcentaje_desc})">
                                        <i class="fas fa-edit"></i> Editar</button>
                                    <button class="btn btn-danger me-1 mb-1 btnDeleteDesc"><i class="fas fa-user-times"></i></button>
                                </td>
                            </tr>`;
            }
        );

        template += `      </tbody>
                        </table>`;
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
//CRUD DESCUENTO
function editaDescuentoCurso(idProcedencia,nombreProcedencia,descuento){
    $("#editarDescuentos").modal('show');
    $("#idProcedenenciaSelect").val(idProcedencia);
    $("#lblProcedenciaSelected").val(nombreProcedencia);
    $("#editaDescuentoProcedencia").val(descuento);
}
//Funcion actualiza descuento
$("#frm-update-descuento").on("submit", function(e){
    var params={
        idCurso : ID_CURSO,
        idProcedencia : $("#idProcedenenciaSelect").val(),
        descuento: $("#editaDescuentoProcedencia").val()
    }
    let route= "./webhook/update-descuento.php";
    enviaForm(params,route).then(function () {
        $("#frm-update-descuento").trigger('reset');
        $("#editarDescuentos").modal('hide');
        let id= ID_CURSO;
        consultaTblDescuentos(id);
        
    });
    e.preventDefault();
});

function addDescCurso() {
    var params={
        idCurso : ID_CURSO,
        idProcedencia : $("#listProcedencias").val(),
        descuento: $("#descuentoProcedencia").val()
    }
    
    let route= "./webhook/add-descuento.php";
    enviaForm(params,route).then(function () {
        $("#frm-add-desc").trigger('reset');
        let id= ID_CURSO;
        consultaTblDescuentos(ID_CURSO);
    });
}
//Elimina descuento
$(document).on("click", ".btnDeleteDesc", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let idProcedencia = $(ElementDOM).attr("id_procedencia");
    let idCurso = ID_CURSO;
    var params = {
        idCurso: idCurso,
        idProcedencia : idProcedencia
    };
    var route= "./webhook/delete-descuento.php";
    sweetConfirm('Eliminar Descuento', '¿Estas seguro de que deseas eliminar este descuento?', function (confirmed) {
        if (confirmed) {
            enviaForm(params,route).then(function () {
                consultaTblDescuentos(idCurso);
            });
            
        }
    });
});

//CRUD HORARIO VIRTUAL / PRESENCIAL
function consultaHorarioGpoList(idGpo) {
    consultaHorario(idGpo).then(function (e) {
        buildHTMLHorarioContainers(e)
    });
}

$('#grupos').on('change', function (){
    let idGpo = $("#grupos").val();
    consultaHorario(idGpo).then(function (e) {
        buildHTMLHorarioContainers(e)
    });
});

function buildHTMLHorarioContainers(HORARIOS) {
    //Separando los tipo de horario
    buildHtmlHPContainer(HORARIOS.HP);
    buildHtmlHVContainer(HORARIOS.HV);
}
function buildHtmlHVContainer(HVirtual) {
    //TRabajando con virtuales
    let template = "";
    if (HVirtual.length>0){
        template =`<table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACION</th>
                            <th>PLATAFORMA</th>
                            <th>SALA</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HVirtual.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_virtual}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                            <td><a href="${h.url_plataforma}" TARGET="_blank">${h.plataforma}</a></td>
                            <td><a href="${h.url_reunion}" TARGET="_blank">${h.reunion}</a></td>
                            <td>
                                <button class="btn btn-primary me-1 mb-1" onclick="editaHorarioVirtual(${h.id_horario_virtual},${h.dia_semana},'${h.hora_inicio}','${h.hora_term}',${h.duracion},'${h.plataforma}','${h.url_plataforma}','${h.reunion}','${h.url_reunion}')">
                                    <i class="fas fa-clock"></i> Editar</button>
                                <button class="btn btn-danger me-1 mb-1 deleteHorarioV"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>
                    <button class="btn btn-primary me-1 mb-1" onclick="agregaHorarioVirtual()">
                        <i class="fas fa-plus"></i>Agregar
                    </button>`;
    }
    else{
        template = ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin horario VIRTUAL</h4>
                        <p>No encontramos horarios registrados. Si este curso es solo PRESENCIAL omita este mensaje. Agregue el 
                    horario si es la primera vez que condigura este curso</p><hr>
                         <button class="btn btn-primary me-1 mb-1" onclick="agregaHorarioVirtual()">
                            <i class="fas fa-plus"></i>Agregar
                         </button>
                          </div>
                        </div>`;
    }
    $("#containerTblVirtual").html(template);
}

function buildHtmlHPContainer(HPresencial) {
    //TRabajando con presenciales
    let template = "";
    if (HPresencial.length>0){
        template =`<table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>SALON</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACION</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HPresencial.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_pres}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.edificio}-${h.grupo} (${h.campus})</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                            <td>
                                <button class="btn btn-primary me-1 mb-1" onclick="editaHorarioPresencial(${h.id_horario_pres},${h.dia_semana},'${h.hora_inicio}', '${h.hora_term}',${h.duracion},${h.id_aula})">
                                    <i class="fas fa-clock"></i> Editar</button>
                                <button class="btn btn-danger me-1 mb-1 deleteHorarioP"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>
                    <button class="btn btn-primary me-1 mb-1" onclick="agregaHorarioPresencial()">
                        <i class="fas fa-plus"></i>Agregar
                    </button>`;
    }
    else{
        template = ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin horario PRESENCIAL</h4>
                        <p>No encontramos horarios registrados. Si este curso es solo virtual omita este mensaje. Agregue el 
                    horario si es la primera vez que configura este curso</p><hr>
                         <button class="btn btn-primary me-1 mb-1" onclick="agregaHorarioPresencial()">
                            <i class="fas fa-plus"></i>Agregar
                         </button>
                          </div>
                        </div>`;
    }
    $("#containerTblPresencial").html(template);
}

//Funcion agrega horario presencial
function agregaHorarioPresencial(){
    $("#horarioPresencial").modal('show');
    $("#idHorarioPresencial").val(0);
    $("#diaClase").val(1);
    $("#minDuracionPrecencial").val(60);
}
function editaHorarioPresencial(idHorPres,dia,horaInicio, horaTerm,duracion,idAula){
    $("#horarioPresencial").modal('show');
    $("#idHorarioPresencial").val(idHorPres);
    $("#diaClase").val(dia);
    $("#hrsInicioPrecencial").val(horaInicio);
    $("#hrsFinPrecencial").val(horaTerm);
    $("#minDuracionPrecencial").val(duracion);
    $("#aulas").val(idAula);
}
//Agrega Horario Presencial

$("#frm-add-horario-presencial").on("submit", function(e){
    let route= "./webhook/crud-horario-p.php";
    var params={
        idHorPres: $("#idHorarioPresencial").val(),
        idGrupo:$("#grupos").val(),
        idAula : $("#aulas").val(),
        dia:$("#diaClase").val() ,
        horaInicio :$("#hrsInicioPrecencial").val(),
        duracion : $("#minDuracionPrecencial").val()
    };
    enviaForm(params,route).then(function () {
        $("#frm-add-horario-presencial").trigger('reset');
        $("#horarioPresencial").modal('hide');
        //Checar la funcion que se manda a llamar para volver a cargar todo
        let id= $("#grupos").val();
        consultaHorario(id).then(function (e) {
            buildHTMLHorarioContainers(e)
        });
    });
    e.preventDefault();
});
//Elimina horario presencial
$(document).on("click", ".deleteHorarioP", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id_horario");
    var route= "./webhook/delete-horario-p.php";
    sweetConfirm('Eliminar Horario', '¿Estas seguro de que deseas eliminar este Horario?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                let id= $("#grupos").val();
                //Checar la funcion que se manda a llamar para volver a cargar todo
                consultaHorario(id).then(function (e) {
                    buildHTMLHorarioContainers(e)
                });
            });            
        }
    });
});

//Funciones para horario virtual CRUD

function agregaHorarioVirtual(){
    $("#horarioVirtual").modal('show');
    $("#idHorarioV").val(0);
    $("#diaClase").val(1);
    $("#hrsInicio").val('07:00:00');
    $("#minDuracion").val(30);
    $("#plataforma").val('MODDLE');
    $("#linkPlataforma").val('');
    $("#reunion").val('ZOOM');
    $("#linkreunion").val('');
}
function editaHorarioVirtual(idHorarioV,diaSemana,horaInicio,horaTerm,duracion,plataforma,urlPlataforma,reunion,urlReunion){
    $("#horarioVirtual").modal('show');
    $("#idHorarioV").val(idHorarioV);
    $("#diaClaseV").val(diaSemana);
    $("#hrsInicioV").val(horaInicio);
    $("#hrsTerminoV").val(horaTerm);
    $("#minDuracionV").val(duracion);
    $("#plataforma").val(plataforma);
    $("#linkPlataforma").val(urlPlataforma);
    $("#reunion").val(reunion);
    $("#linkreunion").val(urlReunion);
}
//Funcion submit del modal
$("#frm-add-hor-vir").on("submit", function(e){
    let route= "./webhook/crud-horario-v.php";
    var params={
        idHorarioV: $("#idHorarioV").val(),
        idGrupo:$("#grupos").val(),
        dia:$("#diaClaseV").val() ,
        horaInicio :$("#hrsInicioV").val(),
        duracion : $("#minDuracionV").val(),
        reunion : $("#reunion").val(),
        urlReunion : $("#linkreunion").val(),
        plataforma : $("#plataforma").val(),
        urlPlataforma : $("#linkPlataforma").val()
    };
    enviaForm(params,route).then(function () {
        $("#frm-add-hor-vir").trigger('reset');
        $("#horarioVirtual").modal('hide');
        //Checar la funcion que se manda a llamar para volver a cargar todo
        let id= $("#grupos").val();
        consultaHorario(id).then(function (e) {
            buildHTMLHorarioContainers(e)
        });
    });
    e.preventDefault();
});
$(document).on("click", ".deleteHorarioV", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id_horario");
    var route= "./webhook/delete-horario-v.php";
    sweetConfirm('Eliminar Horario', '¿Estas seguro de que deseas eliminar este Horario?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                let id= $("#grupos").val();
                //Checar la funcion que se manda a llamar para volver a cargar todo
                consultaHorario(id).then(function (e) {
                    buildHTMLHorarioContainers(e)
                });
            });            
        }
    });
});
