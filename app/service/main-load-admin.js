$(document).ready(function () {
    cargaListaDeplegableCursosActivos();
    cargaListaDepDeptosProfesores();
    loadContaores();
    setInterval(loadContaores,1000);
});
function cargaListaDeplegableCursosActivos() {
    cargaCursos(0,1).then(function (JSONData) {
        let listaHtml = buildListaDesplCursos(JSONData);
        $("#modal-lista-cursos").html(listaHtml);
    });
}

function cargaListaDepDeptosProfesores() {
    consultaDeptos().then(function(result) {
        let listaHtml = buildHTMLListDespDeptos(result);
        $("#depto").html(listaHtml);
    })
}

function loadAsignacion() {
    let url = "./nueva-asignacion";
    let data = {  id: $("#modal-lista-cursos").val() };
    redirect_by_post(url, data, false);
}

//loading contadores de navbar
function loadContaores(){
    contadoresNavBar().then(function (contadores) {
        let contadorAlumnosTemplate = contadores.alumnosCountVerif >0 ?
            `Alumnos  <span class="badge bg-primary">${contadores.alumnosCountVerif}</span>` : `Alumnos`;
        $("#counterSolicAlumnos").html(contadorAlumnosTemplate);

        let contadorAlumnosVerTemplate = contadores.alumnosCountVerif >0 ?
            `Revisar cuentas <span class="badge bg-primary">${contadores.alumnosCountVerif}</span>` : `Revisar cuentas`;
        $("#counterSolicAlumnosView").html(contadorAlumnosVerTemplate);

        /*
        Solicitudes  <span class="badge bg-danger">0</span>
        */
        let contSolcPendtemplate = contadores.solPendientes >0 ?
            `Solicitudes  <span class="badge bg-danger">${contadores.solPendientes}</span>` : `Solicitudes`;
        $("#countSolicSidebar").html(contSolcPendtemplate);

        let contCursosPendRevtemplate = contadores.cursosPendRev >0 ?
            `Cursos  <span class="badge bg-primary">${contadores.cursosPendRev}</span>` : `Cursos`;
        $("#contCursosSideBar").html(contCursosPendRevtemplate);

        let contArchvosRevisa = contadores.archivosPendientes >0 ?
            `Documentos  <span class="badge bg-danger">${contadores.archivosPendientes}</span>` : `Documentos`;
        $("#countDoscRevisaSidebar").html(contArchvosRevisa);

        try {
            $("#panelSolCount").html(contadores.solPendientes);
        }
        catch (e) {

        }
    })
}