<?
include("includes/conexion");
			$tit=$_POST["tit"];
            $des=$_POST["des"];
            $img=$_FILES["archivo"]["name"];
            

	if($tit!="" and $des!="" and $img!="" ){
		$ruta="/img/varias/";
			if($_FILES["archivo"]["error"]==0){
				echo $tit ."<br>". $des ."<br>". $img."<br>". $_FILES["archivo"]["error"] ."<br>". $ruta."<br>".$_FILES["archivo"]["tmp_name"];
			//move_uploaded_file($_FILES["archivo"]["tmp_name"],$ruta);
			//	$sql="INSERT INTO  `kalmap`.`anupor` (`id` ,`tit` ,`des` ,`img`)
			//		  VALUES (NULL ,  '$tit',  '$des',  '$img')";
			//	$res=mysqli_query($link,$sql);				
				
			}
	}else{
		echo "variables vacias";
	}


?>

