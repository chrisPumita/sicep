$(document).ready(function() {

});

window.onload = function() {
    let idCursoAsig = $("#idCursoToAsig").val();
    loadGeneraciones();
    loadSemestre();
    consultaGrupos(idCursoAsig);
    consultaListaProfesores();
    cargaCursoDetailsBasic("1",idCursoAsig);
};

async function cargaCursoDetailsBasic(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    let curso = JSONData[0];
    //buildHTMLValues(JSONData[0]);
    $("#nombreCurso").html(curso.nombre_curso);
    $("#idCursoGrupo").val(curso.id_curso);
    $("#costo").val(curso.costo_sugerido);
    $("#nameCursoTittle").html(curso.nombre_curso);
    $("#costoCursoPred").html("$"+curso.costo_sugerido);
    $("#fondoImg").css("background", "url('"+curso.banner_img+"')");
}



//******* INSERT ASIGNACION V.1.0 Chris RCSG **********************
$("#frm-add-asignacion").on("submit", function(e){
    //Ruta del Webbhook
    e.preventDefault();
    sweetConfirm('Confirme el grupo nuevo', '¿Estas seguro de que deseas crear un nuevo grupo?', function (confirmed) {
        if (confirmed) {
            var formData = new FormData(document.getElementById("frm-add-asignacion"));
            formData.append("dato", "valor");
            formData.append("publico", $("#chkPublica").prop('checked'));
            $.ajax({
                url: "./webhook/add-asignacion.php",
                type: "POST",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                console.log(res);
                sweetCustomDesicion(res.Mensaje, '¿Qué más desea hacer ahora?','<i class="far fa-eye"></i> Ver los registros','<i class="fas fa-undo-alt"></i> Registrar otro grupo','success', function (confirmed){
                    if (confirmed) {
                        window.location.href = "./lista-grupos";
                    }
                    else{
                        $("#frm-add-asignacion").trigger('reset');
                        window.scrollTo(0, 0);
                    }
                });
            });
        }
    });
});
