function cargaDataTableCursos(filtro) {
    $('#tblCursos').DataTable( {
        "scrollX": true,
        //mandar por post a php con parametro post
        "ajax":
            {
                "url":"./webhook/lista-cursos.php",
                "data": {
                    "filtro": filtro
                },
                "type": "POST"
            },
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_curso', data.id_curso);
        },
        "columns":
            [
                { data: 'codigo'},
                { data: 'aprobado',
                    render: function ( data, type, row ){
                    //funcion de tipos.js
                        value = estadoCursoApoved(row.aprobado);
                        return row.nombre_curso + ' ' + value;
                    }
                },
               /* { data: "nombre_completo"},*/

                { data: null,
                    render: function ( data, type, row ){
                        return row.prefijo + '. ' + row.nombre_completo;
                    }
                },
                { data: "tipo_curso",
                    targets: "tipo_curso", render: getTipoCurso // llamando a una f(x)
                },
                { data: null,
                    render: function ( data, type, row )
                    {
                        return '<a href="' + row.link_temario_pdf + ' " class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i></a>';
                    }
                },
                { defaultContent:
                        '<a href="#" class="btn btn-outline-primary viewCourse"><i class="fas fa-clock"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary editCourse"><i class="fas fa-edit"></i></a>\n' +
                        '<a href="#" class="btn btn-outline-primary viewSolicitudes"><i class="fas fa-tasks"></i> Solicitudes</a>'
                }
            ],
        "language": {
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
}

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".viewCourse", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_curso");
    alert("VIEW CURSO "+id);
});

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".editCourse", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_curso");
    alert("VIEW CURSO "+id);
});


