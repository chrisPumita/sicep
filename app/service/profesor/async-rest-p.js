console.log("ASYNC PROFESOR")
async function consultaDocumentacionOferta(idCurso) {
    return await consultaDocumentacionAjax(idCurso);
}
/// DOCUMENMTACION AJAX
async function consultaDocumentacionAjax(idCUrso) {
    return $.ajax({
            url: "./webhook/lista-doc-sol-curso.php",
            type: "POST",
            data: { idCurso: idCUrso },
            dataType: "json",
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor en ConsultaInfo");
            }
        }

    );
}

async function consultaTemarioOferta(idGrupo) {
    return await consultaTemarioAjax(idGrupo);
}

async function consultaTemarioAjax(idCurso) {
    return $.ajax({
            url: "./webhook/temario-curso.php",
            type: "POST",
            data: { idCurso: idCurso },
            dataType: "json",
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}



/////PROMISE GENERAL CONSULTA TEMARIO REQUERE ID CURSO
async function consultaTemario(idGrupo) {
    return await consultaTemarioAjax(idGrupo);
}
async function consultaTemarioAjax(idCurso){
    return $.ajax(
        {
            url:"./webhook/temario-curso.php",
            type: "POST",
            data: {idCurso : idCurso},
            dataType: "json",
            success: function(res){
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

//Funcion generica de elimar preferencias

async function enviarPropuesta(id){
    return await enviarPropuestaAjax(id);
}

async function enviarPropuestaAjax(id){
    return $.ajax(
        {
            url: "./webhook/profesor.enviar-propuesta.php",
            type: "POST",
            data: {id : id},
            dataType: "json",
            success: function(res){
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}