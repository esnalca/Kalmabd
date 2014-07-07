<?php
include("includes/conexion.php");
$combo=$_POST["combo"];
$sql="DELETE FROM `anupor` WHERE  `id` = $combo";
$res=mysqli_query($link,$sql);
header("Location:conun.php?e=2");
?>