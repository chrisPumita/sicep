$(document).ready(function() {
    cargaDatosAlumnosDataTable();
});

function cargaDatosAlumnosDataTable() {
    $('#tblAlumnos').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-alumnos-datatable.php",
                "data": {"filtro": 1},
                "type": "POST"
            },
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_alumno', data.id_alumno);
        },
        "columns":
            [
                { data: null,
                    render: function ( data, type, row ){
                        let status = row.id_alumno > 0 ? `<i class="fas fa-check-circle text-primary avatar-status" data-bs-toggle="tooltip" data-bs-placement="top" title="Cuanta Verificada"></i>`:
                            `<i class="fas text-warning fa-exclamation-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Cuenta Suspendida"></i>`;
                        let template = `<div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="${row.perfil_image}" alt="" srcset="">
                                            ${status}
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">${row.nombre_completo} </p>
                                            <p class="mb-0 text-sm text-primary">${row.nameproc}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                { data: 'matricula'},
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                            <p class="mb-0 text-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="${row.uni_name}">${row.nombre_uni}</p>
                                            <p class="text-xs text-primary mb-0">${row.carrera_especialidad}</p>
                                        </div>`;
                        return template;
                    }
                },
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
                        let status = row.id_alumno > 0 ? "ACTIVA":"SUSPENDIDA";
                        return status;
                    }
                },
                { data: null,
                    render: function ( data, type, row ) {
                        let btnAcction = row.id_alumno >= 0 ?
                            `<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Suspender Cuenta">
                                <a href="#" class="btn btn-outline-warning btnViewPerfile"><i class="fas fa-user-clock"></i></a>`:
                            `<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Habilitar Cuenta">
                                <a href="#" class="btn btn-success btnChangeStatus"><i class="fas fa-user-check"></i></a></span>`;
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
    dataTable = $("#tblAlumnos").DataTable({
        "columnDefs": [
            {
                "targets": [7],
                "visible": false
            }
        ]
    });

}

$('.procedencia-dropdown').on('change', function(e){
    var status = $(this).val();
    $('.procedencia-dropdown').val(status);
    console.log(status);
    dataTable.column(0).search(status).draw();
});

$('.universidad-dropdown').on('change', function(e){
    var status = $(this).val();
    $('.universidad-dropdown').val(status);
    console.log(status);
    dataTable.column(2).search(status).draw();
});

$('.status-dropdown').on('change', function(e){
    var status = $(this).val();
    $('.status-dropdown').val(status);
    console.log(status);
    dataTable.column(4).search(status).draw();
});