// lo que sejecuta primero
$(document).ready(function () {
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
            alerta("Tu registro fue exitoso","Porfavor, ingresa con los datos que proporcionaste","success");
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
    let template = "";
    UNIS.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_universidad}">${obj.siglas} (${obj.nombre})</option>`;
        }
    );
    template += `<option value="0">OTRA</option>`;
    $("#universidades").html(template);
}

$("#estados").change(function ()
{
    let estado_sel = $("#estados").val();
    consultaMunicipios(estado_sel);
});

//LFHL pensando en como obtener el valor cuando se ahga el ONCHANGE pero con el nombre de la Universidad
$( "#universidades" ).change(function() {
    let idVal= $("#universidades").val();
    if(idVal==="0")
    {
        $("#nombreUni").removeClass("d-none");
        $("#nombreUni").focus();
    }
    else{
        $("#nombreUni").addClass("d-none");
    }
  });

//-------------------Star Sessions
$('#frm-login').submit(function (e) {
    e.preventDefault();
    //se ejecuta el elemento submit
    var user = $("#txtEmail").val();
    var pw = $("#txtPw").val();
    let titulo;
    let texto;
    let tipo ;
    if (user == "" || pw == "") {
        titulo= "Campos vacios";
        texto= "Porfavor llena los datos que se solicitan";
        tipo = "warning";
        alerta(titulo,texto,tipo);
    } else {
        var formData = new FormData(document.getElementById("frm-login"));
        formData.append("dato", "valor");
        $.ajaxSetup({
            beforeSend:function(){
                $("#loading").removeClass("d-none");
            },
            complete:function(){
                $("#loading").addClass("d-none");
            }
        });
        $.ajax({
            url: "app/webhook/login.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                let obj_mje = JSON.parse(response);
                if (obj_mje.mjeType == "0") {
                    titulo= "El "+ obj_mje.tipoCuenta+ " NO EXISTE";
                    texto= obj_mje.Mensaje;
                    tipo = "error";
                    alerta(titulo,texto,tipo);
                    //limpiar
                    $('#frm-login').trigger('reset');
                } else {
                    var template = `
                    <div class="alert alert-success" role="alert">
                        <div class="d-flex align-items-center">
                            <strong>${obj_mje.Mensaje}</strong>  Iniciando sesión...
                            <div class="spinner-border ml-auto" role="status" aria-hidden="true">
                            </div>
                        </div>
                    </div>`;
                    //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                    $("#loginMje").html(template);
                    location.reload();
                }
            }
        }).done(function (response) {

        });
    }
    //Cancela las funciones basicas del boton submit y evita regrescar la pagina

})
//-------------------End StarSesion