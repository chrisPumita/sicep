
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