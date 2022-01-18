$(document).ready(function() {
    consultaIdProfesor();
    consultaDeptos();
});

async function consultaDeptos() {
    const JSONData = await consultaDeptosAjax();
    buildSelectDptos(JSONData);
}

function consultaIdProfesor(){
    $.ajax({
        url: "./webhook/datos-profesor.php",
        type: 'POST',
        dataType: "json",
        data: { },
        success: function(data){
                //console.log(data);
                buildHTMLDatosPeril(data);
        },
        error: function(e) {
            alert("Error occured")
            //console.log(e);
        }
    });
}

//Constructor de datos HTML del profesor
function buildHTMLDatosPeril(datosProfesor){
    let profesor=datosProfesor[0];
    console.log(profesor);
    $("#avatarImagePerfil").attr("src",profesor.img_perfil);
    $("#prefijoProfesor").val(profesor.prefijo);
    $("#nombre_profesor_perfil").val(profesor.nombre);
    $("#app_perfil").val(profesor.app);
    $("#apm_perfil").val(profesor.apm);
    $("#sexo_perfil").val(profesor.sexo);
    $("#telefono_perfil").val(profesor.telefono);
    $("#correo_perfil").val(profesor.email);
    $("#notrabajador_perfil").val(profesor.no_trabajador);
    $("#depto_perfil").val(profesor.id_depto);
    //Pintamos HTML debajo de imagen de perfil
    $("#nombreProfesorImg").html(profesor.nombre);
    $("#correoProfesorImg").html(profesor.email);
}

function buildSelectDptos(departamentos){
    console.log(departamentos);
    let template = "";
    departamentos.forEach(
        (departamento)=>
        {
            template += `<option value="${departamento.id_depto}">${departamento.nombre}</option>`;
        }
    );
    $("#depto_perfil").html(template);
}