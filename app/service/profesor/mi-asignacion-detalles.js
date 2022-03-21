
$(document).ready(function() {
    loadListaOfic(ID_MyASIG);
    consultaInfoAsignacion(ID_MyASIG,1);
});

function loadListaOfic(idAsig) {
    consultaListaInscAsig(idAsig).then(function (result) {
        buildTBLListaOficial(result.OficList);
    })
}

function buildTBLListaOficial(LISTA) {
    let template = ``;
    if (LISTA.length>0){
        let idAsig = LISTA[0].id_asignacion_fk;
        template = `
            <table class="table table-hover table-striped" id="tblListaGrupo">
                <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CARRERA</th>
                    <th>CONTACTO</th>
                    <th style='width: 300px;'>PROCEDENCIA</th>
                </tr>
                </thead>
                <tbody id="tbl-listaGrupo">`;
        LISTA.forEach(
            (insc)=>
            {
                let estatusAlumnos = insc.estatusAlumno === "1" ? 'success':'danger';
                template += `
                <tr folio="${insc.id_inscripcion}">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="${insc.perfil_image}" alt="" srcset="">
                                <span class="avatar-status bg-${estatusAlumnos}"></span>
                            </div>
                            <div class="d-flex flex-column justify-content-center px-3">
                                <p class="mb-0 text-xs">${insc.nombre_completo}</p>
                                <p class="text-sm text-primary mb-0"><i class="fas fa-id-card"></i> ${insc.matricula}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-xs"><strong>${insc.carrera_especialidad}</strong></p>
                        </div>
                    </td>
                    <td> 
                       <p class="mb-0 text-xs"><strong><a href="mailto:${insc.email}"><i class="fas fa-at"></i> ${insc.email}</a></strong></p>
                       <p class="mb-0 text-xs"><strong><i class="fas fa-mobile-alt"></i> ${insc.telefono}</strong></p>
                    </td>
                    <td>
                        <p class="mb-0 text-xs"><strong>${insc.tipo_procedencia} (${insc.siglas})</strong></p>
                    </td>
                </tr>`;
            }
        );
        template += `
                </tbody>
            </table>
            <button class="btn btn-primary btnDowloadFileList" onclick="dowloadExcel(${idAsig})">
                <i class="fas fa-download"></i>Descargar
            </button>`;
    }
    else{
        template = `<div class="alert alert-info d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Este grupo no tiene Inscripciones aun. Cada solicitud es revisada por los administradores, se van a ir revisando las solicitudes
                        , una vez confirmadas apareceran aqui los datos de sus alumnos inscritos.
                      </div>
                    </div>`;
    }

    $("#lista_oficial_container").html(template);
}

//Consulta de asignacion con funcion asincrona
function consultaInfoAsignacion(idAsig,filtro) {
    consultaInfoAsignacionAjax(idAsig,filtro).then(function (e) {
        if (e.length==1){
            loadDataAsignacion(e[0]);
        }
    });
}

function loadDataAsignacion(asig){
    $("#fondoImg").css("background", "url('"+asig.banner_img+"')");

    let visible = asig.visible_publico === "1" ? '<i class="fas fa-eye text-primary"></i> VISIBLE' : '<i class="fas fa-eye-slash text-danger"></i> NO PUBLICADO';
    $("#lblVisible").html(visible);

    $("#nameAsignacion").html(asig.nombre_curso);
    $("#nameCursoTittle").html(asig.nombre_curso);
    $("#nameBreadCurso").html(asig.nombre_curso);
    $("#grupoBread").html('GPO-'+asig.grupo+' - GEN'+ asig.generacion);
    $("#lblProfesorName").html(asig.prefijo+' '+asig.nombre_completo);

    let estatusAsig = estadoAsig(asig.estado_asig);
    $("#statusFlag").html(estatusAsig);

    $("#lblGrupo").html(asig.grupo);
    $("#lblGeneracion").html(asig.generacion);
    $("#lblModalidad").html(getModalidadCurso(asig.modalidad));
    $("#lblCupo").html(asig.cupo +' lugares');
    $("#lblCampusCede").html(getCampusCede(asig.campus_cede));
    $("#lblSemestre").html(asig.semestre);
    $("#lblCostoFinal").html('$ '+asig.costo_real);
    $("#lblNotas").html(asig.notas);
    //Fechas
    $("#lblInsc").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_inscripcion) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_lim_inscripcion));
    $("#lblClases").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin));
    $("#lblCalif").html('<strong>del </strong> '+getLegibleFecha(asig.fecha_inicio_actas) +' <br> <strong> al </strong>'+getLegibleFecha(asig.fecha_fin_actas));

}

function dowloadExcel(idAsig) {
    var url = './reportes/download_lists.php';
    redirect_by_post(url, {  id: idAsig }, true);
}