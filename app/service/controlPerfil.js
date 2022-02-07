$(document).ready(function() {
    consultaPefilProfesor().then(function (resultado) {
        buildHTMLDatosPeril(resultado);
    })
});
window.onload = function() {
    consultaDeptosPerfil();
  };
async function consultaDeptosPerfil() {
    const JSONData = await consultaDeptosAjax();
    buildSelectDeptosPerfil(JSONData);
}



//Constructor de datos HTML del profesor
function buildHTMLDatosPeril(profesor){
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
    $("#idProfesor").val(profesor.id_profesor);
    //Pintamos HTML debajo de imagen de perfil
    $("#nombreProfesorImg").html(profesor.nombre);
    $("#correoProfesorImg").html(profesor.email);
}

function buildSelectDeptosPerfil(departamentos){
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
function editaFotoPerfil(){
    let idProfesor= $("#idProfesor").val();
    $("#idProfesorImg").val(idProfesor);
    $("#updateFotoPerfil").modal('show');
}

//Update datos del perfil
$("#frm-update-perfil-profesor").on("submit", function(e){
    //Ruta del Webbhook
    let ruta = "./webhook/update-datos-profesor.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        prefijo : $("#prefijoProfesor").val(),
        nombre_profesor : $("#nombre_profesor_perfil").val(),
        app_profesor : $("#app_perfil").val(),
        apm_profesor : $("#apm_perfil").val(),
        sexo : $("#sexo_perfil").val(),
        telefono : $("#telefono_perfil").val(),
        correo : $("#correo_perfil").val(),
        departamento : $("#depto_perfil").val()
    };
    //Llamado de la funcion Async y resolviendo la promesa
    enviaForm(params,ruta).then(function () {
        consultaPefilProfesor().then(function (resultado) {
            buildHTMLDatosPeril(resultado);
        })
    });
    e.preventDefault();
});

//Update foto perfil profesor
$("#frm-foto-perfil").on("submit", function(e){
    //Ruta del Webbhook
    var formData = new FormData(document.getElementById("frm-foto-perfil"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "./webhook/update-image-perfil.php",
        type: "post",
        dataType: "html",
        data: formData,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#frm-foto-perfil").trigger('reset');
        $("#updateFotoPerfil").modal('hide');
        var mensaje= JSON.parse(res);
        if(mensaje.mjeType ==0){
            alertaEmergente(mensaje.Mensaje);
        } else{
            location.reload();
        }        
        
    });
    e.preventDefault();
});

$("#frm-update-pwd").on("submit", function(e){
    //Cambiar datos de condicion por .val()
    if($("#pwdOld").val() !="" && $("#pwdNew").val() !="" && $("#pwdNewC").val()!=""){
            //Ruta del Webbhook
        let ruta = "./webhook/update-pw.php";
        //Parametros que se van a enviar encapsulados
        var params = {
            pwd : $("#pwdOld").val(),
            pwdNew : $("#pwdNew").val(),
            pwdNewConf : $("#pwdNewC").val()
        };
        if(params.pwdNew != params.pwdNewConf){
            alerta("No se pudo realizar la operacion","Las nuevas contraseñas no coinciden","error");
        } else {
            //Llamado de la funcion Async y resolviendo la promesa
            enviaForm(params,ruta).then(function () {
                $("#frm-update-pwd").trigger('reset');
                $("#CambiarPsw").modal('hide');
                consultaPefilProfesor().then(function (resultado) {
                    buildHTMLDatosPeril(resultado);
                    e.preventDefault();
                })
            });
        } 
    } else {
        alerta("No se pudo realizar la operacion","Los campos estan vacios","warning");
    }
    e.preventDefault();
});

//Se realizara el cambio de contraseña de administrador