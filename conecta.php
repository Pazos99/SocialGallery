<?php

	//Variables para la conexión con la base de datos
	$ip="localhost";
	$login="root";
	$password="";
	$db_name="bd_socialgallery";

	//Conexión con la base de datos
	$conn=mysqli_connect ($ip,$login,$password,$db_name) or die();

	

?>