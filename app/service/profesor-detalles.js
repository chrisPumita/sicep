window.onload = function(){
    //cargar desoues de consultar la informacion
}

$(document).ready(function() {
    let idProfesor = ID_PROFESOR;
    cargaDatosProfesor(idProfesor);
});

function cargaDatosProfesor(idProfesor) {
    //Funcion asinconra del profesor
    consultaDetallesProfesor(idProfesor).then(function (response) {
        console.log(response);
        printHTMLDetails(response.data[0]);
    })
}

function printHTMLDetails(PROF) {
    //lblNameProfesor
    console.log(PROF);
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

    let cardInfoAdmin = PROF.flagAdmin  === "1" ? buildCardAdmin() : "<!-- NO ADMIN -->";
    $("#sectionAdmin").html(cardInfoAdmin);
    $('#imgPerfil').attr('src',PROF.img_perfil);
    
    
}

function buildCardAdmin() {
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
                                    desde el <span class="font-weight-bold"> 15 Octubre de 2021</span></p>
                                </h6>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action">Cargo: Coordinador</button>
                                        <button type="button" class="list-group-item list-group-item-action">Nivel de permiso: Bajos</button>
                                        <button type="button" class="list-group-item list-group-item-action">Clave:
                                            4a7d1ed414474e4033ac29ccb8653d9b</button>
                                        <button type="button" class="list-group-item list-group-item-action">Porta
                                            ac
                                            consectetur
                                            ac</button>
                                        <button type="button" class="list-group-item list-group-item-action">Vestibulum at
                                            eros</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-primary btn-black">
                                        <i class="fas fa-edit"></i>
                                        <small>EDITAR</small></a>
                                </div>
                                <div class=" col-md-auto ">
                                    <a href="#" class="btn btn-danger btn-black">
                                        <i class="fas fa-ban"></i>
                                        <small>Deshabilitar</small></a>
                                </div>
                            </div>
                        </div>
                    </div>`;
    return template;
}