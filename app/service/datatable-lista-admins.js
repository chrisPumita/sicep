$(document).ready(function() {
    $('#dataProf').fadeOut(0);
    $('#alertMje').fadeOut(0);
    cargaListaProfesoresNoAdmin();
   // cargaAdminsDataTable();
});

var JSONProfesores;

function cargaListaProfesoresNoAdmin(){
    $.ajax({
        url: "./webhook/lista-no-admin.php",
        type: 'POST',
        success: function(response){
            let PROFESORES = JSON.parse(response);
            JSONProfesores = PROFESORES;
            let template=`<option value="0" selected>Seleccionar...</option>`;
            PROFESORES.forEach(profesor => {
                template+=`<option value="${profesor.id_profesor}">
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
    if (id ==0||profSelecc=="Seleccionar...") {
        $('#dataProf').fadeOut(1000);
        $('#containerSend').addClass('d-none');
        $('#alertMje').fadeOut(1000);
    } else {
        $('#dataProf').fadeIn(1000);
        const profesor = JSONProfesores.find( prof => prof.id_profesor === id );
        $('#containerSend').removeClass('d-none');
        pintaDatosProfesorHTML(profesor);
    }
});

function pintaDatosProfesorHTML(prof) {
    $('#idProfesor').val(prof.id_profesor);
    $('#noTRabajador').html(prof.no_trabajador);
    $('#nombreProfesor').html(prof.prefijo+". "+prof.nombre+" "+prof.app+" "+prof.apm);
    $('#correoProfesor').html(prof.email);
    $('#deptoProfesor').html(prof.depto_name);
    $('#fechaRegistroProfesor').html(prof.fecha_registro);
    $('#alertMje').fadeIn(1000);
}