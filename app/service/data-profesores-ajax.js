
async function consultaProfesores(filtro){
    $.ajax({
        url: "./webhook/lista-profesores-datatable.php",
        type: 'POST',
        data: {
           filtro : filtro
        },
        success: function (response) {
            //COnvertimos el string a JSON
            console.log(response);
            let PROFESORES = JSON.parse(response);
            console.log(PROFESORES);
        },
        error: function() {
            alert("Error occured")
        }
    });
    
}