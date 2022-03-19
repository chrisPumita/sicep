$(document).ready(function() {
    cargaCursoDetails(1,ID_CURSO);
});

function cargaCursoDetails(filtro,id) {
    cargaCursoPropDetails(filtro,id).then(function (result) {
        buildHTMLValues(result[0]);
    })
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
    let imgPerfil = `<div class="img d-block w-100" style="background-image: url(${curso.img_perfil});"></div>`;

    $("#avatarAutor").html(imgPerfil);

    // PDF TEMARIO
    let containerPDF;
    if (curso.link_temario_pdf===""){
        containerPDF =`<div class="alert alert-warning alert-dismissible fade show w-100" role="alert">
                          <strong>NO HAY TEMARIO PDF</strong> Cargue un archivo PDF con el temario del curso.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
    }
    else{
        containerPDF =`<a href="${curso.link_temario_pdf}" download="" target="_blank"  class="btn btn-primary me-1 mb-1"><i class="fas fa-download"></i></a>
                <button class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#modalPdftemario"><i class="fas fa-eye"></i></button>
                <a href="#" class="btn btn-outline-danger me-1 mb-1 readOny" onclick="removeTemario()"><i class="fas fa-times"></i></a></div>`;
        let tmpPdf = `<embed src="${curso.link_temario_pdf}" type="application/pdf" width="100%" height="600px" />`;
        $("#filePdfView").html(tmpPdf);
    }
    $("#containerPDF").html(containerPDF);
    //consulto los detalles de la acredsitacion del curso
    let acreditado = curso.id_profesor_admin_acredita != null ? true:false;
    let aprobado = curso.aprobado === "1" ? true:false;
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
    $("#editaTipoCurso").val(curso.tipo_curso);
    $("#editarSesiones").val(curso.no_sesiones);
    let botonOpenGrupo = acreditado && aprobado ? `<button class="btn btn-primary w-100 mr-3 mt-3 mb-3" onclick="openGroup(${curso.id_curso})"><i class="fas fa-users"></i> Abrir grupo</button>`:"";
    $("#btnAbrirCurso").html(botonOpenGrupo);
    let editTema = true;
    try{
        detallesAcreditacion(curso.id_curso,acreditado,aprobado);
    }
    catch (e) {
        if(curso.aprobado=='0' || curso.aprobado=='1'){
            blockEdit();
            editTema = false;

        }
    }
    cargaTemario(ID_CURSO,editTema);
}

function cargaTemario(idCurso,edit) {
    consultaTemario(idCurso).then(function (e) {
        buildTBLHtmlTemario(e,edit);
    });
}

function buildTBLHtmlTemario(TEMAS,edit) {
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
                let botones = edit ? `<button class="btn btn-outline-primary readOny" onclick="editaTema(${tema.id_tema},'${tema.indice}','${tema.nombre}','${tema.resumen}')"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger deleteTema readOny"><i class="fas fa-trash-alt"></i></button>`:"";
                template+= `
                        <tr id_tema="${tema.id_tema}">
                            <td>${tema.indice}</td>
                            <td>${tema.nombre}</td>
                            <td>${tema.resumen}</td>
                            <td>
                                ${botones}
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

/*ACTIONS*/
//UPDATE CURSO
//Update FROM details curso
$("#frm-update-curso").on("submit", function(e){
    e.preventDefault();
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
    $.ajax({
        url: "./webhook/update-detalles-curso.php",
        type: 'POST',
        data: params,
        dataType: "json",
        cache: false,
        success: function(res){
            $("#updateDatosCursos").modal('hide');
            let id= ID_CURSO;
            cargaCursoDetails(1, id);
            alertaEmergente(res.Mensaje);
        },
        error: function(e) {
            alert("Error 500 interno Ajax");
        }
    });
});

//Update Remove PDF curso
function removeBanner() {
    let id = $("#idCurso").val();
    var route= "./webhook/remove-banner-curso.php";
    sweetConfirm('Remover Banner', '¿Estas seguro de que deseas eliminar el Banner de este Curso?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                cargaCursoDetails(1,id);
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
                cargaCursoDetails(1,id);
            });
        }
    });
}

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
        cargaCursoDetails(1,id);
    });
    e.preventDefault();
});


//CRUD TEMARIO
//Linea 187 LIMPIA Y EDITA MODAL
function editaTema(idTema,indice,nombreTema,descripcion){
    $("#addNewTema").modal('show');
    $("#id_tema").val(idTema);
    $("#indice").val(indice);
    $("#nombre_tema").val(nombreTema);
    $("#descripcion-tema").val(descripcion);
}

function limpiaModalTema(){
    $("#addNewTema").modal('show');
    $("#id_tema").val(0);
    $("#indice").val("");
    $("#nombre_tema").val("");
    $("#descripcion-tema").val("");
}

//Envio datos CRUD temario
$("#frm-temario").on("submit", function(e){
    let route= "./webhook/crud-temario.php";
    var params={
        idCurso: $("#idCurso").val(),
        idTema:$("#id_tema").val(),
        indice : $("#indice").val(),
        nombreTema:$("#nombre_tema").val() ,
        descripcion :$("#descripcion-tema").val()
    };
    enviaForm(params,route).then(function () {
        $("#frm-temario").trigger('reset');
        $("#addNewTema").modal('hide');
        let id= ID_CURSO;
        cargaTemario(id,true);

    });
    e.preventDefault();
});

//Elimina tema
$(document).on("click", ".deleteTema", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id_tema");
    var route= "./webhook/delete-tema.php";
    sweetConfirm('Eliminar Tema', '¿Estas seguro de que deseas eliminar este Tema?', function (confirmed) {
        if (confirmed) {
            eliminaPreferencia(id,route).then(function () {
                let id= ID_CURSO;
                cargaTemario(id,true);
            });
        }
    });
});


/*AJAX RESPONSE*/

async function cargaCursoPropDetails(filtro, idUnique) {
    return await consultaCursosPropAjax(filtro,idUnique);
}

async function consultaCursosPropAjax(filtro, valueID) {
    return $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            valueID : valueID
        },
        error: function() {
            alert("Error occured")
        }
    });
}