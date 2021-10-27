/*SE CREA O SE MANDA A LLAMAR EL ARCHIVO LFHL*/
$(document).ready(function () {
    consultaCursos();
});

function consultaCursos(){
    $.ajax({
        url: "./webhook/lista-cursos.php",
        type: 'POST',
        data: {
            estado_filtro: -1,
            id_curso_filtro : 0
        },
        success: function (response) {
            //COnvertimos el string a JSON
           let cursos = JSON.parse(response);
            console.log(cursos);
            let template="";
            let contador=0;
            cursos.forEach(curso => {
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
                /*
                
                 */
                
            });
            $("#tbl-cursos").html(template);
        }

    });
    
}

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
/* FUNCIONES ON CLICK  */
function mostrarLink(link){
    alert(link);
}
// Termina LFHL