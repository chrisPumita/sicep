//Escucha
$("#frm-add-profesor").on("submit", function(e){
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    formData.append("dato", "valor");
    $.ajax({
        url: "./webhook/profesor-add.php",
        type: "post",
        dataType: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(result) {
            console.log(result);
            if (result.mjeType == 1){
                alertaEmergente(result.Mensaje);
                $("#frm-add-profesor").trigger('reset');
                //Se recarga el DataTable para mostrar el nuevo registro
                try{
                    var table = $('#tblProfesores').DataTable( {
                        ajax: "data.json"
                    } );
                    table.ajax.reload( null, false );
                }
                catch (e) {            }
                $("#addNewProfesor").modal('hide');
            }
            else{
                alerta("No se registro el nuevo Profesor",result.Mensaje,"error");
            }
        },
        error: function(result){
            alerta("No se registró el nuevo Profesor","El correo o número de trabajador ya esta registrado en la base de datos. Revice la información y vuelva a intentarlo","error");
        }
    })
});
/*

*/