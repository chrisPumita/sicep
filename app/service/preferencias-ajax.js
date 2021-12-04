// lo que sejecuta primero
$(document).ready(function () {
    consultaDeptos();
    consultaProcedencias();
    consultaUnis();
    consultaAulas(0,0);
    consultaDocs();
});

async function consultaDeptos() {
    const JSONData = await consultaDeptosAjax();
    buildHTMLTableDepto(JSONData);
}

function buildHTMLTableDepto(obj_result) {
    let template = "";
    let cont = 0;
    obj_result.forEach(
        (obj_result)=>
        {
            cont ++;
            template += `<tr id="${obj_result.id_depto}">
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.nombre}</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                        <button type="button" class="btn btn-outline-primary" onclick="editaDepartamento('${obj_result.id_depto}', '${obj_result.nombre}');">
                                        <i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger deleteDepto"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>`;
        }
    );
    $("#tbl-cursos").html(template);
}

//Funciones de departamento
function editaDepartamento(id_depto,nombre){
    $("#modal_depto").modal('show');
    $("#id_depto").val(id_depto);
    $("#nombre_depto").val(nombre);
}

function nuevoDepto(){
    $("#modal_depto").modal('show');
    $("#id_depto").val(0);
    $("#nombre_depto").val("");
}

//Enviar valores de las cajas por parametro AJAX en la ruta especioficada del Webhook
//******* C R U  D    D E P A R T A M E N T O V.2.1 Chris RCSG **********************
$("#frm-depto").on("submit", function(e){
    //Ruta del Webbhook
    let ruta = "./webhook/crud-depto.php";
    //Parametros que se van a enviar encapsulados
    var params = {
        id_depto : $("#id_depto").val(),
        nombre_depto :$("#nombre_depto").val()
    };
    //Llamado de la funcion Async
    enviaForm(params,ruta);
    $("#modal_depto").modal('hide');
    consultaDeptos();
    e.preventDefault();
});

//Elimar depto
//Cuando no es un formulario, se envia directamente a sendBack
$(document).on("click", ".deleteDepto", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    var route= "./webhook/delete-depto.php";
    eliminaPreferencias(id,route);
    consultaDeptos();
});


//Funciones Procedencias
async function consultaProcedencias() {
    const JSONData = await consultaProcedenciasAjax("./");
    buildTableHTMLProcedencias(JSONData);
}

function buildTableHTMLProcedencias(obj_result) {
    let template = "";
    let cont = 0;
    obj_result.forEach(
        (obj)=>
        {
            cont ++;
            template += `<tr id="${obj.id_tipo_procedencia}">
                            <th scope="row">${cont}</th>
                            <td>${obj.tipo_procedencia}</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <button type="button" class="btn btn-outline-primary" 
                                data-bs-toggle="modal" data-bs-target="#modal_procedencia">
                                <i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger deteleProcedencia"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
        }
    );
    $("#tbl-procedencias").html(template);
}

async function consultaUnis() {
    const JSONData = await consultaUnisAjax("./");
    buildHTMLTblUnis(JSONData);
}

function buildHTMLTblUnis(obj_result) {
    let template = "";
    let cont = 0;
    obj_result.forEach(
        (obj_result)=>
        {
            cont ++;
            template += `<tr id="${obj_result.id_universidad}">
                                <th scope="row">${cont}</th>
                                <td>${obj_result.nombre}</td>
                                <td>${obj_result.siglas}</td>
                                <!-- BOTON ACCIONES -->
                                <td>
                                    <button type="button" class="btn btn-outline-primary" 
                                    data-bs-toggle="modal" data-bs-target="#modal_uni">
                                    <i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger deleteUni"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>`;
        }
    );
    $("#tbl-universidades").html(template);
}

async function consultaAulas(filtro,tipo) {
    const JSONData = await consultaAulasAjax(filtro,tipo);
    buildHTMLTblAulas(JSONData);
}

function buildHTMLTblAulas(obj_result) {
    let template = "";
    let cont = 0;
    obj_result.forEach(
        (obj)=>
        {
            cont ++;
            template += `<tr id="${obj.id_aula}">
                            <th scope="row">${cont}</th>
                            <td>${obj.edificio}</td>
                            <td>${obj.aula}</td>
                            <td>${obj.campus}</td>
                            <td>${obj.cupo}</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <button type="button" class="btn btn-outline-primary" 
                                data-bs-toggle="modal" data-bs-target="#modal_aulas">
                                <i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger deleteAula"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
        }
    );
    $("#tbl-aulas").html(template);
}

async function consultaDocs() {
    const JSONData = await consultaDocsAjax();
    buildHTMLTblDocuments(JSONData);
}

function buildHTMLTblDocuments(obj_result) {
    let template = "";
    let cont = 0;
    obj_result.forEach(
        (obj)=>
        {
            let acre = obj.tipo == "1" ?` <i class="fas fa-user-shield"></i> ADMIN`:`CUALQUIERA`;
            cont ++;
            template += `<tr id="${obj.id_documento}">
                            <th scope="row">${cont}</th>
                            <td>${obj.nombre_doc}</td>
                            <td>${obj.formato_admitido}</td>
                            <td>${obj.peso_max_mb}MB</td>
                            <td>${acre}</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <button type="button" class="btn btn-outline-primary"
                                data-bs-toggle="modal" data-bs-target="#modal_documentos">
                                <i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger deleteDocumento"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
        }
    );
    $("#tbl-docs").html(template);
}

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".deleteDocumento", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
  //  var url = './detalles-profesor';
  //  redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".deleteAula", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    //  var url = './detalles-profesor';
    //  redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".deteleProcedencia", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    //  var url = './detalles-profesor';
    //  redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".deleteUni", function ()
{
    
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    //  var url = './detalles-profesor';
    //  redirect_by_post(url, {  id: id }, false);
});

//Funcion generica de elimar preferencias
function eliminaPreferencias(id,route){
    $.ajax(
        {
            url: route,
            type: "POST",
            data: {id : id},
            dataType: "html",
            success: function(res){
                console.log(res);
            },
            error: function() {
                alert("Error 500 interno de Servidor");
            }
        }
        
    );
}
