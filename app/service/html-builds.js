function buildListaDesplCursos(jsonData) {
    let template="";
    jsonData.forEach(curso => {
        template+=`<option value="${curso.id_curso}">${curso.nombre_curso}</option> `;
    });
    return template;
}