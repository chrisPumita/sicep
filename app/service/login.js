// lo que sejecuta primero
$(document).ready(function () {
    console.log("ajax start");
});

/*SUBMINT de Inicio de sesion*/


/*SUBMINT de Add Alumno*/
$("#frm-add-alumno").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-alumno"));
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
        $("#frm-add-alumno").trigger('reset');
        $("#inlineForm").modal('hide');
        getMarcas();
        });
    e.preventDefault();
});
/*Recupera PW*/

