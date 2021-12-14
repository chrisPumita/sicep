$(document).ready(function() {
    loadGeneraciones();
    loadSemestre();
    consultaGrupos($("#idCurso").val());
    consultaListaProfesores();
    cargaCursoDetailsBasic("-1",$("#idCurso").val());
});

async function cargaCursoDetailsBasic(filtro, idUnique) {
    const JSONData = await consultaCursosAjax(filtro,idUnique);
    let curso = JSONData[0];
    //buildHTMLValues(JSONData[0]);
    $("#nombreCurso").html(curso.nombre_curso);
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
    if (datos.length > 0) {
        datos.forEach(
            (dato)=>
            {
                template += `<option value="${dato.id_grupo}">${dato.grupo}</option>`;
            }
        );
        gruposVal.removeAttr("disabled");
    }
    else{
        template += `<option value="0">Agregue un grupo...</option>`;
        gruposVal.attr("disabled", "");
    }
    gruposVal.html(template);
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
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function(res){
                    alertaEmergente(res);
                    console.log(res);
                    sweetCustomDesicion('Se ha abierto un nuevo grupo', '¿Qué más desea hacer ahora?','<i class="fas fa-undo-alt"></i> Registrar otro grupo','<i class="far fa-eye"></i> Ver el registrado','success', function (confirmed){
                        if (confirmed) {
                            $("#frm-add-asignacion").trigger('reset');
                            window.scrollTo(0, 0);
                        }
                        else{
                            alert("selecciono Ver");
                        }
                    });
                });
        }
    });
});