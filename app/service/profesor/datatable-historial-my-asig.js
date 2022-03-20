window.onload = function(){
    cargaListasSemGen();
    cargaListasCursos();
    cargaDataTableMyAsignaciones(0);
    console.log("ASIG PROFESOR");
}

/// DATATABLE HISTORIAL
function cargaDataTableMyAsignaciones(idCurso) {
    //headers
    // GRUPO	CURSO	PROFESOR	INSCRITOS	PERIODO	TIPO	ESTADO
    $('#tblHistAsigCurso').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-historico-asig-curso-datatable.php",
                "data": {"idCurso": idCurso, "filtro": 2, "idFiltro":99},
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
                        return '<h5>'+row.nombre_curso+'</h5>';
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return "del "+getLegibleFecha(row.fecha_inicio)+' <br>al '+getLegibleFecha(row.fecha_fin);
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let template ="Grupo:"+row.grupo+" <br>"+"Generacion:"+row.generacion+" <br>"+"Semestre:"+row.semestre+" <br>";
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return getTipoCurso(row.tipo_curso)+'<br>'+getModalidadCurso(row.modalidad);
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let porc = (row.inscritos * 100)/row.cupo;
                        let spanStyle;
                        if (porc<= 60) spanStyle = "success";
                        else if (porc >60 && porc <=80) spanStyle = "warning";
                        else spanStyle = "danger";
                        let template =  getEstatusAsignacion(row.statusAsignacion)+'<br><span class="badge bg-'+spanStyle+'">'+row.inscritos + '/' + row.cupo+'</span> ';
                        return template;
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = '<a href="#" class="btn btn-primary viewAsignacion  me-1 mb-1" onclick="openMyAsig('+row.id_asignacion+');"><i class="far fa-eye"></i>&nbsp;</a>';
                        return template;
                    }
                }
            ],
        "order": [[ 2, "desc" ]],
        "language": {
            "search": '<i class="fas fa-search"></i> ',
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

$('.curso-select').on('change', function(e){
    var status = $(this).val();
    $('.curso-select').val(status);
    dataTable.column(0).search(status).draw();
});

$('.semestre-select').on('change', function(e){
    var status = $(this).val();
    $('.semestre-select').val(status);
    dataTable.column(2).search(status).draw();
});

$('.generacion-select').on('change', function(e){
    var status = $(this).val();
    $('.generacion-select').val(status);
    dataTable.column(2).search(status).draw();
});

function openMyAsig(id) {
    let url = "./detalles-mi-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}