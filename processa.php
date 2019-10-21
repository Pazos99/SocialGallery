<!DOCTYPE html>
<html>
<head>
	<title>Formularis</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">		
</head>
<body>
	<h1>Subida de la imagen</h1>	
	<?php
	$nom = $_REQUEST['nom']; //Obtenim el nom introduït
	//echo "Hey " .$_REQUEST['nom']."<br>"; //Mostrem una salutació
	//echo "Configurado? " .isset($_POST['nom'])."<br>";

	//echo "Nombre del archivo: " .$_FILES["imagen"]["name"]."<br>"; //El nombre original del fichero en la máquina del cliente.
	//echo "Tipo del archivo: " .$_FILES["imagen"]["type"]."<br>";
	//echo "Tamaño del archivo: " .$_FILES["imagen"]["size"]."<br>";
	//echo "Archivo temporal: " .$_FILES["imagen"]["tmp_name"]."<br>"; //El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.
	
	//https://www.php.net/manual/es/features.file-upload.post-method.php

	$ruta_fichero_origen = ($_FILES["imagen"]["tmp_name"]);
	$nombrefoto=$_REQUEST['nom'];
	$nombrearchivo=$_FILES["imagen"]["name"];
	$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');

	include "conecta.php";
	$ruta_indexphp = dirname(realpath(__FILE__));
	$ruta_fichero_origen = $_FILES['imagen']['tmp_name'];
	$ruta_nuevo_destino = "Imagenes/".$_FILES["imagen"]["name"];
	if ( in_array($_FILES['imagen']['type'], $extensiones) ) {
	     
		if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
           echo 'Fichero guardado con éxito'."<br>";
           mysqli_query($conn, "INSERT INTO tbl_imagenes (nombre_Img,titulo_Img,fecha_Img) VALUES ('$nombrefoto','$nombrearchivo',CURDATE())");

		   echo "<img src='Imagenes/".$nombrearchivo."'>";

		   
      	}
	     
	}


	?>
</body>
</html>