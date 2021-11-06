/****************************************************/
//Antigua funcion de Ajax para refcuperar datos JSON
 //JSON Global de cursos
 window.onload = function(){
    //caragabndo la info de la bd
}

$(document).ready(function() {

    $('#tblProfesores').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-profesores-datatable.php",
                "data": {
                    "filtro": 0
                },
                "type": "POST"
            },
             "order": [[ 1, 'asc' ]],
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_persona', data.id_persona);
        },
        "columns":
            [
                { data: 'order'},
                {data: 'no_trabajador'},
                /*
                { data: 'aprobado',
                    render: function ( data, type, row ){
                        //funcion de tipos.js
                        value = estadoCursoApoved(row.aprobado);
                        return row.aprobado ==='1'? 'APROBADO':"PENDIENTE";
                    }
                },
                { defau */
                { data: null,
                    render: function ( data, type, row ){
                        let nombre = row.prefijo + '. ' + row.nombre_completo;
                        value = estadoProfesorAdmin(row.flagAdmin);
                        return nombre + ' ' + value;
                    }
                },
                /* { data: "nombre_completo"},*/
                { data: 'depto_name'},
                { data: "telefono",},
                { data: 'email'},
                { data: 'fecha_registro'},

                { defaultContent:
                        '<a href="#" class="btn btn-outline-primary viewCourse"><i class="fas fa-clock"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary editCourse"><i class="fas fa-edit"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary viewSolicitudes"><i class="fas fa-tasks"></i> Solicitudes</a>'
                }
            ],
        "language": {
            "search": "Buscar",
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
                "targets": [7],
                "visible": false
            }
        ]
    });
});
