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
                        template += `<tr>
                                    <th scope="row">${cont}</th>
                                    <td>${obj_result.nombre}</td>
                                    <!-- BOTON ACCIONES -->
                                    <td>
                                        <div class="btn-group" role="group" aria-label="acciones">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#departamentos">Editar</button>
                                            <button type="button" class="btn btn-danger">Quitar</button>
                                        </div>
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
                        template += `<tr>
                                        <th scope="row">${cont}</th>
                                        <td>${obj_result.nombre}</td>
                                        <td>${obj_result.siglas}</td>
                                        <!-- BOTON ACCIONES -->
                                        <td>
                                            <div class="btn-group" role="group" aria-label="acciones">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#universidades">Editar</button>
                                                <button type="button" class="btn btn-danger">Quitar</button>
                                            </div>
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
                        template += `<tr>
                            <th scope="row">${cont}</th>
                            <td>${obj.tipo_procedencia}</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <div class="btn-group" role="group" aria-label="acciones">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                    <button type="button" class="btn btn-danger">Quitar</button>
                                </div>
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
                                <div class="btn-group" role="group" aria-label="acciones">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                    <button type="button" class="btn btn-danger">Quitar</button>
                                </div>
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
                        cont ++;
                        template += `
                        <tr>
                            <th scope="row">${cont}</th>
                            <td>${obj.nombre_doc}</td>
                            <td>${obj.formato_admitido}</td>
                            <td>${obj.peso_max_mb}MB</td>
                            <!-- BOTON ACCIONES -->
                            <td>
                                <div class="btn-group" role="group" aria-label="acciones">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentos">Editar</button>
                                    <button type="button" class="btn btn-danger">Quitar</button>
                                </div>
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