<?php
include("includes/conexion.php");
$sql="SELECT * FROM anupor";
$res=mysqli_query($link,$sql);
$num=mysqli_num_rows($res);
?>
<div class="container ">
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <h3>Elegir anuncio a modificar</h3><hr/>
        <div class="container ">
            <form role ="form" style="width:400px;" action="conun.php?m=1"  method="POST" >
                <select class="selectpicker" name="combo">
  <?php
                while ($fila=mysqli_fetch_assoc($res)) {
  ?>
                    <option value="<?=$fila["id"]?>"><?=$fila["tit"]?></option>
  <?php
                }
  ?>
                </select>
                <button class="btn btn-primary fondom">Elegir</button>
            </form>
        </div>
</div>
  <?php
                if (isset($_POST["combo"])){
                    $combo=$_POST["combo"];
                }if (!empty($combo)) {
                   $sqlc="SELECT * FROM anupor WHERE id=$combo";
                   $resc=mysqli_query($link,$sqlc);
                   $filac=  mysqli_fetch_array($resc);
  ?>
                <div class="container ">
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <form role ="form"  style="width:400px;" action="conun.php?m=1"  method="POST" >
                    <input type="text" value="<?=$filac["tit"]?>" name="tit" class="form-control"><br/>
                    <textarea rows="3" class="form-control" name="des" ><?=$filac["des"]?></textarea><br/>
                <button class="btn btn-primary fondom">Guardar</button>
            </form>
                </div>
        </div>
  <?php
                }
                $name=$_FILES["archivo"]["name"];
                $id=$_POST["id"];
                $tit=$_POST["tit"];
                $des=$_POST["des"];
  
  ?>

