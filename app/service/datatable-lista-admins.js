$(document).ready(function() {
    $('#dataProf').fadeOut(0);
    $('#alertMje').fadeOut(0);
    cargaListaProfesoresNoAdmin();
    cargaAdminsDataTable();
});

var JSONProfesores;

function cargaListaProfesoresNoAdmin(){
    $.ajax({
        url: "./webhook/lista-no-admin.php",
        type: 'POST',
        success: function(response){
            let PROFESORES = JSON.parse(response);
            JSONProfesores = PROFESORES;
            let template=`<option value="0" selected>Seleccionar...</option>`;
            PROFESORES.forEach(profesor => {
                template+=`<option value="${profesor.id_profesor}">
                                ${profesor.prefijo} ${profesor.nombre} ${profesor.app} ${profesor.apm}
                           </option> `;
            });
            $("#listaDesProfesores").html(template);
        },
        error: function() {
            alert("Error occured")
        }
    });
}

$("#listaDesProfesores").change(function () {
    var profSelecc = $(this);
    var id = profSelecc.val();
    if (id ==0||profSelecc=="Seleccionar...") {
        $('#dataProf').fadeOut(1000);
        $('#containerSend').addClass('d-none');
        $('#alertMje').fadeOut(1000);
    } else {
        $('#dataProf').fadeIn(1000);
        const profesor = JSONProfesores.find( prof => prof.id_profesor === id );
        $('#containerSend').removeClass('d-none');
        pintaDatosProfesorHTML(profesor);
    }
});

function pintaDatosProfesorHTML(prof) {
    $('#idProfesor').val(prof.id_profesor);
    $('#noTRabajador').html(prof.no_trabajador);
    $('#nombreProfesor').html(prof.prefijo+". "+prof.nombre+" "+prof.app+" "+prof.apm);
    $('#correoProfesor').html(prof.email);
    $('#deptoProfesor').html(prof.depto_name);
    $('#fechaRegistroProfesor').html(getLegibleFechaHora(prof.fecha_registro));
    $('#alertMje').fadeIn(1000);
}

function cargaAdminsDataTable() {
    $('#tblProfesores').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-admin-datatable.php",
                "type": "POST"
            },
        "order": [[ 1, 'asc' ]],
        //agregando attributo al fila
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id_persona', data.id_profesor);
        },
        "columns":
            [
                { data: null,
                    render: function ( data, type, row ){
                    let status = row.estatus_admin == 1 ? 'success':'danger';
                        let template = `<div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="${row.img_perfil}" alt="" srcset="">
                                            <span class="avatar-status bg-${status}"></span>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">${row.prefijo} ${row.nombre_completo}</p>
                                            <p class="text-xs text-primary mb-0">${row.cargo}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                {data: 'no_trabajador'},
                { data: 'permisos',
                    render: function ( data, type, row ){
                        let value = getNivelHTML(row.permisos);
                        return value;
                    }
                },
                { data: 'depto_name'},
                { data: null,
                    render: function ( data, type, row ){
                        let template = '<div class="d-flex flex-column justify-content-center">\n' +
                            '              <p class="mb-0 text-xs"><a href="mailto:'+row.email+'">'+row.email+'</a></p>\n' +
                            '              <p class="text-xs text-primary mb-0">'+row.telefono+'</p>\n' +
                            '           </div>';
                        return template;
                    }
                },
                { data: 'fecha_registro'},

                { data: null,
                    render: function ( data, type, row ) {
                        let btnAcction = row.estatus_admin != 1 ?
                            `<a href="#" class="btn btn-success btnChangeStatus"><i class="fas fa-check-circle"></i></a>` :
                            `<a href="#" class="btn btn-outline-danger btnChangeStatus"><i class="fas fa-times-circle"></i></a>`;
                        let template = `<div class="d-flex"><a href="#" class="btn btn-primary btnViewPerfil"><i class="fas fa-id-card-alt"></i></a>
                                        ${btnAcction}</div>`;
                        return template;
                    }
                }
            ],
        "language": {
            "search": "Buscar",
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No hay administradores registrados",
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

    dataTable = $("#tblProfesores").DataTable({
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

$(document).on("click", ".btnChangeStatus", function ()
{
    let elementClienteSelect = $(this)[0].parentElement.parentElement.parentElement;
    let id = $(elementClienteSelect).attr("id_persona");
    var url = './detalles-profesor';
    alert("Cambiar estado");
});

$(document).on("click", ".btnValidateNewAdmin", function ()
{
    let cargo = $("#txtcargo").val();
    let id = $("#listaDesProfesores").val();
    let nivel = $("#permisos").val();
    var combo = document.getElementById("listaDesProfesores");
    var selected = combo.options[combo.selectedIndex].text;
    if (cargo===""){
        alerta("Falta el Cargo","Agregue el cargo del nuevo administrador");
        $("#txtcargo").addClass("bg-warning");
    }
    else{
        if (selected==="Seleccionar..."){
            alerta("Seleccione Profesor","Seleccione un profesor de la lista desplegable");
        }
        else{
            $("#txtcargo").removeClass("bg-warning");
            $("#modalCreateAdminAccount").modal('hide');
            sweetConfirm('Nuevo Administrador', '¿Estas seguro de que desea agregar a '+selected+ ' como ADMINISTRADOR?', function (confirmed) {
                if (confirmed) {
                    confirmaAddCuentaAdmin(id,nivel,cargo).then(function (result) {
                        console.log(result);
                        if (result == -1){
                            titulo= "Contraseña invalida";
                            texto= "Porfavor llena los datos que se solicitan";
                            tipo = "warning";
                            alerta(titulo,texto,tipo);
                        }
                        else if (result.validacion) {
                            alertaEmergente(result.mensaje);//reload
                            $('#containerSend').addClass('d-none');
                            cargaListaProfesoresNoAdmin();
                            var table = $('#tblProfesores').DataTable( {
                                ajax: "data.json"
                            } );
                            table.ajax.reload( null, false );
                        }
                        else if (!result.validacion){
                            titulo= result.mensaje;
                            texto= "Contraseña Incorrecta";
                            tipo = "warning";
                            alerta(titulo,texto,tipo);
                        }
                    })
                }
            });
        }

    }
});
