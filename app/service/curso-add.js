
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