$(document).ready(function() {

});

window.onload = function(){
    cargaDataTableAsignaciones($("#idCurso").val());
}

/// DATATABLE HISTORIAL
function cargaDataTableAsignaciones(idCurso) {
    //headers
    // GRUPO	CURSO	PROFESOR	INSCRITOS	PERIODO	TIPO	ESTADO
    $('#tblHistAsigCurso').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-historico-asig-curso-datatable.php",
                "data": {"idCurso": idCurso},
                "type": "POST"
            },
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_asignacion', data.id_asignacion);
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
                                            <p class="mb-0 text-xs">${row.prefijo}. ${row.nombre_completo} </p>
                                            <p>${flagAdmin}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return row.inscritos + '/' + row.cupo;
                    }
                },
                { data: null,
                    render: function ( data, type, row )
                    {
                        return 'del '+row.fecha_inicio+' <br>al '+row.fecha_fin;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return getTipoCurso(row.tipo_curso)+': '+getModalidadCurso(row.modalidad);
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return getEstatusAsignacion(row.statusAsignacion);
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return 'Grupo: '+ row.grupo+'<br> Gen: '+row.generacion+'<br> Semestre: '+row.semestre;
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = '<a href="#" class="btn btn-primary viewAsignacion  me-1 mb-1"><i class="far fa-eye"></i>&nbsp;</a><button class="btn btn-info me-1 mb-1"><i class="fas fa-list"></i></button>';
                        return template;
                    }
                }
            ],
        "language": {
            "search": "Buscar",
            "lengthMenu": " Mostrar _MENU_  cursos por página",
            "zeroRecords": "No se han creado grupos de este Curso",
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

    dataTable = $("#tblHistAsigCurso").DataTable({
        "columnDefs": [
            {
                "targets": [7],
                "visible": false
            }
        ]
    });
}

