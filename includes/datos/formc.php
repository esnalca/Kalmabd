<?php

include("includes/conexion.php");
$sql="SELECT * FROM anupor";
$res=mysqli_query($link,$sql);
$num=mysqli_num_rows($res);

?>
<div class="container ">
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <h3>Cambiar</h3><hr/>
        <div class="container ">
            <form role ="form" style="width:400px;" action="cambanun.php"  method="POST" >
                <select class="selectpicker" name="combo1"> 
                <?php
                 
                while ($fila=mysqli_fetch_assoc($res)) {
                ?>
                    <option value="<?=$fila["id"]?>"><?=$fila["tit"]?></option>
                <?php
                }      
                ?>
                </select>
                <?php
                mysqli_data_seek($res, 0);
                 ?>
                <select class="selectpicker" name="combo2"> 
                <?php
                while ($fila=mysqli_fetch_assoc($res)) {
                ?>
                    <option value="<?=$fila["id"]?>"><?=$fila["tit"]?></option>
                <?php
                }      
                ?>
                </select>
                <button class="btn btn-primary fondom">Cambiar</button>
            </form>
        </div>
</div>