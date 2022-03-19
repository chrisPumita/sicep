//confirmSend

//Terminar y enviar a revision
$(document).on("click", ".confirmSend", function ()
{
    sweetConfirm('Terminar y Enviar', '¿Estas seguro de que desea enviar la propuesta ahora?', function (confirmed) {
        if (confirmed) {
            enviarPropuesta(ID_CURSO).then(function (result) {
                alertaEmergente(result.Mensaje);
                blockEdit();
            });
        }
    });
});

function blockEdit() {
    let template = `<div class="card-body py-4 d-flex">
                                <div class="col-sm-12 d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="../assets/images/icons/send2.svg" width="80" alt="svg ok">
                                    </div>
                                    <div class="ms-3 name">
                                        <h4 class="font-bold">Aprobación pendiente</h4>
                                        <h6 class="text-muted mb-0">El curso fue enviado, esperamos la aprobación del Administrador</h6>
                                    </div>
                                </div>
                            </div>`;
    $("#cardEstatus").html(template);
    $(".readOny").remove();

}