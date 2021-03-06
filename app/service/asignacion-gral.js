async function consultaGrupos(idCurso){
    let ruta = "./webhook/lista-grupos-curso.php";
    const datos = await listaGposCursoAjax(idCurso, ruta);
    buildHtmlSelectGrupos(datos);
}

//Fucnion especial para constructor de grupos list
function buildHtmlSelectGrupos(datos) {
    let template = "";
    let gruposVal = $("#grupos");
    let nuevoGpo =0;
    let cont = 0;
    let idLastGpo =0;
    if (datos.length > 0) {
        datos.forEach(
            (dato)=>
            {
                cont++;
                let sel = cont===datos.length ? "selected": "";
                template += `<option ${sel} value="${dato.id_grupo}">${dato.grupo}</option>`;
                try{ nuevoGpo = parseInt(dato.grupo)+1; }
                catch (e) {nuevoGpo="1000";}
                idLastGpo =dato.id_grupo;
            }
        );
        gruposVal.removeAttr("disabled");
        htmlGposOptions(true);
        try {
            consultaHorarioGpoList(idLastGpo);
        }
        catch (e) {/*No horarios result */  }

    }
    else{
        template += `<option value="0">Agregue un grupo...</option>`;
        gruposVal.attr("disabled", "");
        nuevoGpo="1000";
        htmlGposOptions(false);
    }
    gruposVal.html(template);
    $("#nombreGrupoNuevo").val(nuevoGpo);
}


function htmlGposOptions(val) {
    let template = "";
    if (!val) {
        template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>NO HAY GRUPOS</strong> No hay grupos registrados, agregue uno para configurar los horarios.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
        $("#btnDeleteGrupo").prop( "disabled", true );
    }
    else{
        $("#btnDeleteGrupo").prop( "disabled", false );
    }
    $("#alertGpos").html(template);
}

async function consultaListaProfesores() {
    consultaAsyncListaProfesores(1).then(function(profesores){
        buildHTMLSelect(profesores);
    })
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
        consultaGrupos($("#idCursoGrupo").val());
    });
    $("#modalCreaGrupoCurso").modal('hide');
});


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