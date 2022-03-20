/*GENERAL FUNCTIONS*/
function cargaListasSemGen() {
    consultaAsyncGenSemDist().then(function (e) {
        let template1 = `<option value="">TODOS</option>`;
        let template2=`<option value="">TODOS</option>`;
        let gens = e.generaciones;
        let sems = e.semestres;
        gens.forEach(
            (gen)=> {
                template1 += `<option value="${gen.generacion}">${gen.generacion}</option> `;
            }
        );
        $("#listGeneraciones").html(template1);

        sems.forEach(
            (sem)=> {
                template2 += `<option value="${sem.semestre}">${sem.semestre}</option> `;
            }
        );
        $("#listSemestres").html(template2);
    })
}

function cargaListasCursos() {
    cargaCursos(99,0).then(function (JSONData) {
        let template=`<option value="">TODOS</option>`;
        JSONData.forEach(curso => {
            template+=`<option value="${curso.nombre_curso}">${curso.nombre_curso}</option> `;
        });
        $("#listaCursos").html(template);
    });
}

/*GENERAL FUNCTIONS*/