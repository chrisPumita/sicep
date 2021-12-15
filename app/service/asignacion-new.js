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

async function consultaGrupos(idCurso){
    let ruta = "./webhook/lista-grupos-curso.php";
    const datos = await listaGposCursoAjax(idCurso, ruta);
    buildHtmlSelectGrupos(datos);
}

function buildHtmlSelectGrupos(datos) {
    let template = "";
    let gruposVal = $("#grupos");
    let nuevoGpo =0;
    let cont = 0;
    if (datos.length > 0) {
        datos.forEach(
            (dato)=>
            {
                cont++;
                let sel = cont===datos.length ? "selected": "";
                template += `<option ${sel} value="${dato.id_grupo}">${dato.grupo}</option>`;
                try{ nuevoGpo = parseInt(dato.grupo)+1; }
                catch (e) {nuevoGpo="1000";}
            }
        );
        gruposVal.removeAttr("disabled");
    }
    else{
        template += `<option value="0">Agregue un grupo...</option>`;
        gruposVal.attr("disabled", "");
        nuevoGpo="1000";
    }
    gruposVal.html(template);
    $("#nombreGrupoNuevo").val(nuevoGpo);
}


async function consultaListaProfesores() {
        let profesores = await consultaProfesoresAJAX();
        buildHTMLSelect(profesores);
}

function buildHTMLSelect(PROFESORES) {
    let template = "";
    PROFESORES.forEach(
        (PROF)=>{
            template += `<option value="${PROF.id_profesor}">${PROF.prefijo} ${PROF.nombre_completo}</option>`;
        }
    );
    $("#profesorAsig").html(template);
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