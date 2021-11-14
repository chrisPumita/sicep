/****************************************************/
//Antigua funcion de Ajax para refcuperar datos JSON
 //JSON Global de cursos
window.onload = function(){
    //caragabndo la info de la bd
}

$(document).ready(function() {
    cargaListaProfesoresAutores();
    cargaCursosDataTable();
});


//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".viewCourse", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_curso");
    var url = './detalles-curso';
    redirect_by_post(url, {
        id: id
    }, false);
});

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".editCourse", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_curso");
    alert("VIEW CURSO "+id);
});

function cargaCursosDataTable() {
    $('#tblCursos').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-cursos-datatable.php",
                "data": {
                    "filtro": -1
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
                { data: 'aprobado',
                    render: function ( data, type, row ){
                        //funcion de tipos.js
                        value = estadoCursoApoved(row.aprobado);
                        return row.aprobado ==='1'? 'APROBADO':"PENDIENTE";
                    }
                },
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

    $('.status-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.status-dropdown').val(status);
        console.log(status);
        dataTable.column(5).search(status).draw();
    });

    $('.profesor-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.profesor-dropdown').val(status);
        console.log(status);
        dataTable.column(2).search(status).draw();
    });
}

function cargaListaProfesoresAutores(){
    $.ajax({
        url: "./webhook/lista-autores-cursos.php",
        type: 'POST',
        success: function(response){
            let PROFESORES = JSON.parse(response);
            let template=`<option value="">TODOS</option>`;
            PROFESORES.forEach(profesor => {
                template+=`<option value="${profesor.prefijo} ${profesor.nombre} ${profesor.app} ${profesor.apm}">
                                ${profesor.prefijo} ${profesor.nombre} ${profesor.app} ${profesor.apm}
                           </option> `;
            });
            $("#listaAutores").html(template);
        },
        error: function() {
            alert("Error occured")
        }
    });
}
