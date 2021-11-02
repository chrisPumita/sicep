$(document).ready(function() {
    consultaCursosAjax(-1,0);
} );

window.onload = function() {
    cargaCursosListaDeplegableModal();
}
/****************************************************/
//Antigua funcion de Ajax para refcuperar datos JSON
var json_cursos_listaDeplegable; //JSON Global de cursos
function consultaCursosAjax(filtro, idCursoEspc) {
    $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        data: {
            filtro: filtro,
            id_curso_filtro : idCursoEspc
        },
        success: function (response) {
            let jsonData = JSON.parse(response);
            json_cursos_listaDeplegable = jsonData;
        }
    });
}
/****************************************************/

function cargaCursosTabla(){
    consultaCursosAjax(-1,0);
    let tablaHml = buildTablaSimple();
    $("#tbl-cursos").html(tablaHml);
}

function cargaCursosListaDeplegableModal() {
    let listaHtml = buildListaDespl(json_cursos_listaDeplegable);
    $("#modal-lista-cursos").html(listaHtml);
}

/* ++++++++++++C O N S T R U C T R O R E S
                O B J E T O S    H T M L +++++++++*/


function buildListaDespl(jsonData) {
    let template="";
    jsonData.forEach(curso => {
        template+=`<option value="${curso.id_curso}">${curso.nombre_curso}</option> `;
    });
    return template;
}

