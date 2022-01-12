
$(document).ready(function() {
    let id = ID_CURSO;
    if(!cargaCursoDetails(1,id))
        alert('NO DATA');
    consultaGrupos(id);
    cargaAulasListDespl();
    cargaTemario(id);
    cargaTblDocumentacion(id);
    consultaTblDescuentos(id);
    cargaListaDocsModal();
});

function cargaListaDocsModal() {
    consultaDocsAsync().then(function (JSONData) {
        console.log(JSONData);
        let template = "";
        JSONData.forEach(
            (doc)=>{template+= `<option value="${doc.id_documento}">${doc.nombre_doc}</option>`; }
        );
        $("#modalListDosc").html(template);
    });
}

//* DETALLES GENERALES DEL CURSO*/
async function cargaCursoDetails(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    buildHTMLValues(JSONData[0]);
}

function buildHTMLValues(curso){
    $("#idCursoGrupo").val(curso.id_curso);
    $("#idCursoPDF").val(curso.id_curso);
    $("#nombreCursoTitulo").html(`${curso.codigo} - ${curso.nombre_curso}`);
    $("#detallesCurso").html(`${curso.descripcion}`);
    $("#nombreAutor").html(`${curso.nombre} ${curso.app} ${curso.apm}`);

    $("#fechaCreacion").html(`${curso.fecha_creacion}`);
    $("#dirigido_a").html(`${curso.dirigido_a}`);
    $("#codigoInfo").html(`${curso.codigo}`);
    $("#sesionesInfo").html(`${curso.no_sesiones}`);
    $("#nombreCursoHistorial").html(`${curso.nombre_curso}`);

    $("#modalidad").html(getTipoCurso(curso.tipo_curso));
    $("#objetivo").html(curso.objetivo);
    $("#antecedentes").html(curso.antecedentes);
    let img = `<div class="img d-block w-100" style="background-image: url(${curso.banner_img}); height: 300px; "></div>`;
    $("#imgContainer").html(img);
    let pdfFile = `<a href="${curso.link_temario_pdf}" download="" target="_blank"  class="btn btn-primary"><i class="fas fa-download"></i></a>`;
    $("#filePDF").html(pdfFile);
    let tmpPdf = `<embed src="${curso.link_temario_pdf}" type="application/pdf" width="100%" height="600px" />`;
    $("#filePdfView").html(tmpPdf);
    //consulto los detalles de la acredsitacion del curso
    acreditado = curso.id_profesor_admin_acredita != null ? true:false;
    detallesAcreditacion(curso.id_curso,acreditado);
    // cargar los datos al form
    $("#editarNombreCurso").val(curso.nombre_curso);
    $("#editarDescripcion").val(curso.descripcion);
    $("#editarObjetivo").val(curso.objetivo);
    $("#idCurso").val(curso.id_curso);
    $("#editarDirigido").val(curso.dirigido_a);
    $("#editarAntecedentes").val(curso.antecedentes);
    $("#editarCosto").val(curso.costo_sugerido);
    $("#costoSugerido").html('$ '+curso.costo_sugerido);
    $("#lblCostoFinalCallout").html('$ '+curso.costo_sugerido);
    $("#editarModalidad").val(curso.tipo_curso);
    $("#editarSesiones").val(curso.no_sesiones);
}
//Update Acreditar/ Remover Acreditacion Curso
function cambiaEstado(estatus,mensaje){
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
                    estatus : estatus
                },
                success: function(data){
                    let id = ID_CURSO;
                    cargaCursoDetails(1,id);
                    console.log(data);
                },
                error: function(e) {
                    console.log(e);
                    alert("Error occured")
                }
            });
        }
    });
}


function detallesAcreditacion(id_Curso,acreditado) {
    let tmplate;
    if(acreditado){
        $.ajax(
            {
                url:"./webhook/acreditacion-curso.php",
                data: {
                    idCurso : id_Curso
                },
                type: "POST",
                success: function (response)
                {
                    let obj_result = JSON.parse(response);
                    if (obj_result.length == 1){
                        tmplate =`
                            <div class="d-flex">
                                <div class="m-auto">
                                    <img src="../assets/images/icons/ok.svg" width="80" alt="svg ok">
                                </div>
                                <div class="col-8 m-auto">
                                    <h5>Aprobado por:</h5>
                                    <input type="hidden" value="1" id="valAcredCurso">
                                    <h5><strong>${obj_result[0].prefijo} ${obj_result[0].nombre} ${obj_result[0].app} ${obj_result[0].apm}</strong></h5>
                                    <h6>No Trabajador: ${obj_result[0].no_trabajador}</h6>
                                    <h6>${obj_result[0].cargo} de Departamento de ${obj_result[0].departamento}</h6>
                                </div>
                            </div>
                            <div class="card-body d-flex text-align-right">
                                <a href="#" class="btn btn-danger btn-block " onclick="cambiaEstado(0,'Inhabilitar');"><i class="fas fa-power-off"></i> Inhabilitar</a>
                            </div>
`;
                        $("#detallesAprobacionCurso").html(tmplate);
                    }
                }
            }
        );
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
                    <h6>Si este curso cumple con los requerimentos, puede aprobar este curso y comenzar a asignar grupos</h6>
                </div>
            </div>
            <div class="card-body d-flex text-align-right">
                <button type="button" class="btn btn-success btn-block"onclick="cambiaEstado(1,'Acreditar')">Acreditar</button>
            </div>`;
        $("#detallesAprobacionCurso").html(tmplate);
        $("#sectionDescuentos").html("");

    }
}

function cargaTemario(idCurso) {
    consultaTemario(idCurso).then(function (e) {
        buildTBLHtmlTemario(e);
    });
}

function buildTBLHtmlTemario(TEMAS) {
    let template;
    if (TEMAS.length > 0) {
        template= `
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>INDICE</th>
                        <th>TEMA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                <tbody>`;
        TEMAS.forEach(
            (tema)=>
            {
                template+= `
                        <tr id_tema="${tema.id_tema}">
                            <td>${tema.indice}</td>
                            <td>${tema.nombre}</td>
                            <td>${tema.resumen}</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addNewTema"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
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
                   No tenemos temas registrados. Agregue un tema.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblTemario").html(template);
}

function cargaTblDocumentacion(id) {
    consultaDocumentacion(id).then(function (e) {
       buildTBLHtmlDocsSol(e)
    });
}

function buildTBLHtmlDocsSol(DOSC) {
    console.log(DOSC);
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
                        <tr id_tema="${doc.id_doc_sol}">
                            <td>${doc.nombre_doc}</td>
                            <td>${doc.formato_admitido} - ${doc.peso_max_mb}MB Max.</td>
                            <td>${acre}</td>
                            <td>${confirmaInsc}</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#documentacionModal"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger deleteTema"><i class="fas fa-trash-alt"></i></a>
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

//Update FROM details curso
$("#frm-update-curso").on("submit", function(e){
    let route = "./webhook/update-detalles-curso.php";
    var params = {
        idCurso : $("#idCurso").val(),
        editarNombreCurso : $("#editarNombreCurso").val(),
        editarDescripcion : $("#editarDescripcion").val(),
        editarObjetivo : $("#editarObjetivo").val(),
        editarDirigido : $("#editarDirigido").val(),
        editarAntecedentes : $("#editarAntecedentes").val(),
        editarModalidad : $("#editaTipoCurso").val(),
        editarSesiones : $("#editarSesiones").val(),
        editarCosto : $("#editarCosto").val()
    };
    console.log(params);
        //Funcion async
    enviaForm(params,route).then(function () {
        $("#updateDatosCursos").modal('hide');
        let id= ID_CURSO;
        cargaCursoDetails(1, id);
        
    });
    e.preventDefault();
});



//Update PDF Curso
$("#inputPDF").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("inputPDF"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "./webhook/update-pdf-curso.php",
        type: "post",
        dataType: "html",
        data: formData,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#inputPDF").trigger('reset');
        let id= ID_CURSO;
        cargaCursoDetails(-1,id);
        console.log(res);
    });
    e.preventDefault();
});

//Update Remove PDF curso
function removeBanner() {
    let id = $("#idCurso").val();
    var route= "./webhook/remove-banner-curso.php";
    sweetConfirm('Remover Banner', '¿Estas seguro de que deseas eliminar el Banner de este Curso?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                cargaCursoDetails(-1,id);
            });
        }
    });
}

//Update remove PDF
function removeTemario() {
    let id = $("#idCurso").val();
    var route= "./webhook/remove-pdf-curso.php";
    sweetConfirm('Remover Temario', '¿Estas seguro de que deseas eliminar el temario de este Curso?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                cargaCursoDetails(-1,id);
            });
        }
    });
}


//CRUD TEMARIO

//CRUD DESCUENTOS
function consultaTblDescuentos(idGpo) {
    consultaDescuentos(idGpo).then(function (e) {
        buildTBLHtmlDescuentos(e);
        comparaProcedencias(e).then(function (PROC_LIST) {
            let template;
            if (PROC_LIST.length > 0) {
                template = `<form id="form-add-dirigido">
                                <div class="form-group row p-3" id="containerLisGpos">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Seleccione Procedencia</label>
                                    <select class="form-control w-auto" id="listProcedencias"> 
                                    `;
                PROC_LIST.forEach(
                    (pro)=>
                    {
                        template += `<option value="${pro.id_tipo_procedencia}">${pro.tipo_procedencia}</option>`;
                    }
                );

                template += `
                                    </select>
                                     <input type="number" min="1" class="form-control" id="descuentoProcedencia" aria-describedby="aulaHelp" placeholder="0">
                                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-percent"></i> Descuento</label>
                                  <button id="btnAddProcedencias" type="submit" class="btn btn-outline-success">
                                        <i class="fas fa-plus-square"></i> Agregar
                                    </button>
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
                                    <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#editarDescuentos">
                                        <i class="fas fa-tag"></i> Editar</button>
                                    <button class="btn btn-danger me-1 mb-1 remove"><i class="fas fa-user-times"></i></button>
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
                                <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="##horarioVirtual">
                                    <i class="fas fa-clock"></i> Editar</button>
                                <button class="btn btn-danger me-1 mb-1 removeHV"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>
                    <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioVirtual">
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
                         <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioVirtual">
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
                                <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioPresencial">
                                    <i class="fas fa-clock"></i> Editar</button>
                                <button class="btn btn-danger me-1 mb-1 removeHP"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>
                    <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioPresencial">
                        <i class="fas fa-plus"></i>Agregar
                    </button>`;
    }
    else{
        template = ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin horario PRESENCIAL</h4>
                        <p>No encontramos horarios registrados. Si este curso es solo virtual omita este mensaje. Agregue el 
                    horario si es la primera vez que condigura este curso</p><hr>
                         <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#horarioPresencial">
                            <i class="fas fa-plus"></i>Agregar
                         </button>
                          </div>
                        </div>`;
    }
    $("#containerTblPresencial").html(template);
}