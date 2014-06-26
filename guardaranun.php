<?
include("includes/conexion");
			$tit=$_POST["tit"];
            $des=$_POST["des"];
            $img=$_POST["img"];

	if($tit!="" and $des!="" and $img!=""){
		$sql="INSERT INTO  `kalmap`.`anupor` (`id` ,`tit` ,`des` ,`img`)
			  VALUES (NULL ,  '$tit',  '$des',  '$img')";
		$res=mysqli_query($link,$sql);

	}else{
		echo "variables vacias";
	}


?>

