<!DOCTYPE html>
<html>
<head>
	<title>Formularis</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">		
</head>
<body>
	<h1>Subida de la imagen</h1>	
	<?php
	session_start();
	$nom = $_REQUEST['nom']; //Obtenim el nom introduït
	$ruta_fichero_origen = ($_FILES["imagen"]["tmp_name"]);
	$nombrefoto=$_REQUEST['nom'];
	$nombrearchivo=$_FILES["imagen"]["name"];
	$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
	$id=$_SESSION['nombre'];

	$idConsulta="SELECT tbl_usuarios.id_usuarios FROM tbl_usuarios, tbl_imagenes WHERE tbl_usuarios.id_usuarios LIKE tbl_imagenes.id_usuarios AND tbl_usuarios.nombre_usuario='$id' ORDER BY tbl_imagenes.fecha_Img DESC";

	include "conecta.php";
	$ruta_indexphp = dirname(realpath(__FILE__));
	$ruta_fichero_origen = $_FILES['imagen']['tmp_name'];
	$ruta_nuevo_destino = "Imagenes/".$_FILES["imagen"]["name"];
	if ( in_array($_FILES['imagen']['type'], $extensiones) ) {
	     
		if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
           echo 'Fichero guardado con éxito'."<br>";
           $qry_res=mysqli_query($conn,$idConsulta);
			$reg=mysqli_fetch_array($qry_res);
				$user=$reg['id_usuarios'];
           mysqli_query($conn, "INSERT INTO tbl_imagenes (nombre_Img,titulo_Img,fecha_Img,id_usuarios) VALUES ('$nombrefoto','$nombrearchivo',CURDATE(),'$user')");

		   echo "<img src='Imagenes/".$nombrearchivo."'>";

		   
      	}
	     
	}


	?>
</body>
</html>