console.log("GLOBAL IS LOADING...");
/*ESTADOS Y MUNICIPIOS*/
async function g_consultaMunicipioAjax(route,idEdo) {
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
            error: function(e) {
                console.log(e);
                alert("Error al consultar municipios")
            }
        }
    );
}

async function g_consultaMunicipio(route,IdEdo) {
    return await g_consultaMunicipioAjax(route,IdEdo);
}

async function g_consultaEdosRepAjax(route) {
    return $.ajax(
        {
            url:route+"webhook/lista-estados-rep.php",
            dataType: "json",
            success: function(data){
                //  console.log(data);
            },
            error: function(e) {
                console.log(e);
                alert("Error al traer estados")
            }
        }
    );
}

async function g_consultaEdosRep(route) {
    return await g_consultaEdosRepAjax(route);
}
/*ESTADOS Y MUNICIPIOS*/