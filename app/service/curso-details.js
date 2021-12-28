
$(document).ready(function() {
    let id = ID_CURSO;
    if(!cargaCursoDetails(1,id))
        alert('NO DATA');
    consultaGrupos(id);
    cargaAulasListDespl();
    cargaTemario(id);
    consultaTblDescuentos(id);
});

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
                                <a href="#" class="btn btn-danger btn-block "><i class="fas fa-power-off"></i> Inhabilitar</a>
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
                <a href="#" class="btn btn-success btn-block ">Acreditar</a>
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


//Update PDF Curso

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

//Update Acreditar/ Remover Acreditacion Curso

//CRUD TEMARIO

//CRUD DESCUENTOS
function consultaTblDescuentos(idGpo) {
    consultaDescuentos(idGpo).then(function (e) {
        buildTBLHtmlDescuentos(e);
        comparaProcedencias(e).then(function (PROC_LIST) {
            console.log(PROC_LIST);
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
    console.log(PROCEDENCIAS);
    console.log(PROC_APLI);
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