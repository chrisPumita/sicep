
function viewDetailsOfertaPropuesta(desc,dirigido,objetivo,antecedentes,fechacreacion,fechaacreditacion, id_curso,banner, nombreCurso,notas) {
    //desc,dirigido,objetivo,fechacreacion,fechaacreditacion, id_curso, nombreCurso
    $("#detallesCurso").modal('show');
    $("#modalDetails").html(desc);
    $("#modalObjetivo").html(objetivo);
    $("#modalAntecede").html(antecedentes);
    $("#modalDirige").html(dirigido);
    $("#idDetailsOferta").html(nombreCurso);
    if (fechacreacion=="null" && fechaacreditacion=="null"){
        $("#modalNotas").html("");
        $("#accionBtn").remove();
        $("#tblDocSol").remove();
        $("#docSolContainer").addClass("d-none");
        let nt = notas ==="" ? "SIN NOTAS": notas;
        $("#modalNotas").html(nt);
    }
    else{
        let fechaCreado = "Creado el " + getLegibleFechaHora(fechacreacion);
        let fechaAcreditacion =  fechaacreditacion!= "null" ? "Acreditado el " + getLegibleFechaHora(fechaacreditacion) : '<span class="badge bg-warning">PENDIENTE POR ACREDITAR</span>';
        $("#modalNotas").html(fechaCreado+"<br>"+fechaAcreditacion);
    }

    let boton = '<a href="#" class="btn btn-secondary me-1 mb-1" onClick="openPropuesta('+id_curso+')"><i class="fas fa-edit"></i> Editar</a>';
    $("#accionBtn").html(fechaacreditacion!= "null"  ? "": boton)
    $("#fondoImg").css("background", "url("+banner+") center no-repeat content-box");
    //buscar el horario del curso
    cargaTemarioOferta(id_curso);
    cargaTblDocumentacionOferta(id_curso);
}

function cargaTblDocumentacionOferta(id) {
    consultaDocumentacionOferta(id).then(function (e) {
        buildTBLHtmlDocsSol(e)
    });
}

function cargaTemarioOferta(idCurso) {
    consultaTemarioOferta(idCurso).then(function (e) {
        buildTBLHtmlTemarioModal(e);
    });
}

function buildTBLHtmlTemarioModal(TEMAS) {
    let template;
    if (TEMAS.length > 0) {
        template= `
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>INDICE</th>
                        <th>TEMA</th>
                        <th>DESCRIPCIÓN</th>
                    </tr>
                    </thead>
                <tbody>`;
        TEMAS.forEach(
            (tema)=>
            {
                template+= `
                        <tr id_tema="${tema.id_tema}">
                            <td>${tema.indice}</td>
                            <td>${tema.nombre}</td>
                            <td>${tema.resumen}</td>
                        </tr>`;
            }
        );
        template+= `
                </tbody>
              </table>`;
    }
    else{
        template= `
                <div class="alert alert-light alert-dismissible show fade">
                   No tenemos temas registrados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblTemario").html(template);
}

function buildTBLHtmlDocsSol(DOSC) {
    let template;
    if (DOSC.length > 0) {
        template= `
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>DOCUMENTO</th>
                        <th>DETALLES</th>
                    </tr>
                    </thead>
                <tbody>`;
        DOSC.forEach(
            (doc)=>
            {
                template+= `
                        <tr id_doc_sol="${doc.id_doc_sol}">
                            <td>${doc.nombre_doc}</td>
                            <td>Formato ${ (doc.formato_admitido ==="%"? "prefereible PDF o JPEG ":"Solo "+doc.formato_admitido)}, peso máximo de ${doc.peso_max_mb}MB.</td>
                        </tr>`;
            }
        );
        template+= `
                </tbody>
              </table>`;
    }
    else{
        template= `
                <div class="alert alert-light alert-dismissible show fade">
                   No hay documentos requeridos. De requerirse algun documento, este aparecerá en este apartado.
                   Porfavor revisa tu solicitud o ficha de inscripción periodicamente. Puede que se te solicite algun documento posteriormente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblDocSol").html(template);
}