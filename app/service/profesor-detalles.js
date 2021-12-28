window.onload = function(){
    //cargar desoues de consultar la informacion
    cargaCursoPropuestos();
}

$(document).ready(function() {
    let idProfesor = ID_PROF;
    console.log(ID_PROF);
    cargaDatosProfesor(idProfesor);
    cargaDataTableAsignaciones();

});

function cargaDatosProfesor(idProfesor) {
    //Funcion asinconra del profesor
    consultaDetallesProfesor(idProfesor).then(function (response) {
        let ProfesorFound = response.profes[0];
        printHTMLDetails(ProfesorFound);
    })
}
function cargaCursoPropuestos() {
    cargaCursos(2,ID_PROF).then(function (JSONData) {
        console.log(JSONData);
        let template = "";
        if (JSONData.length>0){
            template = `
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Se ecnontraron ${JSONData.length} cursos propuestos</strong>
                   Elija uno pera ver los detalles
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="d-flex flex-column align-items-center text-center">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">`;
            let cont = 0;
            let CSSCol = JSONData.length<4 ? 12 / JSONData.length : 3;
            JSONData.forEach(
                (curso)=>
                {
                    cont ++;
                    let active = cont == 1 ? " active": "";
                    template += `
                        <div class="carousel-item ${active}">
                            <div class="col-12 col-md-${CSSCol} px-3">
                                <div class="card mb-2 bg-grey">
                                    <img class="card-img-top" src="${curso.banner_img}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title font-weight-bold">${curso.codigo} ${curso.nombre_curso}</h4>
                                        <span class="badge bg-success">Impartido ${curso.grupos_abiertos} veces</span>
                                        <p class="card-text">${curso.descripcion}</p>
                                        <h6>Creado el ${getLegibleFechaHora(curso.fecha_creacion)}</h6>
                                        <div class="col-sm-12 d-flex justify-content-center">
                                            <a href="${curso.link_temario_pdf}" download="" target="_blank" class="btn btn-primary me-1 mb-1">
                                            <i class="fas fa-download"></i>Temario</a>
                                            <button class="btn btn-primary me-1 mb-1" onclick="openCurso(${curso.id_curso});"><i class="fas fa-eye"></i> Detalles</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                }
                );
            template += `</div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <script>
                    let items = document.querySelectorAll('.carousel .carousel-item')
                    items.forEach((el) => {
                        const minPerSlide = ${JSONData.length}
                        let next = el.nextElementSibling
                        for (var i=0; i<minPerSlide; i++) {
                            if (!next) {
                                // wrap carousel by using first child
                                next = items[0]
                            }
                            let cloneChild = next.cloneNode(true)
                            el.appendChild(cloneChild.children[0])
                            next = next.nextElementSibling
                        }
                    })
                </script>`;
        }
        else{
            template = `<div class="alert alert-info" role="alert">
                          <h4 class="alert-heading">SIN CURSOS</h4>
                          <p> Este profesor aún no ha propuesto ningún curso.</p>
                          <hr>
                          <p class="mb-0">Si espera un curso de este profesor, es posible que aun no lo haya enviado a revisión. Una vez recibamos la propuesta, esta aparecerá aquí o en menú CURSOS aparecerá la notificación de revisión y aparecerá como PENDIENTE</p>
                        </div>`;
        }
        $("#bodyPrpuestas").html(template);


    });
}

function printHTMLDetails(PROF_DATA) {
    let PROF = PROF_DATA.DatosProfe;
    let ADMIN_DATA = PROF_DATA.DatosAdmin;
    $("#lblNameProfesor").html(PROF.prefijo+" "+PROF.nombre_completo);
    $("#lblNameProfesor").html(PROF.nombre_completo);
    let btnHTMLActiveCount = PROF.estatus_profesor === "1" ?
        '<button class="btn btn-warning w-100 mr-3 mt-3 mb-3"><i class="fas fa-hourglass-half"></i> SUSPENDER</button>' :
        '<button class="btn btn-success w-100 mr-3 mt-3 mb-3"><i class="fas fa-check-circle"></i> ACTIVAR</button>';
    $("#contBtnActve").html(btnHTMLActiveCount);

    let alertCount = PROF.estatus_profesor === "1" ? '<span class="badge bg-light-success"><i class="fas fa-check-circle"></i></span>':
        '<span class="badge bg-light-warning"><i class="fas fa-exclamation-triangle"></i></span>';

    $("#lblNameContainer").html(PROF.prefijo+" "+PROF.nombre_completo + " " +alertCount);
    $("#lblTagDepto").html(PROF.depto_name);
    let infoAdmin = PROF.flagAdmin  === "1" ? "ADMINISTRADOR" : "PROFESOR";
    $("#lblTagPuesto").html(infoAdmin);

    //Detalles del
    $("#idPerfilNoTrab").html(PROF.no_trabajador);
    $("#namePerfil").html(PROF.prefijo+" "+PROF.nombre_completo);
    $("#correoPerfil").html(PROF.email);
    $("#telPerfil").html(PROF.telefono);
    $("#deptoPerfil").html(PROF.depto_name);
    $("#perfilCountType").html("Cuenta de "+infoAdmin);

    let cardInfoAdmin = PROF.flagAdmin  === "1" ? buildCardAdmin(ADMIN_DATA) : "<!-- NO ADMIN -->";
    $("#sectionAdmin").html(cardInfoAdmin);
    $('#imgPerfil').attr('src',PROF.img_perfil);

}

function buildCardAdmin(ADMIN) {
    console.log(ADMIN);
    let template = `<div class="card">
                        <div class="card-header img_bg_cards" style="background-image: url(../assets/images/icons/group3.svg);">
                            <div class="col-12" >
                                <h4 class="card-title "><b>CUENTA DE ADMINISTRADOR</b></h4>
                            </div>
                            <div class="col" >
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <p class="card-text text-muted small ">
                                    <div class="spinner-grow bg-success" role="status" style="width: 1rem; height: 1rem"></div>
                                    Este profesor tiene cuenta de adminsitrador <span class="vl ml-1 mr-2 "></span>
                                    desde el <span class="font-weight-bold">${getLegibleFechaHora(ADMIN.fecha_registro)}</span></p>
                                </h6>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action">Alta: ${getLegibleFechaHora(ADMIN.fecha_registro)}</button>
                                        <button type="button" class="list-group-item list-group-item-action">Cargo: ${ADMIN.cargo}</button>
                                        <button type="button" class="list-group-item list-group-item-action">Nivel de permiso: ${getNivelPermisos(ADMIN.permisos)}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class=" col">
                                    <a href="#" class="btn btn-primary btn-black"><i class="fas fa-edit"></i><small>EDITAR</small></a>
                                    <a href="#" class="btn btn-warning btn-black"><i class="fas fa-hourglass-half"></i><small>Suspender</small></a>
                                    <a href="#" class="btn btn-danger btn-black"><i class="fas fa-ban"></i><small>Deshabilitar</small></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>`;
    return template;
}

/// DATATABLE HISTORIAL
function cargaDataTableAsignaciones() {
    //headers
    // GRUPO	CURSO	PROFESOR	INSCRITOS	PERIODO	TIPO	ESTADO
    $('#tblHistAsigCurso').DataTable( {
        "scrollX": true,
        "ajax":
            {
                "url":"./webhook/lista-historico-asig-curso-datatable.php",
                "data": {"idCurso": 0, "filtro": 2, "idFiltro":ID_PROF},
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
                        let template = `<div class="d-flex align-items-center" role="button" onclick="openAsig(${row.id_asignacion});">
                                        <img height="60" src="${row.banner_img}" class="rounded float-start" alt="...">
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="mb-0 text-xs">${row.nombre_curso}</p>
                                        </div>
                                    </div>`;
                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row )
                    {
                        return 'del '+ getLegibleFecha(row.fecha_inicio)+' <br>al '+getLegibleFecha(row.fecha_fin);
                    }
                },
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
                        let template = getEstatusAsignacion(row.statusAsignacion)+'<br><span class="badge bg-'+spanStyle+'">'+row.inscritos + '/' + row.cupo+'</span> '+'<span class="badge bg-danger" id="badgePendientes"><i class="far fa-eye"></i> '+row.solicitudesPendientes+'</span>';

                        return template;
                    }
                },
                { data: null,
                    render: function ( data, type, row ){
                        return 'Grupo: '+ row.grupo+'<br> Generación: '+row.generacion+'<br> Semestre: '+row.semestre;
                    }
                },
                {
                    data: 'ACTIONS',
                    render: function ( data, type, row ){
                        let template = '<a href="#" class="btn btn-primary viewAsignacion  me-1 mb-1" onclick="openAsig('+row.id_asignacion+');">' +
                            '<i class="far fa-eye"></i></a>' +
                            '<a href="#" class="btn btn-info me-1 mb-1"><i class="fas fa-list"></i></a>';
                        return template;
                    }
                }
            ],
        "order": [[0, "asc" ]],
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

function openAsig(id) {
    let url = "./detalles-asignacion";
    let data = {  id:id };
    redirect_by_post(url, data, false);
}

function openCurso(ID) {
    var url = './detalles-curso';
    redirect_by_post(url, {id: ID}, false);
}