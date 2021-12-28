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
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
        $("#frm-add-modelo").trigger('reset');
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
    console.log(obj_result);
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
