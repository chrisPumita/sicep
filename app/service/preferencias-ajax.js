// lo que sejecuta primero
$(document).ready(function () {
    consultaDeptos();
    consultaUnis();
    consultaDocs();
});

function consultaDeptos() {
    $.ajax(
        {
            url: "./control/list_depto.php",
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

function consultaUnis() {
    $.ajax(
        {
            url: "./control/list_uni.php",
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

function consultaDocs() {
    $.ajax(
        {
            url: "./control/list_documentos.php",
            success: function (response)
            {

                let obj_result = JSON.parse(response);
                console.log(obj_result);
                let template = "";
                let cont = 0;
                obj_result.forEach(
                    (obj_result)=>
                    {
                        cont ++;
                        template += `<tr>
                                        <td>${cont}</td>
                                        <td>${obj_result.nombre_doc}</td>
                                        <td>${obj_result.formato_admitido.toUpperCase()}</td>
                                        <td>${obj_result.peso_max_mb} Mb</td>
                                        <!-- BOTON ACCIONES -->
                                        <td>
                                            <div class="btn-group" role="group" aria-label="acciones">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentos">Editar</button>
                                                <button type="button" class="btn btn-danger">Quitar</button>
                                            </div>
                                        </td>
                                    </tr>`;
                    }
                );
                $("#tbl-docs").html(template);
            }
        }
    );
}