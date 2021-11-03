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