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
async function consultaProcedenciasAjax() {
    return $.ajax(
        {
            url:"./webhook/lista-dependencias.php",
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
async function consultaUnisAjax() {
    return $.ajax(
        {
            url:"./webhook/lista-universidades.php",
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
async function consultaEdosRepAjax() {
    return $.ajax(
        {
            url:"./webhook/lista-estados-rep.php",
            dataType: "json",
            success: function(data){
                console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

//Consulta documentos disponibles
async function consultaMunicipioAjax(idEdo) {
    return $.ajax(
        {
            url:"./webhook/lista-municipios.php",
            dataType: "json",
            data: {
                filtro : idEdo
            },
            success: function(data){
                console.log(data);
            },
            error: function() {
                alert("Error occured")
            }
        }
    );
}

async function consultaEstadosRep() {
    const jsonData = await consultaEdosRepAjax();
    buildHTMLEstados(jsonData);
}

function buildHTMLEstados(lsEdos) {
    let template = "";
    lsEdos.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_estado}">${obj.estado} (${obj.abrev})</option>`;
        }
    );
    $("#list-edos").html(template);
}

async function consultaMunicipioAjax() {
    const jsonData = await consultaEdosRepAjax();
    buildHTMLMunicipios(jsonData);
}

function buildHTMLMunicipios(muns) {
    let template = "";
    muns.forEach(
        (obj)=>
        {
            template += `<option value="${obj.id_municipio}">${obj.municipio}</option>`;
        }
    );
    $("#list-municipios").html(template);
}