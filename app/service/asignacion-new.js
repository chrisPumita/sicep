$(document).ready(function() {

});

window.onload = function() {
    loadGeneraciones();
    loadSemestre();
    consultaGrupos($("#idCurso").val());
    consultaListaProfesores();
    cargaCursoDetailsBasic("-1",$("#idCurso").val());
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

function loadGeneraciones() {
    let anio =yearToday();
    let template = "";
    for (let i = anio; i < anio+3; i++){
        template += `<option value="${i}">${i}</option>`;
    }
    $("#generacion").html(template);
}

function loadSemestre() {
    let anio =yearToday();
    let lastAnio = anio-1;
    let template = `<option value="${lastAnio}-2">${lastAnio}-2</option>
                    <option value="${anio}-1">${anio}-1</option>
                    <option value="${anio}-2">${anio}-2</option>`;
    $("#semestre").html(template);
}

//******* INSERT ASIGNACION V.1.0 Chris RCSG **********************
$("#frm-add-asignacion").on("submit", function(e){
    //Ruta del Webbhook
    e.preventDefault();
    sweetConfirm('Confirme el grupo nuevo', '¿Estas seguro de que deseas crear un nuevo grupo?', function (confirmed) {
        if (confirmed) {
            var formData = new FormData(document.getElementById("frm-add-asignacion"));
            formData.append("dato", "valor");
            $.ajax({
                url: "./webhook/add-asignacion.php",
                type: "post",
                dataType: "json",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
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
