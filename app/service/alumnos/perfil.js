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
    const JSONData =  await g_consultaEdosRep("../app/");
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

function buildSelectMunicipios(municipios,idMun){
    console.log(municipios);
    let template = "";
    municipios.forEach(
        (municipio)=>
        {
            let select = idMun === municipio.id_municipio ? "selected" : "";
            template += `<option value="${municipio.id_municipio}" ${select}>${municipio.municipio}</option>`;
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
    $("#sexo_alumno_perfil").val(alumno.sexo);
    $("#estado_alumno_perfil").val(alumno.id_estado_fk);
    $("#procedencia").val(alumno.id_tipo_procedencia);
    $("#matricula_alumno_perfil").val(alumno.matricula);
    $("#carrera_alumno_perfil").val(alumno.carrera_especialidad);
    //Pintamos HTML debajo de imagen de perfil
    $("#nombreAlumnoImg").html(alumno.nombre_completo);
    $("#correoAlumnoImg").html(alumno.email);
    conusltaMuncipios(alumno.id_estado_fk,alumno.id_municipio);
}

function conusltaMuncipios(idEdo,idMunSelect) {
    let ruta = '../app/';
    g_consultaMunicipio(ruta,idEdo).then(function (result) {
        buildSelectMunicipios(result,idMunSelect);
    })
}

//onchange FUNCION EN SELECT EDTADO
//ACTUALIZAR LOS MUNICIPIOS

/*LOGICA DE UPDATE FOTO PERFIL

UPDATE DATOS
*/
$("#frm-update-perfil-alumno").on("submit", function(e){
    if($("#nombre_alumno_perfil").val() != "" && $("#app_alumno_perfil").val() != "" && $("#apm_alumno_perfil").val() != "" 
    && $("#telefono_alumno_perfil").val() != "" && $("#carrera_alumno_perfil").val() != "" && $("#correo_alumno_perfil").val() != ""){
        //Ruta del Webbhook
        let ruta = "../app/webhook/alumno.update-alumno.php";
        //Parametros que se van a enviar encapsulados
        var params = {
            nombre_alumno : $("#nombre_alumno_perfil").val(),
            app_alumno : $("#app_alumno_perfil").val(),
            apm_alumno : $("#apm_alumno_perfil").val(),
            sexo_alumno : $("#sexo_alumno_perfil").val(),
            telefono_alumno : $("#telefono_alumno_perfil").val(),
            email_alumno : $("#correo_alumno_perfil").val(),
            idMunicipio: $("#localidad_alumno_perfil").val(),
            idProcedencia: $("#procedencia").val(),
            carreraEspecialidad : $("#carrera_alumno_perfil").val()
        };
        //Llamado de la funcion Async y resolviendo la promesa
        enviaFormAlumno(params,ruta).then(function () {
            consultaPefilAlumno().then(function (resultado) {
                buildHTMLDatosPeril(resultado);
            })
            e.preventDefault();
        });

    } else {
        alerta("No se puede completar la solicitud","Motivo: Faltan campos por llenar","warning");
    }
    e.preventDefault();
});
