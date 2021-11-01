/****************************************************/
//Antigua funcion de Ajax para table no dinamica
let JSON_CURSOS;
function consultaCursosAjax(filtro,idCursoEspc){
    $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        data: {
            filtro: filtro,
            id_curso_filtro : idCursoEspc
        },
        success: function (response) {
            JSON_CURSOS = JSON.parse(response);
            console.log(JSON_CURSOS);
        }
    });
}
/****************************************************/

function cargaCursosTabla(){
    consultaCursosAjax(-1,0);
    let tablaHml = buildTablaSimple();
    $("#tbl-cursos").html(tablaHml);
}

function cargaCursosListaDeplegable() {
    consultaCursosAjax(1,0);
    let listaHtml = buildListaDespl(this.JSON_CURSOS);
    $("#list-cursos").html(listaHtml);
}

function cargaInfoCurso() {
    consultaCursosAjax(0,11);
    //construyo la pagina
}



/* ++++++++++++C O N S T R U C T R O R E S
                O B J E T O S    H T M L +++++++++*/


function buildListaDespl(CURSOS_JSON) {
    let template="";
    CURSOS_JSON.forEach(curso => {
        template+=` 
               <opcion></opcion>
                `;
    });
    return templale;
}

function buildTablaSimple() {
    let template="";
    let contador=0;
    this.JSON_CURSOS.forEach(curso => {
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
    return templale;
}

