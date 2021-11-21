$(document).ready(function () {
    consultaProcedencias();
    consultaUnis();
});

async function consultaProcedencias() {
    const JSONData = await consultaProcedenciasAjax();
    console.log(JSONData);
    buildHTMLProcedencias(JSONData);
}

async function consultaUnis() {
    const JSONData = await consultaUnisAjax();
    console.log(JSONData);
   buildHTMLTblUnis(JSONData);
}

function buildHTMLProcedencias(obj_result) {
    let template = `<option value="">TODOS</option>`;
    obj_result.forEach(
        (obj)=>
        {
            template += `<option value="${obj.tipo_procedencia}">${obj.tipo_procedencia}</option>`;
        }
    );
    $("#list-procedencias").html(template);
}

function buildHTMLTblUnis(obj_result) {
    let template = `<option value="">TODOS</option>`;
    obj_result.forEach(
        (obj)=>
        {
            template += `<option value="${obj.siglas}">${obj.nombre}</option>`;
        }
    );
    $("#list-universidad").html(template);
}