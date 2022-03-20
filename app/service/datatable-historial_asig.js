window.onload = function(){
    cargaListasSemGen();
    consultaListaProfesores();
    cargaListasCursos();
    cargaDataTableAsignaciones(0);
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
                "data": {"idCurso": idCurso, "filtro": 0, "idFiltro":0},
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
                { data: "nombre_curso" },
                { data: "fecha_inicio" },
                { data: "fecha_fin" },
                { data: "grupo" },
                { data: "generacion" },
                { data: "semestre" },
                { data: null,
                    render: function ( data, type, row ){
                        return getTipoCurso(row.tipo_curso)+': '+getModalidadCurso(row.modalidad);
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let porc = (row.inscritos * 100)/row.cupo;
                        let spanStyle;
                        if (porc<= 60) spanStyle = "success";
                        else if (porc >60 && porc <=80) spanStyle = "warning";
                        else spanStyle = "danger";
                        let template = getEstatusAsignacion(row.statusAsignacion)+'<br><span class="badge bg-'+spanStyle+'">'+row.inscritos + '/' + row.cupo+'</span> '+'<span class="badge bg-danger" id="badgePendientesTable"><i class="far fa-eye"></i> '+row.solicitudesPendientes+'</span>';

                        return template;
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = '<a href="#" class="btn btn-primary viewAsignacion  me-1 mb-1" onclick="openAsig('+row.id_asignacion+');"><i class="far fa-eye"></i>&nbsp;</a>' +
                            '<button class="btn btn-info me-1 mb-1"  data-bs-toggle="modal" data-bs-target="#viewListasInscripcion" onclick="viewListas('+row.id_asignacion+')" ><i class="fas fa-list"></i></button>';
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

$('.profesor-select').on('change', function(e){
    var status = $(this).val();
    $('.profesor-select').val(status);
    dataTable.column(0).search(status).draw();
});

$('.curso-select').on('change', function(e){
    var status = $(this).val();
    $('.curso-select').val(status);
    dataTable.column(1).search(status).draw();
});

$('.semestre-select').on('change', function(e){
    var status = $(this).val();
    $('.semestre-select').val(status);
    dataTable.column(6).search(status).draw();
});

$('.generacion-select').on('change', function(e){
    var status = $(this).val();
    $('.generacion-select').val(status);
    dataTable.column(5).search(status).draw();
});

function openAsig(id) {
    let url = "./detalles-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

function consultaListaProfesores() {
    consultaAsyncListaProfesores(99).then(function(profesores){
        let template=`<option value="">TODOS</option>`;
        profesores.forEach(
            (PROF)=>{
                template += `<option value="${PROF.prefijo} ${PROF.nombre_completo}">${PROF.prefijo} ${PROF.nombre_completo}</option>`;
            }
        );
        $("#listaProfesores").html(template);
    })
}

function viewListas(id) {
    loadSolicitudes(id);
}