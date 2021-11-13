/****************************************************/
//Antigua funcion de Ajax para refcuperar datos JSON
 //JSON Global de cursos
 window.onload = function(){
    //caragabndo la info de la bd
}

$(document).ready(function() {
    cargaDatosProfesoresDataTable();
});

function cargaDatosProfesoresDataTable() {
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
                        let nombre = '<div class="d-flex align-items-center">\n' +
                            '           <div class="avatar avatar-md">\n' +
                            '                                            <img src="https://avatars.githubusercontent.com/u/19921111?s=400&amp;u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&amp;v=4" alt="" srcset="">\n' +
                            '                                            <span class="avatar-status bg-danger"></span>\n' +
                            '                                        </div>\n' +
                            '                                        <div class="d-flex flex-column justify-content-center px-3">\n' +
                            '                                            <p class="mb-0 text-xs">Lic. Juan Perez Sanchez</p>\n' +
                            '                                            <p class="text-xs text-primary mb-0">HOMBRE</p>\n' +
                            '                                        </div>\n' +
                            '                                    </div>';
                        value = estadoProfesorAdmin(row.flagAdmin);
                        return nombre + ' ' + value;
                    }
                },
                /* { data: "nombre_completo"},*/
                { data: 'depto_name'},
                { data: null,
                    render: function ( data, type, row ){
                        let template = '<div class="d-flex flex-column justify-content-center">\n' +
                            '              <p class="mb-0 text-xs"><a href="mailto:'+row.email+'">'+row.email+'</a></p>\n' +
                            '              <p class="text-xs text-primary mb-0">'+row.telefono+'</p>\n' +
                            '           </div>';
                        return template;
                    }
                },
                { data: 'fecha_registro'},

                { defaultContent:
                        '<a href="#" class="btn btn-outline-primary viewProfesor"><i class="fas fa-clock"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary editProfesor"><i class="fas fa-edit"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary viewGrupos"><i class="fas fa-tasks"></i></a>'
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
}