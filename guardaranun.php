<?

include("includes/conexion.php");
include("includes/header.php");

			$tit=$_POST["tit"];
            $des=$_POST["des"];
            $img=$_FILES["archivo"]["name"];
            

	if($tit!="" and $des!="" and $img!="" ){
		$ruta= "img/varias/";
			if($_FILES["archivo"]["error"]==0){;
				if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$ruta.$img)){
				$sql="INSERT INTO  `kalmap`.`anupor` (`tit` ,`des` ,`img`)
					  VALUES ('$tit',  '$des',  '$img')";
				$res=mysqli_query($link,$sql);	
				header("Location:conun.php?a=2");
			}		
			}
	}else{
		echo "variables vacias";
	}
			
include("includes/footer.php");
?>

