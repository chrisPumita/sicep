async function confirmaCuentaAdmin(type,value,id) {
    const { value: password } = await Swal.fire({
        title: 'AUNTENTICAR CUENTA',
        input: 'password',
        inputLabel: 'Para continuar, requerimos su contraseña de administrador',
        inputPlaceholder: 'Contraseña de administrador',
        inputAttributes: {
            maxlength: 100,
            autocapitalize: 'off',
            autocorrect: 'off'
        }
    })

    if (password) {
        return await executeAutorizacion(type,value,password,id);
    }
    else{
        return -1;
    }
}

async function executeAutorizacion(type,value,password,id) {
    //para tipo de ejecucion
    let url;
    switch (type) {
        case "1":
            url = "./webhook/autoriza-inscripcion.php";
            data = { val:value, type: type, password:password, id:id }
            break;
    }
   return await excuteAsyncInstructionAJAX(data,url);
}

async function excuteAsyncInstructionAJAX(data,url){
    return $.ajax({
        url: url,
        type: 'POST',
        dataType: "json",
        data: data,
        success: function (response) {
        },
        error: function() {
            alert("Error al conectar con el backen para autorizar");
        }
    });
}