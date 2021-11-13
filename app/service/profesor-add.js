$(document).ready(function() {
    
    });

$("#frm-add-profesor").on("submit", function(e){
    alert("Ok");
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "../webhook/profesor-add.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        $("#frm-add-profesor").trigger('reset');
        alert("Checa la consola");
        console.log(res);
        });
        e.preventDefault();
});
/*

*/