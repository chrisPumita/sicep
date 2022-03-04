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
            $(row).attr('id_profesor', data.id_profesor);
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
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs text-primary mb-0">${getLegibleFechaHora(row.fecha_registro)}</p>
                                        </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                    let grupos = row.historialGpo > 0 ? `<span class="badge bg-info badge-pill badge-round ml-1"><i class="fas fa-chalkboard-teacher"></i> ${row.historialGpo}</span>` : 'Ninguno';
                        let template = `<ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span> ${grupos}</span>
                                            
                                        </li>
                                    </ul>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ) {
                        let btnAcction = row.estatus_profesor != 1 ?
                            `<button type="button" class="btn btn-success btnChangeStatus" data-bs-toggle="tooltip" title="Habilitar Cuenta">
                                    <i class="fas fa-user-check"></i>` :
                            `<button type="button" class="btn btn-outline-warning btnChangeStatus">
                                <i class="fas fa-user-clock"></i>
                            </button>`;
                        let template = `<div class="d-flex"><a href="#" class="btn btn-primary btnViewPerfil"><i class="fas fa-id-card-alt"></i></a>
                                        ${btnAcction}</div>`;
                        return template;
                    }
                }
            ],
        "order": [[0, "asc" ]],
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
    let id = $(elementClienteSelect).attr("id_profesor");
    var url = './detalles-profesor';
    redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".btnChangeStatus", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_profesor");
    console.log(id);
    alert(id);
});

