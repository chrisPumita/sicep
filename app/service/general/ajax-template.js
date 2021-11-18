function consultaData(){
    $.ajax({
        url: "./webhook/lista-admin-datatable.php",
        type: 'POST',
        success: function (response) {
            console.log(response);
        },
        error: function() {
            alert("Error occured")
        }
    });
}