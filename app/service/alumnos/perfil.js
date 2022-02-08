$(document).ready(function() {
    consultaPefilAlumno().then(function (resultado) {
        buildHTMLDatosPeril(resultado);
    })
});
window.onload = function() {
    consultaProcedencias();
    consultaEdos();
};

//Procedencias
async function consultaProcedencias(){
    const JSONData =  await consultaProcedenciasAjax("../app/");
    buildSelectProcedencias(JSONData);    
}

function buildSelectProcedencias(procedencias){
    console.log(procedencias);
    let template = "";
    procedencias.forEach(
        (procedencia)=>
        {
            template += `<option value="${procedencia.id_tipo_procedencia}">${procedencia.tipo_procedencia}</option>`;
        }
    );
    $("#procedencia").html(template);
}

//Estados
async function consultaEdos(){
    const JSONData =  await consultaEdosRepAjax("../app/");
    buildSelectEdos(JSONData);
}
function buildSelectEdos(estados){
    console.log(estados);
    let template = "";
    estados.forEach(
        (estado)=>
        {
            template += `<option value="${estado.id_estado}">${estado.estado}</option>`;
        }
    );
    $("#estado_alumno_perfil").html(template);
}

//Municipios
async function consultaMunicipios(idEdo){
    const JSONData =  await consultaMunicipioAjax("../app/",idEdo);
    buildSelectMunicipios(JSONData);
}
function buildSelectMunicipios(municipios){
    console.log(municipios);
    let template = "";
    municipios.forEach(
        (municipio)=>
        {
            template += `<option value="${municipio.id_municipio}">${municipio.municipio}</option>`;
        }
    );
    $("#localidad_alumno_perfil").html(template);
}
//Perfil datos
function buildHTMLDatosPeril(alumno){
    console.log(alumno);
    $("#avatarImagePerfilAlumno").attr("src",alumno.perfil_image);
    $("#nombre_alumno_perfil").val(alumno.nombre);
    $("#app_alumno_perfil").val(alumno.app);
    $("#apm_alumno_perfil").val(alumno.apm);
    $("#telefono_alumno_perfil").val(alumno.telefono);
    $("#correo_alumno_perfil").val(alumno.email);
    $("#estado_alumno_perfil").val(alumno.id_estado_fk);
    $("#procedencia").val(alumno.id_tipo_procedencia);
    $("#matricula_alumno_perfil").val(alumno.matricula);
    $("#carrera_alumno_perfil").val(alumno.carrera_especialidad);
    //Pintamos HTML debajo de imagen de perfil
    $("#nombreAlumnoImg").html(alumno.nombre_completo);
    $("#correoAlumnoImg").html(alumno.email);
    let result= consultaMunicipios(alumno.id_estado_fk);
    if(result){
        $("#localidad_alumno_perfil").val(alumno.id_municipio);
    }
    
    
}

/*LOGICA DE UPDATE FOTO PERFIL

UPDATE DATOS
*/
