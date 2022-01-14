
$(document).ready(function() {
    console.log("HELLO");
    let datos = cargaCursosWeb(0,1);

});


//get courses
async function cargaCursosWebAjax(filtro, valueID) {
    return $.ajax({
        url: "app/webhook/lista-cursos.php",
        type: 'POST',
        dataType: "json",
        data: {
            filtro: filtro,
            valueID : valueID
        },
        success: function(data){
            console.log(data);
        },
        error: function() {
            alert("Error occured")
        }
    });
}

async function cargaCursosWeb(filtro, valueID) {
    return await cargaCursosWebAjax(filtro,valueID);
}
