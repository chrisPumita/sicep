let ID_ASIG = $("#idAsignacion").val();

$(document).ready(function() {
    consultaListaProfesores();
//consultaProcedencia();
});

window.onload = function(){
    consultaInfoAsignacion(ID_ASIG,1);
}


//Consulta de asignacion con funcion asincrona

function consultaInfoAsignacion(idAsig,filtro) {
    consultaDetallesAsignaciones(idAsig,filtro).then(function (e) {
        if (e.length==1){
            loadDataAsignacion(e[0]);
        }
    });
}

function loadDataAsignacion(asig){
    $("#profesorAsig").prepend("<option value='0' selected>Ninguno</option>");
    console.log(asig);
    $("#nameAsignacion").html(asig.nombre_curso);
    $("#nameCursoTittle").html(asig.nombre_curso);
    $("#nameBreadCurso").html(asig.nombre_curso);
    $("#grupoBread").html(asig.grupo+' - G'+ asig.generacion);
    $("#profesorAsigActual").val(asig.prefijo+' '+asig.nombre_completo);

}
















/*
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

 */