<?
include("includes/header.php")
?>
        <div class="container">
            <section>
                <div class="row " >
                    <div class="col-lg-12">
                        <div class="row borde">
                            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 borde ">
                                <h3 class="borde">Anuncios sección</h3>
                                <ul class="borde">
                                    <li class="color">Añadir</li>
                                    <li class="color">Modificar</li>
                                    <li class="color">Eliminar</li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 borde">
                                <h3 class="borde">Añadiendo anuncios seccion</h3><hr/>
                                <div class="container borde">
                                    <form role ="form" style="width:400px; ">
                                        <div class="required-field-block">
                                            <input type="text" placeholder="Titulo" class="form-control">
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <div class="required-field-block">
                                            <input type="text" placeholder="Imagen" class="form-control">
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <div class="required-field-block">
                                            <textarea rows="3" class="form-control" placeholder="Descripcion"></textarea>
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary fondom">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?
include("includes/footer.php")
?>