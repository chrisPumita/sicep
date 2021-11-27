// lo que sejecuta primero
$(document).ready(function () {
    console.log("Login services start");
    consultaEstadosRep();
    consultaMunicipios(1);
    consultaProcedencias();
    consultaUnis();
});

/*SUBMINT de Inicio de sesion*/


/*SUBMINT de Add Alumno*/
$("#frm-add-alumno").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-alumno"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "./app/webhook/add-alumno.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
        $("#frm-add-alumno").trigger('reset');
        $("#inlineForm").modal('hide');
        });
    e.preventDefault();
});
/*Recupera PW*/

async function consultaEstadosRep() {
    const jsonData = await consultaEdosRepAjax("./app/");
    buildHTMLEstados(jsonData);
}

function buildHTMLEstados(lsEdos) {
    let template = "";
    lsEdos.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_estado}">${obj.estado} (${obj.abrev})</option>`;
        }
    );
    $("#estados").html(template);
}

async function consultaMunicipios(idEdo) {
    const jsonData = await consultaMunicipioAjax("./app/",idEdo);
    buildHTMLMunicipios(jsonData);
}

function buildHTMLMunicipios(muns) {
    let template = "";
    muns.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_municipio}">${obj.municipio}</option>`;
        }
    );
    $("#municipios").html(template);
}

async function consultaProcedencias() {
    const JSONData = await consultaProcedenciasAjax("./app/");
    buildHTMLProcedencias(JSONData);
}

async function consultaUnis() {
    const JSONData = await consultaUnisAjax("./app/");
    buildHTMLTblUnis(JSONData);
}

function buildHTMLProcedencias(PROCED) {
    console.log(PROCED);
    let template = "";
    PROCED.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_tipo_procedencia}">${obj.tipo_procedencia}</option>`;
        }
    );
    $("#procedencia").html(template);
}

function buildHTMLTblUnis(UNIS) {
    console.log(UNIS);
    let template = "";
    UNIS.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_universidad}">${obj.siglas} (${obj.nombre})</option>`;
        }
    );
    $("#universidades").html(template);
}

$("#estados").change(function ()
{
    //obj que tienes cambios
    let estado_sel = $("#estados").val();
    consultaMunicipios(estado_sel);
});
