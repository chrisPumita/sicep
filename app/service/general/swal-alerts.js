function alerta(titulo,texto,tipo){
    Swal.fire({
        title: titulo,
        text: texto,
        icon: tipo,
        confirmButtonText: 'Continuar'
    })
}

function alertaEmergente(titulo){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: titulo
    })
}

function internalErrorAlert(mensaje){
    Swal.fire(
        'Error Fatal',
        mensaje,
        'error'
      )
}

function sweetConfirm(title, message, callback) {
    Swal.fire({
        title: title,
        text: message,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((confirmed) => {
        callback(confirmed && confirmed.value == true);
    });
}

function sweetCustomDesicion(title,message,yes,no,type,callback) {
    Swal.fire({
        title: title,
        text: message,
        icon: type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#112c71',
        confirmButtonText: yes,
        cancelButtonText: no
    }).then((confirmed) => {
        callback(confirmed && confirmed.value == true);
    });
}