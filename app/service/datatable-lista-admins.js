$(document).ready(function() {
    cargaListaProfesoresNoAdmin();
   // cargaAdminsDataTable();
});


function cargaListaProfesoresNoAdmin(){
    $.ajax({
        url: "./webhook/lista-no-admin.php",
        type: 'POST',
        success: function(response){
            let PROFESORES = JSON.parse(response);
            let template=`<option value="" selected>Seleccionar...</option>`;
            PROFESORES.forEach(profesor => {
                template+=`<option value="${profesor.prefijo} ${profesor.nombre} ${profesor.app} ${profesor.apm}">
                                ${profesor.prefijo} ${profesor.nombre} ${profesor.app} ${profesor.apm}
                           </option> `;
            });
            $("#listaDesProfesores").html(template);
        },
        error: function() {
            alert("Error occured")
        }
    });
}

$("#listaDesProfesores").change(function () {
    var profSelecc = $(this);
    var id = profSelecc.val();
    console.log(id);
    if (id ==0||profSelecc=="Seleccione...") {
        $("#collapseExample").collapse(true);
        $("#collapsebutton").collapse(true);
        $("#nombre").empty();
        $("#notrabajador").empty();
        $("#email").empty();
        $("#depto").empty();
        $("#fecharegis").empty();
    } else {
        $("#collapseExample").collapse(false);
        $("#collapsebutton").collapse(false);
        consultaDatosProfesorActivo(id);
    }
});