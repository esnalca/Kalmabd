<?php

include("includes/conexion.php");
$combo1=$_POST["combo1"];
$combo2=$_POST["combo2"];
echo $combo1 . $combo2;

$sql1="UPDATE  `kalmap`.`anupor` SET  `port` =  '0' WHERE  `anupor`.`id` =$combo1";
$sql2="UPDATE  `kalmap`.`anupor` SET  `port` =  '1' WHERE  `anupor`.`id` =$combo2";

$res1=  mysqli_query($link, $sql1);
$res2=  mysqli_query($link, $sql2);


header("Location:conun.php?c=2");

?>