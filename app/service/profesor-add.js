//Escucha
$("#frm-add-profesor").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    formData.append("dato", "valor");
    $.ajax({
        url: "./webhook/profesor-add.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        $("#frm-add-profesor").trigger('reset');
        //Se recarga el DataTable para mostrar el nuevo registro
        var table = $('#tblProfesores').DataTable( {
            ajax: "data.json"
            } );
            table.ajax.reload( null, false );
        });
        $("#addNewProfesor").modal('hide');
        e.preventDefault();
});
/*

*/