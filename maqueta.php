<?
include("includes/header.php")
?>
        <div class="container">
            <section>
                <div class="row " >
                    <div class="col-lg-12">
                        <div class="row borde">
                            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 borde ">
                                <h3>Anuncios sección</h3><hr/>
                                <ul class="borde">
                                    <li class="color">Añadir</li>
                                    <li class="color">Modificar</li>
                                    <li class="color">Eliminar</li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <h3>Añadiendo anuncios seccion</h3><hr/>
                                <div class="container borde">
                                    <form role ="form" enctype="multipart/form-data" style="width:400px;" action="guardaranun.php"  method="POST" >
                                        <div class="required-field-block">
                                            <input type="text" placeholder="Titulo" name="tit" class="form-control">
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <div class="required-field-block">
                                            <input type="file" placeholder="Imagen" name="archivo" class="form-control">
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <div class="required-field-block">
                                            <textarea rows="3" class="form-control" name="des" placeholder="Descripcion"></textarea>
                                            <div class="required-icon">
                                            <div class="text">*</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary fondom">Guardar</button>
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