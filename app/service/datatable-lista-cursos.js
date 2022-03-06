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
                    "filtro": 99, "value": 0
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
                { data: 'nombre_curso',
                    render: function ( data, type, row ){
                        //funcion de tipos.js
                        acreditado = row.id_profesor_admin_acredita != null ? true:false;
                        value = estadoCursoApoved(row.aprobado,acreditado);
                        return value+ ' '+row.nombre_curso;
                    }
                },
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
                    let grupos = row.grupos_abiertos >0 ? '<span class="badge bg-info">'+row.grupos_abiertos+' grupo(s)</span>' : "Ninguno";
                        return grupos;
                    }
                },
                { data: "tipo_curso",
                    targets: "tipo_curso", render: getTipoCurso // llamando a una f(x)
                },
                { data: null,
                    render: function ( data, type, row )
                    {
                        return '<a href="' + row.link_temario_pdf + ' " class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i> Descargar</a>';
                    }
                },
                { data: 'aprobado',
                    render: function ( data, type, row ){
                        return (row.id_profesor_admin_acredita!=null? 'APROBADO ':"PENDIENTE ");
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = '<a href="#" class="btn btn-primary viewCourse me-1 mb-1"><i class="far fa-eye"></i></a>';
                        template+= row.aprobado ==='1'? '<a href="#" class="btn btn-secondary me-1 mb-1" onClick="openGroup('+row.id_curso+');"><i class="fas fa-users"></i>&nbsp;Nuevo</a>':"";
                        return template;
                    }
                }
            ],
        "order": [[ 1, "asc" ],[2,"asc"]],
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

    $('.status-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.status-dropdown').val(status);
        dataTable.column(6).search(status).draw();
    });

    $('.profesor-dropdown').on('change', function(e){
        var status = $(this).val();
        $('.profesor-dropdown').val(status);
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

function openGroup(id) {
    let url = "./nueva-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}