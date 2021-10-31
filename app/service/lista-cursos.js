/*SE CREA O SE MANDA A LLAMAR EL ARCHIVO LFHL*/
$(document).ready(function() {
    cargaDatosTabla(-1);
} );

function cargaDatosTabla(filtro) {
    $('#tblCursos').DataTable( {
        "scrollX": true,
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
            $(row).attr('id', data.id_curso);
        },
        "columns": [
            { data: 'codigo'},
            { data: "nombre_curso" },
            { data: null,
                render: function ( data, type, row ) {
                    return row.nombre + ' ' + row.app+ ' ' + row.apm;
                }
            },
            { data: "tipo_curso",
                targets: "tipo_curso", render: getTipoCurso
            },
            { data: null,
                render: function ( data, type, row ) {
                    return '<a href="'+row.link_temario_pdf+'" class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i></a>';
                } },
            { defaultContent:
                    '<a href="#" class="btn btn-outline-primary viewCourse"><i class="fas fa-clock"></i></a>\n' +
                    '<a href="#" class="btn btn-outline-primary editCourse"><i class="fas fa-edit"></i></a>\n' +
                    '<a href="#" class="btn btn-outline-primary viewSolicitudes"><i class="fas fa-tasks"></i> Solicitudes</a>'
            }
        ],
        "language": {
            "lengthMenu": "Mostrar _MENU_ cursos por página",
            "zeroRecords": "No hay cursos registrados",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
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

//LISTENER PARA ELIMINAR CLIENTE
$(document).on("click", ".viewCourse", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id");

    alert("VIEW CURSO "+id);
});

/*FUNCIONES GENERADORAS */
function getTipoCurso(estado){
    //Funcionalidades del tipo_curso
switch(estado){
    case "0":
        return "Otro";
        break;
    case "1":
        return "Curso";
        break;
    case "2":
        return "Diplomado"
        break;
    case "3":
        return "Seminario";
        break;
    case "4":
        return "Taller";
        break;
    default:
        return "Error";
        break;
    }
}








/* OLD  */
function mostrarLink(link){
    alert(link);
}
// Termina LFHL

//Antigua funcion de Ajax para table no dinamica
function consultaCursos(){
    $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        data: {
            estado_filtro: -1,
            id_curso_filtro : 0
        },
        success: function (response) {
            //COnvertimos el string a JSON
            //console.log(response);
            let cursos = JSON.parse(response);
            CURSOS_JSON = cursos;
            console.log(CURSOS_JSON);
            //setDataToTable(CURSOS_JSON);
            //cargaDatosTabla();
        }
    });
}

function cargaDatosTablax() {
    let template="";
    let contador=0;
    CURSOS_JSON.forEach(curso => {
        let estado= curso.aprobado>0 ? "Aprobado": "Por revisar";
        let colorEstado = curso.aprobado>0 ?"success": "warning";
        let tipo_curso= getTipoCurso(curso.tipo_curso);
        contador ++;
        template+=` 
                <tr id_curso="${curso.id_curso}">
                    <th scope="row">${contador}</th>
                    <td>${curso.codigo}</td>
                    <td>${curso.nombre_curso} <span class="badge bg-${colorEstado}">${estado}</span></td>
                    <td>${curso.nombre+" "+ curso.app+ " "+curso.apm}</td>
                    <td>${tipo_curso}</td>
                    <td>
                        <button class="btn btn-primary btn-block" data-toggle="modal" onclick="mostrarLink('${curso.link_temario_pdf}')">
                            <i class="fas fa-file-pdf"></i> Ver
                        </button>
                    </td>

                    <!-- BOTON ACCIONES -->
                    <td>
                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                        <a href="./nueva-asignacion" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Grupo</a>
                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-history"></i></a>
                    </td>
                </tr>
                `;
    });
    $("#tbl-cursos").html(template);
}

