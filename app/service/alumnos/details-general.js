
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
                          No encontramos descuentos
                        </div>`;
        lista ="Aplicable a todo público";
    }
    $("#containerDescuentos").html(template);
    $("#listaDirige").html(lista);
}

function viewDescuentos(idCurso,costoAplicado) {
    consultaTblDescuentosAplicadosAlumno(idCurso,costoAplicado);
}

//FUNCIONES DE MODAL

function viewPDFModal(link,curso) {
    //let template = `<embed src="${link}" frameborder="0" width="100%" height="100%">`;
    let template = `<iframe src="${link}" style="width:100%; height:100%;" frameborder="0"></iframe>`;
    $("#filePdfView").html(template);
    $("#modalTittle").html("Temario de "+curso);
}

//FUNCIONES DE MODAL

function consultaHorarioGpoListModal(idGpo,modalidad) {
    consultaHorarioOferta(idGpo).then(function (e) {
        buildHTMLHorarioContainers(e,modalidad)
    });
}

function buildHTMLHorarioContainers(HORARIOS,MODALIDAD) {
    //Separando los tipo de horario
    $("#containerTblPresencial").html("");
    $("#containerTblVirtual").html("");
    if (MODALIDAD === "0"){
        //Presencial
        buildHtmlHPContainer(HORARIOS.HP);
    }
    else if (MODALIDAD === "1"){
        buildHtmlHVContainer(HORARIOS.HV);
    }else{
        buildHtmlHPContainer(HORARIOS.HP);
        buildHtmlHVContainer(HORARIOS.HV);
    }
}

function buildHtmlHVContainer(HVirtual) {
    //TRabajando con virtuales
    let template = `<h5 class="text-secondary"><i class="far fa-clock"></i> Horario Virtual</h5>`;
    if (HVirtual.length>0){
        template +=`
                    <table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACIÓN</th>
                            <th>PLATAFORMA</th>
                            <th>SALA</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HVirtual.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_virtual}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                            <td>${h.plataforma}</td>
                            <td>${h.reunion}</td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>`;
    }
    else{
        template += ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin registro</h4>
                        <p>Aún no hemos registrado los horarios. Favor de estar pendiente al sitio para poder ver el 
                        horario que sea establecido.</p>
                          </div>
                        </div>`;
    }
    $("#containerTblVirtual").html(template);
}

function buildHtmlHPContainer(HPresencial) {
    //TRabajando con presenciales
    let template = `<h5 class="text-secondary"><i class="far fa-clock"></i> Horario Precencial</h5>`;
    if (HPresencial.length>0){
        template +=`
                    
                    <table class="table table-hover table-striped" id="tblPresencial">
                        <thead>
                        <tr>
                            <th>DIA</th>
                            <th>SALON</th>
                            <th>INICIO</th>
                            <th>TERMINO</th>
                            <th>DURACION</th>
                        </tr>
                        </thead>
                        <tbody>`;
        HPresencial.forEach(
            (h)=>
            {
                template += `
                        <tr id_horario="${h.id_horario_pres}">
                            <td>${diaSemana(h.dia_semana)}</td>
                            <td>${h.edificio}-${h.grupo} (${h.campus})</td>
                            <td>${h.hora_inicio}</td>
                            <td>${h.hora_term}</td>
                            <td>${h.duracion} min.</td>
                        </tr>`;
            }
        );
        template += ` </tbody>
                    </table>`;
    }
    else{
        template += ` <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg class=" flex-shrink-0 me-2" width="50px" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                        <h4 class="alert-heading">Sin registro</h4>
                        <p>Aún no hemos registrado los horarios. Favor de estar pendiente al sitio para poder ver el horario que sea establecido.</p>
                          </div>
                        </div>`;
    }
    $("#containerTblPresencial").html(template);
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

function viewDetailsOferta(desc,dirigido,objetivo,notas,antecedentes, idCurso, nombreCurso) {
    $("#modalDetails").html(desc);
    $("#modalObjetivo").html(objetivo);
    $("#modalAntecede").html(antecedentes);
    $("#modalDirige").html(dirigido);
    $("#idDetailsOferta").html(nombreCurso);
    $("#modalNotas").html(notas ===""? "SIN NOTAS": notas);
    //buscar el horario del curso
    cargaTemarioOferta(idCurso);
    cargaTblDocumentacionOferta(idCurso);
}

function cargaTblDocumentacionOferta(id) {
    consultaDocumentacionOferta(id).then(function (e) {
        buildTBLHtmlDocsSol(e)
    });
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
                let acre = doc.tipo == "1" ?`<i class="fas fa-user-shield"></i> ADMIN`:`CUALQUIERA`;
                let confirmaInsc = doc.obligatorio == "1" ?  `<ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center"  data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Al confirmar la entrega de este documento, automaticamente se confirmará la inscripción del alumno, y este quedará asentado el la lista oficial. ">
                            <span> CONFIRMA</span>
                            <span class="badge bg-success badge-pill badge-round ml-1"><i class="fas fa-flag"></i></span>
                        </li>
                    </ul>` : `` ;
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
                   No hay documentos requeridos. De requerirse algún documento, aparecerá en este apartado.
                   Porfavor revisa tu solicitud o ficha de inscripción periódicamente, puede que se te solicite algún documento posteriormente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblDocSol").html(template);
}

//Agrupamiento de documetacion por curso
function agrupar(listaDocs) {
    var nuevoArray    = []
    var arrayTemporal = []
    for(var i=0; i<listaDocs.length; i++){
        if(listaDocs[i].estatusFile!=1){
            arrayTemporal = nuevoArray.filter(resp => resp["id"] == listaDocs[i]["id_inscripcion"]);
            if(arrayTemporal.length>0){
                nuevoArray[nuevoArray.indexOf(arrayTemporal[0])]["DOCS"].push(listaDocs[i])
            }else{
                nuevoArray.push({
                    "id" : listaDocs[i]["id_inscripcion"] , "curso" : listaDocs[i]["nombre_curso"] , "grupo" : listaDocs[i]["grupo"] ,
                    "DOCS" : [listaDocs[i]]});
            }
        }
    }
    return nuevoArray;
}

function viewFicchaInscripcion(id) {
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
}

function openAsig(id) {
    //inscripcion
    var url = './inscripcion';
    redirect_by_post(url, {  id: id }, false);
}