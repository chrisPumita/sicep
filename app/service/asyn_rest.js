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
    const mensaje= await sendBackEndPreferencias(params, route);
    //console.log(mensaje);
}

async function sendBackEndPreferencias(params,route){
    return $.ajax(
        {
            //url: "../webhook/crud-depto.php",
            url: route,
            type: "POST",
            data: params,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "html",
            success: function(res){
                console.log(res);
            },
            error: function() {
                alert("Error occured")
            }
        }
        
    );
}