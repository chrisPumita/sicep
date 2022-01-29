
function consultaTblDescuentosAplicadosAlumno(idCurso,costoAplicado) {
    consultaDescuentosAsigInscribe(idCurso).then(function (e) {
        buildTBLHtmlDescuentosAsigInscribe(e,costoAplicado);
    });
}

function buildTBLHtmlDescuentosAsigInscribe(DESCUENTOS,costoAplicado) {
    let template ="";
    let lista = "";
    let cont =0;
    if (DESCUENTOS.length > 0) {
        template += `<table class="table table-hover table-striped small" >
                            <thead>
                            <tr>
                                <th>DIRIGIDO A</th>
                                <th>DESCUENTO</th>
                                <th>T.DESC</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-Desc">`;
        DESCUENTOS.forEach(
            (des)=>
            {
                cont++;
                let costoFinal = parseFloat(costoAplicado);
                let DescApli = parseFloat(des.porcentaje_desc);
                let DescTotal = (costoFinal*DescApli)/100;
                let totalDesc = costoFinal-DescTotal;
                let descApli = parseInt(des.porcentaje_desc)!="0" ? `<span class="badge bg-info"><i class="fas fa-tag"></i> ${des.porcentaje_desc}% OFF</span>`: '-';

                template += `<tr id_procedencia="${des.id_tipo_procedencia_fk}">
                                <td>${des.tipo_procedencia}</td>
                                <td>${descApli}</td>
                                <td>${DescTotal>0?"-$"+DescTotal:"-"}</td>
                                <td>$${totalDesc}</td>
                            </tr>`;

                lista+= des.tipo_procedencia + (cont!= DESCUENTOS.length ?", ":".");
            }
        );

        template += `      </tbody>
                        </table>`;
    }
    else{
        template = `<div class="alert alert-primary" role="alert">
                          No encontramos ningun descuento
                        </div>`;
        lista ="Aplicable a todo público";
    }
    $("#containerDescuentos").html(template);
    $("#listaDirige").html(lista);
}