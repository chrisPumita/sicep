$(document).ready(function() {
    cargaSolicitudesDataTable();
    cargaListasCursos();
    consultaProcedencias();
});


function cargaSolicitudesDataTable() {
    $('#tblSolicitudes').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-solicitudes-inscripcion.php",
                "type": "POST",
                "data": {"idInsc": 0}
            },
        "order": [[ 1, 'asc' ]],
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('folio', data.id_inscripcion);
        },
        "drawCallback": function( settings, start, end, max, total, pre ) {
            console.log(this.fnSettings().json); /* for json response you can use it also*/
            //alert(this.fnSettings().fnRecordsTotal()); // total number of rows
            $("#badgePendientes").html(this.fnSettings().fnRecordsTotal()); //
        },
        "columns":
            [
                { data: null,
                    render: function ( data, type, row ){
                        let status = row.estatusAlumno == 1 ? 'success':'danger';
                        let template = `<div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="${row.perfil_image}" alt="" srcset="">
                                            <span class="avatar-status bg-${status}"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">${row.nombre_completo}</p>
                                            <p class="text-xs text-primary mb-0">${row.matricula}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-xs"><a href="#">${row.nombre_curso}</a></p>
                                                <p class="text-xs text-primary mb-0">Grupo ${row.grupo}</p>
                                          </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-xs"><a href="#">${row.siglas}</a></p>
                                                <p class="text-xs text-primary mb-0">${row.tipo_procedencia}</p>
                                          </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        let template = `<div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-xs"><a href="mailto:${row.email}">${row.email}</a></p>
                                                <p class="text-xs text-primary mb-0">${row.telefono}</p>
                                          </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return getLegibleFechaHora(row.fecha_solicitud);
                    }, width: "15%"
                },
                { data: null,
                    render: function ( data, type, row ){
                    let template = '';
                    if(row.n_sol != "0"){
                        let porcentaje = (parseInt(row.n_enviados)*100)/parseInt(row.n_sol);
                        let color = porcentaje<100 ? 'info' : 'success';
                        template = `<div class="progress-wrapper">
                                        <div class="progress-info">
                                            <div class="progress-percentage">
                                                <span class="text-sm font-weight-bold">${row.n_enviados} / ${row.n_sol} Entregados</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-${color}" role="progressbar" aria-valuenow="${row.n_enviados}" aria-valuemax="${row.n_enviados}" style="width: ${porcentaje}%;">${row.n_enviados}</div>
                                        </div>
                                    </div>`;
                    }
                    else{
                        template = 'No Requerido';
                    }
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ) {
                    let alertaRevisa = parseInt(row.n_revisa) >0 ? `<span class="badge bg-danger">${row.n_revisa}</span>`: '';
                        let template = `<a href="#" class="btn btn-info btnViewFicha"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger btnCancelInsc"><i class="fas fa-ban"></i></a>
                            <a href="#" class="btn btn-outline-info btnVieDocs"  data-bs-toggle="modal" data-bs-target="#viewDocsInscripcion"><i class="fas fa-folder-open"></i> ${alertaRevisa}</a>`;
                        return template;
                    }
                }
            ],
        "language": {
            "search": "Buscar",
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No hay solicitudes pendientes",
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

    dataTable = $("#tblSolicitudes").DataTable({
        "columnDefs": [
            {
                "targets": [7],
                "visible": false
            }
        ]
    });

    $('.curso-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.curso-dropdown').val(status);
        dataTable.column(1).search(status).draw();
    });

    $('.procedencia-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.procedencia-dropdown').val(status);
        dataTable.column(2).search(status).draw();
    });
}



//LISTENER PARA ACCION DEL BOTON
$(document).on("click", ".btnViewFicha", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    var url = './ficha-inscripcion';
    redirect_by_post(url, {  id: id }, false);
});

$(document).on("click", ".btnCancelInsc", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    var url = './detalles-profesor';
    alert("Cambiar estado" + id);
});

$(document).on("click", ".btnVieDocs", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("folio");
    consultaAsyncDocsRevisa(id,1).then(function (response) {
        console.log(response);
        let templateDocs = buildTBLDocsSolicitados(response);
       $("#containerDocs").html(templateDocs);
    })
});

function cargaListasCursos() {
    cargaCursos(99,0).then(function (JSONData) {
        let template=`<option value="">TODOS</option>`;
        JSONData.forEach(curso => {
            template+=`<option value="${curso.nombre_curso}">${curso.nombre_curso}</option> `;
        });
        $("#listaCursos").html(template);
    });
}

async function consultaProcedencias() {
    const JSONData = await consultaProcedenciasAjax("./");
    buildHTMLProcedencias(JSONData);
}

function buildHTMLProcedencias(obj_result) {
    let template = `<option value="">TODOS</option>`;
    obj_result.forEach(
        (obj)=>
        {
            template += `<option value="${obj.tipo_procedencia}">${obj.tipo_procedencia}</option>`;
        }
    );
    $("#list-procedencias").html(template);
}
