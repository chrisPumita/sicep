async function cargaCursosListaDeplegableModal(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    let listaHtml = buildListaDesplCursos(JSONData);
    $("#modal-lista-cursos").html(listaHtml);
}
