$(document).ready(function () {
    cargaDataTableProfes(0);
});

/*function consultaProfesores(){
    $.ajax({
        url: "./webhook/lista-profesores.php",
        type: 'POST',
        data: {
           filtro : 0
        },
        success: function (response) {
            //COnvertimos el string a JSON
            console.log(obj_profesores);
            let template="";
            let contador=0;
            obj_profesores.forEach(profesor => {
                contador++;
                template += `
                <tr id_profesor="${profesor.id_profesor}">
                    <th scope="row">${contador}</th>
                    <td>${profesor.no_trabajador}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4" alt="" srcset="">
                                <span class="avatar-status bg-danger"></span>
                            </div>
                            <p class="mb-0">${profesor.nombre+" "+ profesor.app+ " "+ profesor.apm} </p>
                        </div>
                    </td>
                    <td>${profesor.depto_name}</td>
                    <td>${profesor.telefono}</td>
                    <td>abril@gmail.com</td>
                    <td>2021-06-04 07:32:17</td>
                    <td>
                        <a href="./detalles-profesor" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-outline-primary"><i class="far fa-share-square"></i> Asignar</a>
                    </td>
                </tr>
                `;
                
            });
            $("#tblProfesores").html(template);
        }

    });
    
}
*/
function cargaDataTableProfes(filtro) {
    $('#tblCursos').DataTable( {
        "scrollX": true,
        //mandar por post a php con parametro post
        "ajax":
            {
                "url":"./webhook/lista-profesores.php",
                "data": {
                    "filtro": filtro
                },
                "type": "POST"
            },
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
        },
        "columns":
            [

            ],
        "language": {
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
}
