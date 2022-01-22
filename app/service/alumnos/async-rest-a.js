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
             //  console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer las asignaciones historicas");
        }
    });
}

///DOCUMENTACION
/*Async regresa lista del solicitudes de inscripcion con documentos pendient3s por revisar*/
async function consultaAsyncDocsInscRevisaAlu(idFiltro) {
    return await consultaAsyncDocsInscRevisaAluAJAX(idFiltro);
}

//Funcion ajax de asignaciones
async function consultaAsyncDocsInscRevisaAluAJAX(idFiltro){
    return $.ajax({
        url: "./webhook/alumno.docs-insc-revisa.php",
        type: 'POST',
        dataType: "json",
        data: {
            idFiltro:idFiltro
        },
        success: function (response) {
            //   console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer la infoirmacion solicitada por revisar");
        }
    });
}

/*Async regresa lista del documentos pendient3s por revisar*/
async function consultaAsyncDocsRevisaAlu(idInscipcion,filtro) {
    return await consultaAsyncDocsRevisaAluAJAX(idInscipcion,filtro);
}

//Funcion ajax de asignaciones
async function consultaAsyncDocsRevisaAluAJAX(idInscipcion,filtro){
    return $.ajax({
        url: "./webhook/alumno.lista-docs-insc-revisa-pendientes.php",
        type: 'POST',
        dataType: "json",
        data: {
            idInscipcion:idInscipcion,
            filtro:filtro
        },
        success: function (response) {
            //   console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer los documentos por revisar");
        }
    });
}