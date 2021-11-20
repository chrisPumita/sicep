// lo que sejecuta primero
$(document).ready(function () {
    consultaDeptos();
    consultaProcedencias();
    consultaUnis();
    consultaDocs();
    consultaAulas(0,0);
});

///COnsulta de departamentos registrados
function consultaDeptos() {
    $.ajax(
        {
            url:"./webhook/lista-departamentos.php",
            type: 'POST',
            success: function (response)
            {
                let obj_result = JSON.parse(response);
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
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#departamentos"
                                        data-bs-toggle="modal" data-bs-target="#modal_depto">
                                        <i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger deleteDepto"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>`;
                    }
                );
                $("#tbl-cursos").html(template);
            }
        }
    );
}


//COnsulta de Universidades registradas
function consultaUnis() {
    $.ajax(
        {
            url:"./webhook/lista-universidades.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
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
        }
    );
}

///COnsulta de procedencias
function consultaProcedencias() {
    $.ajax(
        {
            url:"./webhook/lista-dependencias.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
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
        }
    );
}

//Consulta de Aulas de la UNiversidad
function consultaAulas(filtro,tipo) {
    $.ajax(
        {
            url:"./webhook/lista-aulas.php",
            type: 'POST',
            data: {
                filtro : filtro,
                tipo:tipo
            },
            success: function (response)
            {
                let obj_result = JSON.parse(response);
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
        }
    );
}

//Consulta documentos disponibles
function consultaDocs() {
    $.ajax(
        {
            url:"./webhook/lista-documentos.php",
            success: function (response)
            {
                let obj_result = JSON.parse(response);
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
                        </tr>
                        `;
                    }
                );
                $("#tbl-docs").html(template);
            }
        }
    );
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

$(document).on("click", ".deleteDepto", function ()
{
    let ElementDOM = $(this)[0].parentElement.parentElement;
    let id = $(ElementDOM).attr("id");
    //  var url = './detalles-profesor';
    //  redirect_by_post(url, {  id: id }, false);
});