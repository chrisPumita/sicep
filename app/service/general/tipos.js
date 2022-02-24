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
            return "Hídrida"
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
            return '<i class="fas fa-clipboard-check text-light-grey "></i> ARCHIVADO';
            break;
        case "1":
            return '<i class="fas fa-user-clock text-success"></i> INSCRIPCIONES';
            break;
        case "2":
            return '<i class="fas fa-spinner text-info"></i> EN CURSO';
            break;
        case "3":
            return '<i class="fas fa-clipboard-check text-success"></i> CALIFICACIONES';
            break;
        default:
            return '<i class="fas fa-exclamation-triangle text-warning"></i> CONCLUIDO';
            break;
    }
}
function getEstatusAsignacionPlano(tipo){
    //Funcionalidades del tipo_curso
    switch(tipo){
        case "0":
            return 'ARCHIVADO';
            break;
        case "1":
            return 'INSCRIPCIONES';
            break;
        case "2":
            return 'EN CURSO';
            break;
        case "3":
            return 'CALIFICACIONES';
            break;
        default:
            return 'CONCLUIDO';
            break;
    }
}

function getEstatusAsignacionColorIndicator(tipo){
    //Funcionalidades del tipo_curso
    switch(tipo){
        case "0":
            return 'white';
            break;
        case "1":
            return 'green';
            break;
        case "2":
            return 'blue';
            break;
        case "3":
            return 'purple';
            break;
        default:
            return 'white';
            break;
    }
}

function estadoCursoApoved(aprobado,acreditado) {
    let n = parseInt(aprobado)
    let color,texto;
    if (acreditado){
        color = n == 1 ? `success` : `warning`;
        texto = n == 1 ? `<i class="fas fa-check-circle"></i>` : `<i class="fas fa-hourglass-half"></i>`;
    }
    else{
        color = "info";
        texto =`<i class="fas fa-exclamation-triangle"></i>`;
    }

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
        case "1":
            return "LUNES";
            break;
        case "2":
            return "MARTES";
            break;
        case "3":
            return "MIERCOLES";
            break;
        case "4":
            return "JUEVES";
            break;
        case "5":
            return "VIERNES";
            break;
        case "6":
            return "SABADO";
            break;
        case "7":
            return "DOMINGO";
            break;

        default:
            return "ERROR";
            break;
    }
}

function estadoAsig(estatus) {
    switch (estatus) {
        case "0":
            return `<span class="badge bg-info">
                        <div class="blob blue d-none d-sm-flex">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POR INICIAR
                    </span>`;
        case "1":
            return `<span class="badge bg-success">
                        <div class="blob green d-none d-sm-flex">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EN CURSO
                    </span>`;
        case "2":
            return `<span class="badge bg-info">
                        <div class="blob blue d-none d-sm-flex">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TERMINADO
                    </span>`;
        case "-1":
            return `<span class="badge bg-danger">
                        <div class="blob red d-none d-sm-flex">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANCELADO
                    </span>`;
        case "99":
            return `<span class="badge bg-success">
                        <div class="blob blue d-none d-sm-flex">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONCLUIDO
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

function getColorEstatusFile(estatus) {
    switch (estatus) {
        case "0":
            return `warning`;
        case "1":
            return `success`;
        case "2":
            return `danger`;
        case "3":
            return `info`;
        default:
            return `black`;
    }
}

/*
MARCAR COMO > estado
0. enviado para verificar (default)
1. verificado y aprobado
2. verificado y rechazado
3. incorrecto
4. falso
5. caducado
6. eliminado
* */
function getTipoAccion(name) {
    switch (name) {
        case "6":
            return `ELIMINAR`;
        case "5":
            return `MARCAR COMO NO ACTUALIZADO`;
        case "4":
            return `MARCAR COMO FALSO/ALTERADO`;
        case "3":
            return `MARCAR COMO INCORRECTO`;
        case "2":
            return `RECHAZAR`;
        case "1":
            return `APROBAR`;
        default:
            return `MARCAR COMO EN VALIDACION`;
    }
}


function getTipoEstado(estatusFIle, statusRevisado){
    let fileE = parseInt(estatusFIle);
    let reviE = parseInt(statusRevisado);

    if (fileE == -1 && reviE == -1){
        return -1;
    }
    else if (fileE == 0 && reviE == 0){
        return 0;
    }
    else if (fileE == 1 && reviE == 1){
        return 1;
    }
    else{
        return null;
    }
}

function cuentaAlumnoDraw(tipo) {
 //   ``
    return parseInt(tipo) === 1 ? `<i class="fas fa-check-circle text-primary" 
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Cuanta Verificada"></i>
                        `: `<i class="fas text-warning fa-exclamation-circle" 
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Cuenta No Verificada"></i>`;
}

function sexoPersona(tipo) {
    let sexo = parseInt(tipo);
    switch (sexo) {
        case 0:
            return 'Hombre';
            break;
        case 1:
            return 'Mujer';
        break;
        default:
            return 'No especificado';
        break;
    }
    return null;
}

function estadoServSoc(tipo) {
    let sexo = parseInt(tipo);
    switch (sexo) {
        case 0:
            return '<i class="fas fa-circle text-grey"></i> TERMINADO';
            break;
        case 1:
            return '<i class="fas fa-circle text-success"></i> EN CURSO';
        break;
        default:
            return '<i class="fas fa-circle text-danger"></i>DESHABILITADO';
        break;
    }
    return null;
}

function aceptFiles(tipo) {
    let acept;
    switch (tipo) {
        case "pdf":
            acept = ".pdf";
            break;
        case "%":
            acept = "image/*,.pdf";
            break;
        case "img": case "IMG":
            acept = "";
            break;        default:
            acept = "image/*,.pdf";
            break;
    }
    return acept;
}

function estadoActualArchivoViewAlumno(estatus){
    switch (estatus) {
        case "6":
            return `Tu ARCHIVO no es el que se solicitó.`;
        case "5":
            return `Se requiere un documento no mayor a 3 meses de antigüedad`;
        case "4":
            return `El documento es falso o no apropiado`;
        case "3":
            return `El archivo no corresponde al solicitado`;
        case "2":
            return `Tu documento fue rechazado`;
        case "1":
            return `Este archivo ya se encuentra en tu expediente`;
        default:
            return `Error de Archivo`;
    }
}