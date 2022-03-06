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

/*ADD ADMIN SYSTEM*/
async function confirmaAddCuentaAdmin(id,nivel,cargo) {
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
        return await executeAutorizacionAddAccount(password,id,nivel,cargo);
    }
    else{
        return -1;
    }
}

async function executeAutorizacionAddAccount(password,id,nivel,cargo) {
    //para tipo de ejecucion
    let url = "./webhook/autoriza-new-admin.php";
    let data = { password:password, id:id,nivel:nivel, cargo:cargo }
    return await excuteAsyncInstructionAJAX(data,url);
}

/*EJECUTE GENERAL AAJAX  FUNCTION*/
async function excuteAsyncInstructionAJAX(data,url){
    return $.ajax({
        url: url,
        type: 'POST',
        dataType: "json",
        data: data,
        error: function() {
            alert("Error al conectar con el backen para autorizar");
        }
    });
}