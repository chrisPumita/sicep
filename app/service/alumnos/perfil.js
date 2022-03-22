$(document).ready(function() {
    consultaPefilAlumno().then(function(resultado) {
        buildHTMLDatosPeril(resultado);
    })
});
window.onload = function() {
    consultaProcedencias();
    consultaEdos();
    consultaUnisAlumno().then(function(resultado) {
        buildSelectUniversidades(resultado);
    })
};

//Procedencias
async function consultaProcedencias() {
    const JSONData = await consultaProcedenciasAjax("../app/");
    buildSelectProcedencias(JSONData);
}
function buildSelectProcedencias(procedencias) {
    let template = "";
    procedencias.forEach(
        (procedencia) => {
            template += `<option value="${procedencia.id_tipo_procedencia}">${procedencia.tipo_procedencia}</option>`;
        }
    );
    $("#procedencia").html(template);
}
 
 function buildSelectUniversidades(universidades){
     let template = "";
     universidades.forEach(
         (universidad) => {
             template += `<option value="${universidad.id_universidad}">${universidad.nombre}</option>`;
         }
     );
     template += `<option value="0">OTRA</option>`;
     $("#universidad").html(template);
 }
 
//Estados
async function consultaEdos() {
    const JSONData = await g_consultaEdosRep("../app/");
    buildSelectEdos(JSONData);
}

function buildSelectEdos(estados) {
    let template = "";
    estados.forEach(
        (estado) => {
            template += `<option value="${estado.id_estado}">${estado.estado}</option>`;
        }
    );
    $("#estado_alumno_perfil").html(template);
}

$("#estado_alumno_perfil").change(function ()
{
    //obj que tienes cambios
    let estado_sel = $("#estado_alumno_perfil").val();
    conusltaMuncipios(estado_sel,0);
});

//Municipios

function buildSelectMunicipios(municipios, idMun) {
    let template = "";
    municipios.forEach(
        (municipio) => {
            let select = idMun === municipio.id_municipio ? "selected" : "";
            template += `<option value="${municipio.id_municipio}" ${select}>${municipio.municipio}</option>`;
        }
    );
    $("#localidad_alumno_perfil").html(template);
}
//Perfil datos
function buildHTMLDatosPeril(alumno) {
    $("#avatarImagePerfilAlumno").attr("src", alumno.perfil_image);
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
    $("#universidad").val(alumno.id_universidad);
    if(alumno.id_universidad==="0"){
        $("#nombreUni").val(alumno.nombre_uni);
        $("#nombreUni").removeClass("d-none");
    }
    else{
        $("#nombreUni").val("");
        $("#nombreUni").addClass("d-none");
    }

    $("#nombreAlumnoImg").html(alumno.nombre_completo);

    $("#correoAlumnoImg").html(alumno.email);
    conusltaMuncipios(alumno.id_estado_fk, alumno.id_municipio);

    validaDocumentoAcredita(alumno);
}

$( "#universidad" ).change(function() {
    let idVal= $("#universidad").val();
    if(idVal==="0")
    {
        $("#nombreUni").removeClass("d-none");
        $("#nombreUni").focus();
    }
    else{
        $("#nombreUni").addClass("d-none");
        $("#nombreUni").val("");
    }
});

function validaDocumentoAcredita(alumno) {
    let alert = ``;
    if (alumno.path_doc_valida === null || alumno.path_doc_valida === '')
    {
        if(alumno.update_doc_at === null){
            alert = `<div class="alert alert-success alert-dismissible" role="alert">
                        <h4 class="alert-heading">SUBIR ARCHIVO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <P>Es necesario subir un comrobante que verifique tu situación escolar actual.</P>
                        <p>Una vez verificado tu documento de situación academica ya no podrás cambiar tu información como la matricula, procedencia y carrera.</p>
                        <hr>
                        <p>Este archivo se renueva cada año, asi que tedrás que comprobar tu situacion escolar despues.</p>
                      </div>`
        }
        else{
            alert = `<div class="alert alert-info alert-dismissible" role="alert">
                        <h4 class="alert-heading">RENOVAR ARCHIVO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <P>Es necesario que renueves tu situacion con un archivo, vuelve a subir un documento que acredite tu situación escolar actual.</P>
                        <p>Una vez verificado tu documento de situación academica ya no podrás cambiar tu información como la matricula, procedencia y carrera.</p>
                      </div>`
        }
    }
    else{
        if (alumno.dias>365){
            alert = `<div class="alert alert-info alert-dismissible" role="alert">
                        <h4 class="alert-heading">RENOVAR ARCHIVO</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <P>Es necesario que renueves tu situacion con un archivo, vuelve a subir un documento que acredite tu situación escolar actual.</P>
                        <p>Una vez verificado tu documento de situación academica ya no podrás cambiar tu información como la matricula, procedencia y carrera.
                        Enviste tu archivo el ${getLegibleFechaHora(alumno.update_doc_at)}</p>
                      </div>`;
        }
        else{
            //Date update code pendiente
            alert = `<div class="alert alert-info alert-dismissible" role="alert">
                        <P>Tu documento fue enviado el ${getLegibleFechaHora(alumno.update_doc_at)}, No necesitas realizar otro movimiento.</P>
                         </div>`
            $("#inputFile").html("");
        }

    }
    $("#alertInfoDoc").html(alert);
}

function conusltaMuncipios(idEdo, idMunSelect) {
    let ruta = '../app/';
    g_consultaMunicipio(ruta, idEdo).then(function(result) {
        buildSelectMunicipios(result, idMunSelect);
    })
}


$("#frm-foto-perfil-alumno").on("submit", function(e) {
    //Ruta del Webbhook
    var formData = new FormData(document.getElementById("frm-foto-perfil-alumno"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "../app/webhook/update-image-perfil.php",
        type: "post",
        dataType: "html",
        data: formData,
        contentType: false,
        processData: false
    }).done(function(res) {
        $("#frm-foto-perfil-alumno").trigger('reset');
        $("#updateFotoPerfil").modal('hide');
        var mensaje = JSON.parse(res);
        if (mensaje.mjeType == 0) {
            alerta(mensaje.Mensaje, "", "warning");
        } else {
            location.reload();
        }
        e.preventDefault();
    });
    e.preventDefault();
});

//onchange FUNCION EN SELECT EDTADO
//ACTUALIZAR LOS MUNICIPIOS

/*LOGICA DE UPDATE FOTO PERFIL

UPDATE DATOS
*/
$("#frm-update-perfil-alumno").on("submit", function(e) {
    if ($("#nombre_alumno_perfil").val() != "" && $("#app_alumno_perfil").val() != "" && $("#apm_alumno_perfil").val() != "" &&
        $("#telefono_alumno_perfil").val() != "" && $("#carrera_alumno_perfil").val() != "" && $("#correo_alumno_perfil").val() != "") {
        //Ruta del Webbhook
        let ruta = "../app/webhook/alumno.update-alumno.php";
        //Parametros que se van a enviar encapsulados
        var params = {
            nombre_alumno: $("#nombre_alumno_perfil").val(),
            app_alumno: $("#app_alumno_perfil").val(),
            apm_alumno: $("#apm_alumno_perfil").val(),
            sexo_alumno: $("#sexo_alumno_perfil").val(),
            telefono_alumno: $("#telefono_alumno_perfil").val(),
            email_alumno: $("#correo_alumno_perfil").val(),
            idMunicipio: $("#localidad_alumno_perfil").val(),
            universidad: $("#universidad").val(),
            nombreUni: $("#nombreUni").val(),
            idProcedencia: $("#procedencia").val(),
            carreraEspecialidad: $("#carrera_alumno_perfil").val()
        };
        //Llamado de la funcion Async y resolviendo la promesa
        enviaFormAlumno(params, ruta).then(function() {
            consultaPefilAlumno().then(function(resultado) {
                buildHTMLDatosPeril(resultado);
            })
            e.preventDefault();
        });

    } else {
        alerta("No se puede completar la solicitud", "Motivo: Faltan campos por llenar", "warning");
    }
    e.preventDefault();
});

function openModalPw() {
    $("#CambiarPsw").modal('show');
}

//Cambio de PWD
$("#frm-update-pwd-alumno").on("submit", function(e) {
    //Cambiar datos de condicion por .val()
    if ($("#pwdOld").val() != "" && $("#pwdNew").val() != "" && $("#pwdNewC").val() != "") {
        //Ruta del Webbhook
        let ruta = "../app/webhook/update-pw.php";
        //Parametros que se van a enviar encapsulados
        var params = {
            pwd: $("#pwdOld").val(),
            pwdNew: $("#pwdNew").val(),
            pwdNewConf: $("#pwdNewC").val()
        };
        if (params.pwdNew != params.pwdNewConf) {
            alerta("No se pudo realizar la operacion", "Las nuevas contraseñas no coinciden", "error");
        } else {
            //Llamado de la funcion Async y resolviendo la promesa
            enviaFormAlumno(params, ruta).then(function(result) {
                $("#frm-update-pwd-alumno").trigger('reset');
                $("#CambiarPsw").modal('hide');
                console.log(result);
            });
        }
    } else {
        alerta("No se pudo realizar la operacion", "Los campos estan vacios", "warning");
    }
    e.preventDefault();
});