$(document).ready(function() {
    let id = $("#idCurso").val();
    if(!cargaCursoDetails(-1,id))
        alert('NO DATA');
    consultaGrupos(id);
    cargaAulasListDespl();
});

function buildHtmlSelectGrupos(datos) {
    let template = "";
    let gruposVal = $("#grupos");
    let cont = 0;
    if (datos.length > 0) {
        template += `<div class="col-md-4 text-end">
                        <label for="indice" class="text-primary">Seleccione un Grupo:</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <select class="form-control" id="list-grupos">`;
        datos.forEach(
            (dato)=>
            {
                cont++;
                let sel = cont===datos.length ? "selected": "";
                template += `<option ${sel} value="${dato.id_grupo}">${dato.grupo}</option>`;
                try{ nuevoGpo = parseInt(dato.grupo)+1; }
                catch (e) {nuevoGpo="1000";}
            }
        );
        gruposVal.removeAttr("disabled");
        template += `</select></div>
                        <div class="col-4"> <button class="btn btn-danger me-1 mb-1"><i class="fas fa-trash-alt"></i> Grupo</button></div>`;
    }
    else{
        template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Agrege un grupo</strong> No hay grupos registrados, agregue uno para configurar los horarios.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
        gruposVal.attr("disabled", "");
        nuevoGpo="1000";
    }
    $("#selectCurso").html(template);
    $("#nombreGrupoNuevo").val(nuevoGpo);
}

/*DETALLES DE LOS HORARIOS EN FUNCION DEL GRUPO SELECCIONADO*/

function buildTblGrupos() {

}

//* DETALLES GENERALES DEL CURSO*/
async function cargaCursoDetails(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    buildHTMLValues(JSONData[0]);
}

function buildHTMLValues(curso){
    $("#idCursoGrupo").val(curso.id_curso);
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
    $("#editarModalidad").val(curso.tipo_curso);
    $("#editarSesiones").val(curso.no_sesiones);
    cargaTemario(curso.id_curso);
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
                                <div class="m-auto">
                                    <h5>Aprobado por:</h5>
                                    <h5><strong>${obj_result[0].prefijo} ${obj_result[0].nombre} ${obj_result[0].app} ${obj_result[0].apm}</strong></h5>
                                    <h6>No Trabajador: ${obj_result[0].no_trabajador}</h6>
                                    <h6>${obj_result[0].cargo} de Departamento de ${obj_result[0].departamento}</h6>
                                </div>
                            </div>
                            <div class="card-body d-flex text-align-right">
                                    <a href="#" class="btn btn-danger btn-block ">Inhabilitar</a>
                            </div>`;
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
    $.ajax(
        {
            url:"./webhook/temario-curso.php",
            data: {
                idCurso : idCurso
            },
            type: "POST",
            success: function (response)
            {
                let TEMAS = JSON.parse(response);
                let template;
                if (TEMAS.length > 0) {
                    template+= `
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
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
        }
    );
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


//Update remove PDF image

//Update Acreditar/ Remover Acreditacion Curso

//CRUD TEMARIO

//CRUD DESCUENTOS

//CRUD HORARIO VIRTUAL / PRESENCIAL


