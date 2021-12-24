<script src="./service/asyn_rest.js"></script>
<script src="./service/data-cursos-ajax.js"></script>
<script src="./service/html-builds.js"></script>
<script src="./service/profesor-add.js"></script>
<script src="./service/general/swal-alerts.js"></script>
<script src="./service/general/tools.js"></script>


<script>
    $(document).ready(function () {
        cargaCursosListaDeplegableModal(1,0);
        loadContaores();
    });

    function loadAsignacion() {
        let url = "./nueva-asignacion";
        let data = {  id: $("#modal-lista-cursos").val() };
        redirect_by_post(url, data, false);
    }

    //loading contadores de navbar
    function loadContaores(){
        contadoresNavBar().then(function (contadores) {
            console.log(contadores);

            let contadorAlumnosTemplate = contadores.alumnosCountVerif >0 ?
                `Alumnos  <span class="badge bg-primary">${contadores.alumnosCountVerif}</span>` : `Alumnos`;
            $("#counterSolicAlumnos").html(contadorAlumnosTemplate);

            let contadorAlumnosVerTemplate = contadores.alumnosCountVerif >0 ?
                `Revisar cuentas <span class="badge bg-primary">${contadores.alumnosCountVerif}</span>` : `Revisar cuentas`;
            $("#counterSolicAlumnosView").html(contadorAlumnosVerTemplate);

        })
    }

</script>

