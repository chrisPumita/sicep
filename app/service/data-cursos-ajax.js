/****************************************************/

async function consultaCursosAjax(filtro, idCursoEspc) {
    return $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            id_curso_filtro : idCursoEspc
        },
        success: function(data){
           // console.log(data);
        },
        error: function() {
            alert("Error occured")
        }
    });
}
/****************************************************/

async function cargaCursosListaDeplegableModal(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    let listaHtml = buildListaDesplCursos(JSONData);
    $("#modal-lista-cursos").html(listaHtml);
}

/* ++++++++++++C O N S T R U C T R O R E S
                O B J E T O S    H T M L +++++++++*/
