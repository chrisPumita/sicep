//FUNCION SUBMIT PARA EL FORM DE DOC COCHE
$("#frm-banner-curso").on("submit", function(e){
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-banner-curso"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "./webhook/update-banner-curso.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
            $("#frm-banner-curso").trigger('reset');
            $("#updateBannerCurso").modal('hide');
            document.getElementById("preview").src = "https://sierranorte.cnt.es/wp-content/uploads/no_preview.jpg";
            let id = $("#idCurso").val();
            cargaCursoDetails(-1,id);
        });
});

