$(document).ready(function() {
consultaProcedencia();
});

async function consultaProcedencia() {
    const jsonData = await consultaProcedenciasAjax("./");
    buildHTMLProcedencias(jsonData);
}

function buildHTMLProcedencias(ls_procendencias) {
    let template = "";
    ls_procendencias.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_tipo_procedencia}">${obj.tipo_procedencia}</option>`;
        }
    );
    $("#list-procedencias").html(template);
}