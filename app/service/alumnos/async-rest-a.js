//funciones async js backend
//get courses
async function consultaAsyncOfertaAsignAlu() {
    return await consultaAsyncOfertaAsigAJAX();
}

async function consultaAsyncOfertaAsigAJAX(){
    return $.ajax({
        url: "../app/webhook/alumno.lista-asig-oferta.php",
        type: 'POST',
        dataType: "json",
        success: function (response) {
               console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer las asignaciones historicas");
        }
    });
}