//funciones async js backend
//get courses
async function consultaAsyncOfertaAsignAlu() {
    return await consultaAsyncOfertaAsigAJAX();
}
async function consultaAsyncDetailsAsigInscribe(idAsig) {
    return await consultaAsyncAJAXDetailsAsigInscribe(idAsig);
}

async function consultaAsyncOfertaAsigAJAX() {
    return $.ajax({
        url: "../app/webhook/alumno.lista-asig-oferta.php",
        type: 'POST',
        dataType: "json",
        error: function() {
            alert("Error al tratar de traer las asignaciones historicas");
        }
    });
}

async function buscaInscripcion(idAsig) {
    return await buscaInscripcionAjax(idAsig);
}

async function buscaInscripcionAjax(idAsig) {
    return $.ajax({
        url: "../app/webhook/alumno.revisaInscPrevia.php",
        type: 'POST',
        data:{idAsig:idAsig},
        dataType: "json",
        error: function() {
            alert("Error interno");
        }
    });
}
//
async function consultaAsyncAJAXDetailsAsigInscribe(idAsig) {
    return $.ajax({
        url: "../app/webhook/alumno.detailsAsigInscribe.php",
        type: 'POST',
        data: { idAsig: idAsig },
        dataType: "json",
        error: function() {
            alert("Error al tratar de traer los detalles de la asignacion");
        }
    });
}



async function consultaDescuentosAsigInscribe(idGrupo) {
    return await consultaDescuentosAsigInscribeAjax(idGrupo);
}

async function consultaDescuentosAsigInscribeAjax(id) {
    return $.ajax({
            url: "../app/webhook/descuentos-curso.php",
            type: "POST",
            data: { id: id },
            dataType: "json",
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
async function consultaAsyncDocsInscRevisaAluAJAX(idFiltro) {
    return $.ajax({
        url: "./webhook/alumno.docs-insc-revisa.php",
        type: 'POST',
        dataType: "json",
        data: {
            idFiltro: idFiltro
        },
        error: function() {
            alert("Error al tratar de traer la infoirmacion solicitada por revisar");
        }
    });
}

/*Async regresa lista del documentos pendient3s por revisar*/
async function consultaAsyncDocsRevisaAlu(idInscipcion, filtro) {
    return await consultaAsyncDocsRevisaAluAJAX(idInscipcion, filtro);
}

//Funcion ajax de asignaciones
async function consultaAsyncDocsRevisaAluAJAX(idInscipcion, filtro) {
    return $.ajax({
        url: "./webhook/alumno.lista-docs-insc-revisa-pendientes.php",
        type: 'POST',
        dataType: "json",
        data: {
            idInscipcion: idInscipcion,
            filtro: filtro
        },
        error: function() {
            alert("Error al tratar de traer los documentos por revisar");
        }
    });
}

async function consultaTemarioOferta(idGrupo) {
    return await consultaTemarioAjax(idGrupo);
}
async function consultaTemarioAjax(idCurso) {
    return $.ajax({
            url: "./webhook/temario-curso.php",
            type: "POST",
            data: { idCurso: idCurso },
            dataType: "json",
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

/////PROMISE GENERAL Consulta de Horarios
async function consultaHorarioOferta(idGrupo) {
    return await consultaHorariosAjax(idGrupo);
}

async function consultaHorariosAjax(id) {
    return $.ajax({
            url: "./webhook/horarios-grupo.php",
            type: "POST",
            data: { id: id },
            dataType: "json",
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

async function consultaDocumentacionOferta(idCurso) {
    return await consultaDocumentacionAjax(idCurso);
}
/// DOCUMENMTACION AJAX
async function consultaDocumentacionAjax(idCUrso) {
    return $.ajax({
            url: "./webhook/lista-doc-sol-curso.php",
            type: "POST",
            data: { idCurso: idCUrso },
            dataType: "json",
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor en ConsultaInfo");
            }
        }

    );
}

async function cancelarSolicitudAlumno(idSolicitud) {
    return await cancelarSolicitudAlumnoAjax(idSolicitud);
}

async function cancelarSolicitudAlumnoAjax(idSolicitud) {
    return $.ajax({
        url: "../app/webhook/alumno.cancelSolicitud.php",
        data: {
            idSolicitud: idSolicitud
        },
        type: "POST",
        dataType: "json",
        error: function(e) {
            alert("Error occured")
        }
    });
}

///////////////////// PREFERENCIAS (SIMILAR) ////////////////
async function enviaFormAlumno(params, route) {
    const mensaje = await sendBackEndAlumnoAjax(params, route);
    //Mensaje en JS para usar con SwatAlert
    switch (mensaje.mjeType) {
        case -1:
            alerta(mensaje.Mensaje, "", "error");
            break;
        case 0:
            alerta(mensaje.Mensaje, "", "warning");
            break;
        case 1:
            alertaEmergente(mensaje.Mensaje);
            break;
        default:
            alertaEmergente("No a entrado el swtich");
            break;
    }

}

async function sendBackEndAlumnoAjax(params, route) {
    return $.ajax({
        url: route,
        type: "POST",
        data: params,
        dataType: "json",
        cache: false,
        error: function(e) {
            alert("Error 500 interno Ajax");
        }
    });
}
async function consultaPefilAlumnoAjax() {
    return $.ajax({
        url: "../app/webhook/alumno.datos.php",
        type: 'POST',
        dataType: "json",
        data: {},
        error: function(e) {
            alert("Error occured")
        }
    });
}

async function consultaPefilAlumno() {
    return await consultaPefilAlumnoAjax();
}
async function consultaProcedenciasAjax(route) {
    return $.ajax({
        url: route + "webhook/lista-dependencias.php",
        dataType: "json",
        error: function() {
            alert("Error occured")
        }
    });
}

/*********************CONULTA UNIVERSIDADES **************************** */
async function consultaUnisAlumno() {
    return await consultaUnisAlumnoAjax("../app/");
 }
async function consultaUnisAlumnoAjax(route) {
    return $.ajax(
        {
            url:route+"webhook/lista-universidades.php",
            dataType: "json",
            error: function() {
                alert("Error occured")
            }
        }
    );
}


/****************
 *  FUNCION ASINCRONA DE CANCELACION DE DOCUMENTO
 * ***************/
async function actionDocumentFileAjax(idFile,idDocSol,idAsig){
    return $.ajax({
        url: "../app/webhook/alumno.action-file.php",
        type: 'POST',
        data: {idAsig:idAsig,
                idFile:idFile,
                idDocSol:idDocSol},
        dataType: "json",
        error: function() {
            alerta("Error al tratar de inscribirte");
        }
    });
}

async function actionDocumentFile(idFile,iddocSol,idAsig){
    return await actionDocumentFileAjax(idFile,iddocSol,idAsig);
}

/*DOCUMENTACION*/
/*Async regresa lista del solicitudes de inscripcion con documentos pendient3s por revisar*/
async function consultaAsyncDocsInscRevisaAlum(idFiltro) {
    return await consultaAsyncDocsInscRevisaAlumAJAX(idFiltro);
}

//Funcion ajax de asignaciones
async function consultaAsyncDocsInscRevisaAlumAJAX(idFiltro){
    return $.ajax({
        url: "../app/webhook/lista-docs-insc-revisa.php",
        type: 'POST',
        dataType: "json",
        data: {
            idFiltro:idFiltro
        },
        success: function (response) {
        },
        error: function() {
            alert("Error al tratar de traer la infoirmacion solicitada por revisar");
        }
    });
}

/*Async regresa lista del documentos pendient3s por revisar*/
async function consultaAsyncDocsRevisaAlum(idInscipcion,filtro) {
    return await consultaAsyncDocsRevisaAlumAJAX(idInscipcion,filtro);
}

//Funcion ajax de asignaciones
async function consultaAsyncDocsRevisaAlumAJAX(idInscipcion,filtro){
    return $.ajax({
        url: "./webhook/lista-docs-insc-revisa-pendientes.php",
        type: 'POST',
        dataType: "json",
        data: {
            idInscipcion:idInscipcion,
            filtro:filtro
        },
        success: function (response) {
        },
        error: function() {
            alert("Error al tratar de traer los documentos por revisar");
        }
    });
}
