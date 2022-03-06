window.onload = function() {
    let idCursoAsig = $("#idCursoToAsig").val();
    loadGeneraciones();
    loadSemestre();
    consultaGrupos(idCursoAsig);
    consultaListaProfesores();
    cargaCursoDetailsBasic("1",idCursoAsig);
    
    compruebaFechas();
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


function compruebaFechas() {
    let inicioInsc = $("#inicioInsc").val();
    var fechaInsc = new Date(inicioInsc);
    var dias = 15; // Número de días a agregar
    var meses = 4;
    fechaInsc.setDate(fechaInsc.getDate() + dias);
    $("#finInsc").attr('min',inicioInsc);
    $("#finInsc").val(formatDate(fechaInsc));
    $("#InicioCurso").attr('min',inicioInsc);
    $("#InicioCurso").val(formatDate(fechaInsc));

    $("#finCurso").attr('min',formatDate(fechaInsc));
    var fechaFin = new Date(formatDate(fechaInsc));
    fechaFin.setMonth(fechaFin.getMonth() + meses);
    $("#finCurso").val(formatDate(fechaFin));

    $("#inicioCal").attr('min',formatDate(fechaFin));
    $("#inicioCal").val(formatDate(fechaFin));

    $("#finCal").attr('min',formatDate(fechaFin));
    let fechaCalFin = fechaFin;
    fechaCalFin.setDate(fechaCalFin.getDate() + dias);
    $("#finCal").val(formatDate(fechaCalFin));

}

function formatDate(date) {
    let y = date.getFullYear();
    let m =  (date.getMonth() + 1)<10 ?  '0'+(date.getMonth() + 1) :  (date.getMonth() + 1);
    let d = date.getDate()<10 ? '0'+date.getDate():date.getDate();
    let formatted_date = y + "-" + m + "-" +d;
    return formatted_date;
}

$('#inicioInsc').change(function() {
    let inicioInsc = $("#inicioInsc").val();
    var fechaInsc = new Date(inicioInsc);
    var dias = 15; // Número de días a agregar
    fechaInsc.setDate(fechaInsc.getDate() + dias);
    $("#finInsc").attr('min',inicioInsc);
    $("#finInsc").val(formatDate(fechaInsc));
    $("#InicioCurso").attr('min',inicioInsc);
    $("#InicioCurso").val(formatDate(fechaInsc));
});

$('#InicioCurso').change(function() {
    let inicioCurso = $("#InicioCurso").val();
    var fechaInsc = new Date(inicioCurso);
    var meses = 4;
    $("#finCurso").attr('min',inicioCurso);
    var fechaFin = new Date(formatDate(fechaInsc));
    fechaFin.setMonth(fechaFin.getMonth() + meses);
    $("#finCurso").val(formatDate(fechaFin));
});

$('#finCurso').change(function() {
    let fecha = $("#finCurso").val();
    let fechaCalFin  = new Date(fecha);
    $("#inicioCal").attr('min',fecha);
    $("#inicioCal").val(fecha);

    let dias = 15;
    $("#finCal").attr('min',fecha);
    fechaCalFin.setDate(fechaCalFin.getDate() + dias);
    $("#finCal").val(formatDate(fechaCalFin));
});

$('#inicioCal').change(function() {
    let fecha = $("#inicioCal").val();
    let fechaCalFin  = new Date(fecha);
    let dias = 15;
    $("#finCal").attr('min',fecha);
    fechaCalFin.setDate(fechaCalFin.getDate() + dias);
    $("#finCal").val(formatDate(fechaCalFin));
});

function dateToday() {
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
        dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
        mes='0'+mes //agrega cero si el menor de 10
   return ano+"-"+mes+"-"+dia;
}