$(document).ready(function () {
    console.log("FICHA DE INSCRIPCION");
    consultaInfoInscripcion();
});

function consultaInfoInscripcion() {
    //llamado a ffuncion asincrona
    consultaAsyncDocsInscRevisa(10).then(function (result) {
        console.log(result);
        //buildHTMLAcrrodion();
    })
}

/*
"url":"./webhook/lista-solicitudes-inscripcion.php",
                "type": "POST",
                "data": {"idInsc": 0}
* */