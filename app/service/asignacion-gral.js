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
        catch (e) {
            console.log("ok");
        }

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