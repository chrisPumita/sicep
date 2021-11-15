$(document).ready(function() {

});

window.onload = function(){
    let id = $("#idCurso").val();
    if(!cargaCursoDetails(-1,id))
        alert('NO DATA');
}

async function cargaCursoDetails(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    buildHTMLValues(JSONData[0]);
}

function buildHTMLValues(curso){
    $("#nombreCursoTitulo").html(`${curso.codigo} - ${curso.nombre_curso}`);
    $("#detallesCurso").html(`${curso.descripcion}`);
    $("#nombreAutor").html(`${curso.nombre} ${curso.app} ${curso.apm}`);

    $("#fechaCreacion").html(`${curso.fecha_creacion}`);
    $("#dirigido_a").html(`${curso.dirigido_a}`);
    $("#codigoInfo").html(`${curso.codigo}`);
    $("#sesionesInfo").html(`${curso.no_sesiones}`);

    $("#modalidad").html(getTipoCurso(curso.tipo_curso));
    $("#objetivo").html(curso.objetivo);
    $("#antecedentes").html(curso.antecedentes);
    let img = `<div class="img d-block w-100" style="background-image: url(${curso.banner_img}); height: 300px; "></div>`;
    $("#imgContainer").html(img);
    let pdfFile = `<a href="${curso.link_temario_pdf}" download target="_blank"  class="btn btn-primary btn-block"> Descargar</a>`;
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