//cargar la lista de estados y municipios

//Consulta documentos disponibles
async function consultaMunicipiosAlumnoAjax(idEdo) {
    return $.ajax(
        {
            url: "./app/webhook/lista-municipios.php",
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

async function consultaMunicipiosAlumno(edo){
    return await consultaMunicipiosAlumnoAjax(edo);
}