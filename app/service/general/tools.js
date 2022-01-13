// Esta funcion redirecciona por post la pagina que se mande llamar
$(document).ready(function() {
    console.log("----- REDIRECCIONAMIENTO ON----")
});
function redirect_by_post(purl, pparameters, in_new_tab) {
    pparameters = (typeof pparameters == 'undefined') ? {} : pparameters;
    in_new_tab = (typeof in_new_tab == 'undefined') ? true : in_new_tab;

    var form = document.createElement("form");
    $(form).attr("id", "reg-form").attr("name", "reg-form").attr("action", purl).attr("method", "post").attr("enctype", "multipart/form-data");
    if (in_new_tab) {
        $(form).attr("target", "_blank");
    }
    $.each(pparameters, function(key) {
        $(form).append('<input type="text" name="' + key + '" value="' + this + '" />');
    });
    document.body.appendChild(form);
    form.submit();
    document.body.removeChild(form);
    return false;
}

//regresa el año actual
function yearToday() {
    var today = new Date();
    return today.getFullYear();
}


//Formato legible de hora y fecha procesados
Date.createFromMysql = function(mysql_string) {
    if(typeof mysql_string === 'string') {
        var t = mysql_string.split(/[- :]/);
        //when t[3], t[4] and t[5] are missing they defaults to zero
        return new Date(t[0], t[1] - 1, t[2], t[3] || 0, t[4] || 0, t[5] || 0);
    }
    return null;
}

function getLegibleFecha(stringFecha) {
    var d1 = Date.createFromMysql(stringFecha);
    var options = {weekday: "long", year: "numeric", month: "long", day: "numeric"};
    return d1.toLocaleString("es-ES", options);
}

function getLegibleFechaHora(stringFechaHora) {
    var dateFormat, options;
    options = {
        weekday: 'short',
        month: 'long',
        day: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: 'numeric'
    };

    /*
        var d1 = Date.createFromMysql(stringFecha);
    var options = {weekday: "long", year: "numeric", month: "long", day: "numeric", hour: "numeric", hour12:"true"};
    return d1.toLocaleString("es-ES", options);
    * */
    var d1 = Date.createFromMysql(stringFechaHora);
    dateFormat = new Intl.DateTimeFormat('es-ES', options);

    return  dateFormat.format(d1)+' Hrs.'; // Salida: jue., 07 de julio de 2016 21:26
}
//Formato legible de hora y fecha procesados

function calculaDescuento(total,desc) {
    let T = parseInt(total);
    let D = parseInt(desc);
    let TD =T-((D*T)/100);
    return TD;
}