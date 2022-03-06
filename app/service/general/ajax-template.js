function consultaData(){
    $.ajax({
        url: "./webhook/lista-admin-datatable.php",
        type: 'POST',
        error: function() {
            alert("Error occured")
        }
    });
}