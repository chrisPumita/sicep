async function consultaGrupos(idCurso){
    let ruta = "./webhook/lista-grupos-curso.php";
    const datos = await listaGposCursoAjax(idCurso, ruta);
    buildHtmlSelectGrupos(datos);
}

$("#frm-add-grupo-curso").on("submit", function(e){
    e.preventDefault();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-grupo-curso"));
    formData.append("dato", "valor");
    $.ajax({
        url: "./webhook/add-grupo-curso.php",
        type: "post",
        dataType: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(res){
            alertaEmergente(res.Mensaje);
        }
    }).done(function(response){
        $("#frm-add-grupo-curso").trigger('reset');
        consultaGrupos($("#idCurso").val());
    });
    $("#modalCreaGrupoCurso").modal('hide');
});