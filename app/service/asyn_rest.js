//get courses
async function consultaCursosAjax(filtro, idCursoEspc) {
    return $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            id_curso_filtro : idCursoEspc
        },
        success: function(data){
            // console.log(data);
        },
        error: function() {
            alert("Error occured")
        }
    });
}

async function listaGposCursoAjax(idCurso,route){
    return $.ajax(
        {
            url: route,
            type: "POST",
            data: {id_curso:idCurso},
            dataType: "json",
            cache: false,
            success: function(res){
                // console.log(res);
            },
            error: function() {
                alert("Error 500 interno de Servidor al consultar grupos");
            }
        }
    );
}
/****************************************************/

///Consulta de departamentos registrados
async function consultaDeptosAjax() {
    return $.ajax(
        {
            url:"./webhook/lista-departamentos.php",
            type: 'POST',
            dataType: "json",
            success: function(data){
                // console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

///COnsulta de procedencias
async function consultaProcedenciasAjax(route) {
    return $.ajax(
        {
            url:route+"webhook/lista-dependencias.php",
            dataType: "json",
            success: function(data){
                // console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

//COnsulta de Universidades registradas
async function consultaUnisAjax(route) {
    return $.ajax(
        {
            url:route+"webhook/lista-universidades.php",
            dataType: "json",
            success: function(data){
                // console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

//Consulta de Aulas de la UNiversidad
async function consultaAulasAjax(filtro,tipo){
    return $.ajax(
        {
            url:"./webhook/lista-aulas.php",
            type: 'POST',
            data: {
                filtro : filtro,
                tipo:tipo
            },
            dataType: "json",
            success: function(data){
                // console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

//Consulta documentos disponibles
async function consultaDocsAjax() {
    return $.ajax(
        {
            url:"./webhook/lista-documentos.php",
            dataType: "json",
            success: function(data){
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

//Consulta documentos disponibles
async function consultaEdosRepAjax(route) {
    return $.ajax(
        {
            url:route+"webhook/lista-estados-rep.php",
            dataType: "json",
            success: function(data){
              //  console.log(data);
            },
            error: function() {
                alert("Error al traer estados")
            }
        }
    );
}

//Consulta documentos disponibles
async function consultaMunicipioAjax(route,idEdo) {
    return $.ajax(
        {
            url: route+"webhook/lista-municipios.php",
            type: 'POST',
            dataType: "json",
            data: {
                filtro : idEdo
            },
            success: function(data){
              //  console.log(data);
            },
            error: function() {
                alert("Error al consultar municipios")
            }
        }
    );
}

///////////////////// PREFERENCIAS ////////////////
async function enviaForm(params,route){
    const mensaje = await sendBackEndPreferencias(params, route);
    //Mensaje en JS para usar con SwatAlert
    alertaEmergente(mensaje.Mensaje);
}

async function sendBackEndPreferencias(params,route){
    return $.ajax(
        {
            url: route,
            type: "POST",
            data: params,
            dataType: "json",
            cache: false,
            success: function(res){
               // console.log(res);
            },
            error: function() {
                alert("Error 500 interno Ajax");
            }
        }
    );
}

//Funcion generica de elimar preferencias

async function eliminaPreferencia(id,route){
    const mensaje = await eliminaPreferenciasAjax(id, route);
    //Mensaje en JS para usar con SwatAlert
    alertaEmergente(mensaje.Mensaje);
}

async function eliminaPreferenciasAjax(id,route){
    return $.ajax(
        {
            url: route,
            type: "POST",
            data: {id : id},
            dataType: "json",
            success: function(res){
                console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

/////EDIFICIOS DE LA FACULTAD
async function cargaAulasListDespl() {
    const JSONData = await consultaAulasAjax(1,0);
    buildHTMLDespEdificios(JSONData);
}

/// HORARIOS DE LOS CURSOS
async function consultaHorariosAjax(id){
    return $.ajax(
        {
            url: "./webhook/horarios-grupo.php",
            type: "POST",
            data: {id : id},
            dataType: "json",
            success: function(res){
             //   console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

/////PROMISE GENERAL Consulta de Horarios
async function consultaHorario(idGrupo) {
    return await consultaHorariosAjax(idGrupo);
}

/// DESCUENTOS DE LOS CURSOS
async function consultaDescuentosAjax(id){
    return $.ajax(
        {
            url: "./webhook/descuentos-curso.php",
            type: "POST",
            data: {id : id},
            dataType: "json",
            success: function(res){
                //   console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

/////PROMISE GENERAL CONSULTA DESCUENTOS
async function consultaDescuentos(idGrupo) {
    return await consultaDescuentosAjax(idGrupo);
}

/// TEMAS DEL CURSO

/// DESCUENTOS DE LOS CURSOS
async function consultaTemarioAjax(idCurso){
    return $.ajax(
        {
            url:"./webhook/temario-curso.php",
            type: "POST",
            data: {idCurso : idCurso},
            dataType: "json",
            success: function(res){
                //   console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor");
            }
        }

    );
}

/////PROMISE GENERAL CONSULTA DESCUENTOS
async function consultaTemario(idGrupo) {
    return await consultaTemarioAjax(idGrupo);
}

/// DESCUENTOS DE LOS CURSOS
async function consultaInfoAsignacionAjax(idAsignacion,filtro){
    return $.ajax(
        {
            url:"./webhook/lista-asignaciones-details.php",
            type: "POST",
            data: {idAsignacion : idAsignacion, filtro:filtro},
            dataType: "json",
            success: function(res){
                //   console.log(res);
            },
            error: function() {
                internalErrorAlert("Error 500 interno de Servidor en ConsultaInfo");
            }
        }

    );
}

/////PROMISE GENERAL CONSULTA DESCUENTOS
//Especificar Id-> Para uno en especifico, cuando 0, especificar el tipo de filtro
async function consultaDetallesAsignaciones(idAsignacion, filtro) {
    return await consultaInfoAsignacionAjax(idAsignacion, filtro);
}

//Funcion asincrona que regresa la lista de profesores activos
async function consultaProfesoresAJAX(filtro){
    return $.ajax({
        url: "./webhook/lista-profesores.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro : filtro
        },
        success: function (response) {
        },
        error: function() {
            alert("Error occured")
        }
    });

}