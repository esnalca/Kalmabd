<?
include("includes/header.php")
?>
        <div class="container">
            <section>
                <div class="row " >
                    <div class="col-lg-12">
                        <div class="row borde">
                            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3  ">
                                <h3>Anuncios sección</h3><hr/>
                                <ul class="">
                                    <a href="maqueta.php?a=1"><li class="color">Añadir</li></a>
                                    <li class="color">Modificar</li>
                                    <li class="color">Eliminar</li>
                                </ul>
                            </div>
                            <?
                            if($_GET["a"]==1){
                                include("includes/datos/forma.html");
                                }if($_GET["a"]==2){
                                    echo "<h2>Anuncio añadido correctamente</h2>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?
include("includes/footer.php")
?>