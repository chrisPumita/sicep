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

function getModalidadCurso(tipo){
    //Funcionalidades del tipo_curso
    switch(tipo){
        case "0":
            return "Presencial";
            break;
        case "1":
            return "En Linea";
            break;
        case "2":
            return "Mixto"
            break;
        default:
            return "No definido";
            break;
    }
}

function getEstatusAsignacion(tipo){
    //Funcionalidades del tipo_curso
    switch(tipo){
        case "0":
            return '<i class="fas fa-clipboard-check text-light-grey "></i> Concluido';
            break;
        case "1":
            return '<i class="fas fa-user-clock text-success"></i> Inscripciones';
            break;
        case "2":
            return '<i class="fas fa-spinner text-info"></i> En Curso';
            break;
        case "3":
            return '<i class="fas fa-clipboard-check text-success"></i> Inscripciones';
            break;
        default:
            return '<i class="fas fa-exclamation-triangle text-warning"></i> No definido';
            break;
    }
}

function estadoCursoApoved(aprobado) {
    let n = parseInt(aprobado)
    let color = n == 1 ? `success` : `warning`;
    let texto = n == 1 ? `<i class="fas fa-check-circle"></i>` : `<i class="fas fa-hourglass-half"></i>`;
    return `<span class="badge bg-${color}">${texto}</span>`;
}

function estadoProfesorAdmin(admin_value) {
    return parseInt(admin_value)==1?`<a href="./lista-cuentas"><span class="badge bg-light-success">ADMIN</span></a>`:"";
}

//regresa un tag de tiempo de nivel de banderas
function getNivelHTML(nivel) {
    let text, bg;
    let permisos = parseInt(nivel);
    switch (permisos) {
        case 0:
            text = "BAJO";
            bg="danger";
            break;
        case 1:
            text = "BAJO";
            bg="warning";
            break;
        case 2:
            text = "MEDIO";
            bg="primary";
            break;
        case 3:
            text = "ALTO";
            bg="success";
            break;
    }
    let template = `<ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> ${text}</span>
                            <span class="badge bg-${bg} badge-pill badge-round ml-1"><i class="fas fa-flag"></i></span>
                        </li>
                    </ul>`;
    return template;
}

function getNivelPermisos(nivel) {
    let permisos = parseInt(nivel);
    switch (permisos) {
        case 0:
            return '<i class="fas fa-circle text-yellow text-danger"></i> PERMISOS DENEGADOS';
            break;
        case 1:
            return '<i class="fas fa-circle text-warning"></i> BAJO';
            bg="warning";
            break;
        case 2:
            return '<i class="fas fa-circle text-info"></i> MEDIO';
            break;
        case 3:
            return '<i class="fas fa-circle text-success"></i> ALTO';
            break;
        default:
            return '<i class="fas fa-circle text-dark"></i> NO IDENTIFICADO';
            break;
    }
}


function diaSemana(dia) {
    switch (dia) {
        case "0":
            return "LUNES";
            break;
        case "1":
            return "MARTES";
            break;
        case "2":
            return "MIERCOLES";
            break;
        case "3":
            return "JUEVES";
            break;
        case "4":
            return "VIERNES";
            break;
        case "5":
            return "SABADO";
            break;
        case "6":
            return "MIERCOLES";
            break;

        default:
            return "DOMINGO";
            break;
    }
}

function estadoAsig(estatus) {
    switch (estatus) {
        case "0":
            return `<span class="badge bg-info">
                        <div class="blob blue ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POR INICIAR
                    </span>`;
        case "1":
            return `<span class="badge bg-success">
                        <div class="blob green ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En curso
                    </span>`;
        case "2":
            return `<span class="badge bg-info">
                        <div class="blob blue ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TERMINADO
                    </span>`;
        case "-1":
            return `<span class="badge bg-danger">
                        <div class="blob red ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANCELADO
                    </span>`;
        default:
            return `<span class="badge bg-info">
                        <div class="blob blue ">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO DEFINIDO
                    </span>`;
    }
}

function getCampusCede(campus) {
    if (campus=="0")
        return "CAMPO 1";
    else if (campus=="1")
            return "CAMPO 4";
    else
        return "OTRO";
}