//funciones async js backend
//get courses
async function consultaAsyncOfertaAsignAlu() {
    return await consultaAsyncOfertaAsigAJAX();
}
async function consultaAsyncDetailsAsigInscribe(idAsig) {
    return await consultaAsyncAJAXDetailsAsigInscribe(idAsig);
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
//
async function consultaAsyncAJAXDetailsAsigInscribe(idAsig){
    return $.ajax({
        url: "../app/webhook/alumno.detailsAsigInscribe.php",
        type: 'POST',
        data: {idAsig:idAsig},
        dataType: "json",
        success: function (response) {
            //  console.log(response);
        },
        error: function() {
            alert("Error al tratar de traer los detalles de la asignacion");
        }
    });
}



async function consultaDescuentosAsigInscribe(idGrupo) {
    return await consultaDescuentosAsigInscribeAjax(idGrupo);
}

async function consultaDescuentosAsigInscribeAjax(id){
    return $.ajax(
        {
            url: "../app/webhook/descuentos-curso.php",
            type: "POST",
            data: {id : id},
            dataType: "json",
            success: function(res){
                //  console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
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