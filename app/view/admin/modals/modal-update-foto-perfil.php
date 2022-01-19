<!-- Modal ADD NUEVA FOTO -->
<div class="modal fade text-left" id="updateFotoPerfil" tabindex="-1" role="dialog" aria-labelledby="selectCourse"
     aria-hidden="true">
    <div class="modal-md  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <p class="modal-title white" id="updateFotoPerfil">
                   Actualizar foto de perfil
                </p>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-foto-perfil">
                <div class="modal-body">
                    <img src="../resources/banners/default.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso"  id="preview" >
                    <div class="card-body">
                        <h4 class="card-title">Imagen de perfil</h4>
                        <p class="card-text text-primary">
                            
                            Recomendamos una resolución de 600px por 300px
                        </p>
                        <input type="text" id="idProfesorImg">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="imgPerfil" class="text-primary">Seleccionar foto de perfil</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="imgPerfil" name="imgPerfil" aria-describedby="inputGroupFileAddon04" aria-label="Upload"  accept="image/*">
                                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"><i class="fas fa-sync-alt"></i> Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal ADD NUEVA FOTO -->
<div class="modal fade text-left" id="updateBannerCurso" tabindex="-1" role="dialog" aria-labelledby="selectCourse"
     aria-hidden="true">
    <div class="modal-md  modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <p class="modal-title white" id="updateBannerCurso">
                   Actualizar banner del curso
                </p>
                <button type="button" class="close"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times text-light"></i>
                </button>
            </div>
            <form id="frm-banner-curso">
                <div class="modal-body">
                    <img src="../resources/banners/default.jpg" class="card-img-top img-thumbnail img-preview" alt="img del curso"  id="preview" >
                    <div class="card-body">
                        <h4 class="card-title">Imagen del banner</h4>
                        <p class="card-text text-primary">
                            Recomendamos una resolución de 600px por 300px
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="imgBanner" class="text-primary">Seleccionar foto del curso</label>
                                <div class="input-group">
                                    <input type="hidden" id="idCurso" name="idCurso" value="<?php echo $id?>">
                                    <input type="file" class="form-control" id="imgBanner" name="imgBanner" aria-describedby="inputGroupFileAddon04" aria-label="Upload"  accept="image/*">
                                    <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04"><i class="fas fa-sync-alt"></i> Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


