$(document).ready(function() {
    cargaCursosDataTablePropuestas();
});

function cargaCursosDataTablePropuestas() {
    $('#tblCursos').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/profesor.lista_cursos_prop_datatable.php",
                "type": "POST"
            },
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_curso', data.id_curso);
        },
        "columns":
            [
                { data: 'codigo'},
                { data: 'nombre_curso'},
                { data: "tipo_curso",
                    targets: "tipo_curso", render: getTipoCurso // llamando a una f(x)
                },
                { data: null,
                    render: function ( data, type, row )
                    {
                        if (row.link_temario_pdf =="")
                            return "SIN TEMARIO"
                        else
                            return '<a href="' + row.link_temario_pdf + ' " class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i> Descargar</a>';
                    }
                },
                { data: 'aprobado',
                    render: function ( data, type, row ){
                    let texto; let color;
                    if (row.aprobado == "-1"){
                        texto = "SIN ENVIAR";
                        color = "info";
                    }
                        else{
                        texto = row.id_profesor_admin_acredita!=null? 'APROBADO ':"ENVIADO ";
                        color = row.id_profesor_admin_acredita==null? 'warning' :"success";
                    }
                        return ('<span class="badge bg-'+color+'">'+texto+'</span>');
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = `<button class="btn btn-primary viewCourse me-1 mb-1" <a class="btn btn-primary" 
                            onclick="viewDetailsOfertaPropuesta('${row.descripcion}','${row.dirigido_a}','${row.objetivo}','${row.antecedentes}','${row.fecha_creacion}','${row.fecha_acreditacion}','${row.id_curso}','${row.banner_img}','${row.nombre_curso}');"><i class="far fa-eye"></i></button>`;
                        template+= row.aprobado ==='-1'? '<a href="#" class="btn btn-secondary me-1 mb-1" onClick="openPropuesta('+row.id_curso+')"><i class="fas fa-edit"></i></a>':"";
                        return template;
                    }
                }
            ],
        "order": [[ 1, "asc" ],[2,"asc"]],
        "language": {
            "search": '<i class="fas fa-search"></i> ',
            "lengthMenu": "Mostrar _MENU_ cursos por página",
            "zeroRecords": "No hay cursos registrados",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Se filtro de _MAX_ cursos en total)",
            "decimal": ".",
            "thousands": ",",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    } );

    //Evita el alert del warning
    $.fn.dataTable.ext.errMode = 'none';

    dataTable = $("#tblCursos").DataTable({
        "columnDefs": [
            {
                "targets": [5],
                "visible": false
            }
        ]
    });

    $('.status-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.status-dropdown').val(status);
        dataTable.column(4).search(status).draw();
    });

}

function openPropuesta(id) {
    let url = "./editar-detalles-propuesta";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

function viewDetailsOfertaPropuesta(desc,dirigido,objetivo,antecedentes,fechacreacion,fechaacreditacion, id_curso,banner, nombreCurso) {
    //desc,dirigido,objetivo,fechacreacion,fechaacreditacion, id_curso, nombreCurso
    $("#detallesCurso").modal('show');
    $("#modalDetails").html(desc);
    $("#modalObjetivo").html(objetivo);
    $("#modalAntecede").html(antecedentes);
    $("#modalDirige").html(dirigido);
    $("#idDetailsOferta").html(nombreCurso);
    let fechaCreado = "Creado el " + getLegibleFechaHora(fechacreacion);
    let fechaAcreditacion =  fechaacreditacion!= "null" ? "Acreditado el " + getLegibleFechaHora(fechaacreditacion) : '<span class="badge bg-warning">PENDIENTE POR ACREDITAR</span>';
    $("#modalNotas").html(fechaCreado+"<br>"+fechaAcreditacion);

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
                let acre = doc.tipo == "1" ?`<i class="fas fa-user-shield"></i> ADMIN`:`CUALQUIERA`;
                let confirmaInsc = doc.obligatorio == "1" ?  `<ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center"  data-bs-toggle="tooltip" data-bs-placement="top" 
                        title="Al confirmar la entrega de este documento, automaticamente se confirmará la inscripcion del alumno, y este quedará asentado el la lista oficial. ">
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
                   No hay documentos requeridos. De requerirse algun documento, este aparecerá en este apartado.
                   Porfavor revisa tu solicitud o ficha de inscripción periodicamente. Puede que se te solicite algun documento posteriormente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
    }
    $("#tblDocSol").html(template);
}