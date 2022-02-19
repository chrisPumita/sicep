/* ++++++++++++C O N S T R U C T R O R E S
                O B J E T O S    H T M L +++++++++*/
function buildListaDesplCursos(jsonData) {
    let template="";
    jsonData.forEach(curso => {
        template+=`<option value="${curso.id_curso}">${curso.nombre_curso}</option> `;
    });
    return template;
}

function buildHTMLListDespDeptos(deptos) {
    let template="";
    deptos.forEach(depto => {
        template+=`<option value="${depto.id_depto}">${depto.nombre}</option> `;
    });
    return template;
}

