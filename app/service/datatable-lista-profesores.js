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
                { data: null,
                    render: function ( data, type, row ){
                    let flagAdmin = estadoProfesorAdmin(row.flagAdmin);
                        let status = row.estatus_profesor == 1 ? 'success':'warning';
                        let template = `<div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="${row.img_perfil}" alt="" srcset="">
                                            <span class="avatar-status bg-${status}"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">${row.prefijo} ${row.nombre_completo} </p>
                                            <p>${flagAdmin}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                { data: 'no_trabajador'},
                { data: 'depto_name'},
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                            <p class="mb-0 text-xs"><a href="mailto:'+row.email+'">${row.email}</a></p>
                                            <p class="text-xs text-primary mb-0">${row.telefono}</p>
                                        </div>`;
                        return template;
                    }
                },
                { data: 'fecha_registro'},

                { data: null,
                    render: function ( data, type, row ) {
                        let btnAcction = row.estatus_profesor != 1 ?
                            `<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Habilitar Cuenta">
                                <a href="#" class="btn btn-success btnChangeStatus"><i class="fas fa-user-check"></i></a></span>` :
                            `<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Inhabilitar Cuenta">
                                <a href="#" class="btn btn-outline-warning btnChangeStatus"><i class="fas fa-user-clock"></i></a>`;
                        let template = `<div class="d-flex"><a href="#" class="btn btn-primary btnViewPerfil"><i class="fas fa-id-card-alt"></i></a></span>
                                        ${btnAcction}</div>`;
                        return template;
                    }
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

//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnViewPerfil", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_persona");
    var url = './detalles-profesor';
    redirect_by_post(url, {  id: id }, false);
});