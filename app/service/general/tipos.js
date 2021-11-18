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