<?php
//funcion de conexion a la bbdd utilizando funciones de la libreria mysqli

function conexion($servidor,$usuario,$pass,$bbdd){
	if (!$link=mysqli_connect($servidor,$usuario, $pass)) {
		die(mysqli_error());  // Si falla (devuelve false), muestra el error
	}  



	if (!mysqli_select_db ($link,$bbdd)) {
		die (mysqli_error());
	}

	return $link;
}

$link=conexion("127.0.0.1","joel","joel","kalmap");

//si la conexion se ha producido de forma correcta
//en la variable $link se dispone del recurso que identifica la conexi�n con la bbdd.
//este recurso ser� el que utilicemos para cuestionar 'query' a la bbdd