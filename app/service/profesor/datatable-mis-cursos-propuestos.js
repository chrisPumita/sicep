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
                            onclick="viewDetailsOfertaPropuesta('${row.descripcion}','${row.dirigido_a}','${row.objetivo}','${row.antecedentes}','${row.fecha_creacion}','${row.fecha_acreditacion}','${row.id_curso}','${row.banner_img}','${row.nombre_curso}','');"><i class="far fa-eye"></i></button>`;
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

