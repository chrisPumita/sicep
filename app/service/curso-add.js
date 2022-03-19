 $(document).ready(function () {
    cargaListDocs();
});
//Funcion tipo SUBMIT para envio de datos y peticiones a servidor LFHL
$("#msform").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("msform"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "./webhook/add-curso.php",
        type: "post",
        dataType: "html",
        data: formData,
        contentType: false,
        processData: false
    }).done(function(res){
        $("#frm-add-modelo").trigger('reset');
        loadContaores();
        let mje=JSON.parse(res);
        let template = `
            <div class="col-sm-12 d-flex justify-content-center">
                <a href="./lista-propuestas">
                <button type="button" class="btn btn-primary me-1 mb-1">
                    <i class="fas fa-coffee"></i> Ver Mis cursos
                </button>
                </a>
                <a href="./nuevo-curso">
                    <button type="button" class="btn btn-info me-1 mb-1">
                        <i class="fas fa-plus"></i> Crear Otro
                    </button>
                </a>
                <button type="button" class="btn btn-success me-1 mb-1" onclick="detailsCurso(${mje.idReturn})">
                    <i class="fas fa-graduation-cap"></i>Terminar Edición
                </button>
            </div>
            `;
        $("#mensajeResponseAdd").html(mje.Mensaje);
        $("#containerBtnAdd").html(template);
    });
    e.preventDefault();
});

async function cargaListDocs() {
    const JSONData = await consultaDocsAjax();
    buildListGHTMLDocs(JSONData);
}
//lg-documentos

function buildListGHTMLDocs(obj_result) {
    let template = "";
    obj_result.forEach(
        (obj_result)=>
        {
            template += `
            <label class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" name="documentos[]" value="${obj_result.id_documento}">
                ${obj_result.nombre_doc}
            </label>
            `;
        }
    );
    $("#lg-documentos").html(template);
}


function detailsCurso(idCurso) {
    var url = './editar-detalles-propuesta';
    redirect_by_post(url, {
        id: idCurso
    }, false);
}