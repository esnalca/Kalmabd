<?php
include("includes/header.php");
?>
        <div class="container">
            <section>
                <div class="row " >
                    <div class="col-lg-12">
                        <div class="row borde">
                            <div class="hidden-xs col-sm-3 col-md-3 col-lg-3  ">
                                <h3>Anuncios sección</h3><hr/>
                                <ul class="">
                                    <a href="conun.php?a=1"><li class="color">Añadir</li></a>
                                    <a href="conun.php?m=1"><li class="color">Modificar</li> </a>
                                    <a href="conun.php?e=1" ><li class="color">Eliminar</li></a>
                                    <a href="conun.php?c=1" ><li class="color">Cambiar</li></a>
                                </ul>
                            </div>
                            <?php
                            if($_GET["a"]==1){
                            }if($_GET["a"]==1){include("includes/datos/forma.html");
                                }if($_GET["a"]==2){
                                    echo "<h2>Anuncio añadido correctamente</h2>";
                                    }if($_GET["e"]==1){
                                        include("includes/datos/forme.php");
                                        }if($_GET["e"]==2){
                                            echo "<h2>Anuncio eliminado correctamente</h2>";
                                        }if($_GET["c"]==1){
                                         include("includes/datos/formc.php");
                                            }if($_GET["c"]==2){
                                                echo "<h2>Anuncio cambiado</h2>";
                                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php
include("includes/footer.php");
?>