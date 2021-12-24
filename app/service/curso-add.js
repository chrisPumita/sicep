 $(document).ready(function () {
    cargaListDocs();
    alert("Funciona");
});
//Funcion tipo SUBMIT para envio de datos y peticiones a servidor LFHL
$("#frm-add-modelo").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-modelo"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "../webhook/add-modelo.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        $("#frm-add-modelo").trigger('reset');
        $("#modaladdmodelo").modal('hide');
        getMarcas();
        });
    e.preventDefault();
});

async function cargaListDocs() {
    const JSONData = await consultaDocsAjax();
    //buildTableHTMLProcedencias(JSONData);
    console.log(JSONData);
}
//lg-documentos

function buildListGHTMLDocs(obj_result) {
    let template = "";
    obj_result.forEach(
        (obj_result)=>
        {
            template += `
            <label class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="">
                Comprobante de pago
            </label>
            `;
        }
    );
    $("#lg-documentos").html(template);
}
