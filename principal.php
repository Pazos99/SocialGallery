<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Social Gallery</title>

<style type="text/css">

#filtro {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	font-family: mv boli;
}

#busqueda {
	position: absolute;
	width: 80%;
	height: auto;
	z-index: 5;
	left: 10%;
	top: 10%;
	background-color:red;
}

#resultados {
	position: absolute;
	width: 100%;
	height: 1000px;
	z-index: 5;
	left: 0px;
	top: 200px;
}

#pack {
	position: relative;
	width: 50%;
	height: 30%;
	z-index: 6;
	left: 0px;
	top: 0px;
	/*border: 2px solid red;*/
}

#foto {
	position: absolute;
	display:block;
	width: 30%;
	height: 100%;
	z-index: 6;
	left: 1px;
	top: 1px;
}

#foto img {
	width: 100%;
	height: auto;
	max-height: 100%;
	background-color: white;
}

#titulo {
	position: absolute;
	width: 60%;
	height: 32px;
	z-index: 6;
	left: 32%;
	top: 3px;
}

#titulo > p {
	font-size: 1.5vw;
	margin-top: 0px;
	font-family: mv boli;
}

label {
	font-family: mv boli;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<div id="busqueda">

<!-- ____________________________________________________________________________________________________________________________ -->

<div id="filtro">
	



<form action="processa.php" method="POST" name="formulario" enctype="multipart/form-data">
	<h1 style="font-family: mv boli">Formulario</h1>
		<br>
		<!--Campo Nombre-->
	<LABEL>Nombre</LABEL>
		<input type="text" placeholder="Nom..." name="nom" required="">
		<br>
		<!--Campo Archivo-->	
		<LABEL>Subir archivo</LABEL>	
		<input type="file" id="imagen" name="imagen" lang="es">	
		<br>
		<!--Boton enviar-->		
		<input type="submit" class="btn btn-primary" value="Enviar" >
	</form>


</div>

<!-- ____________________________________________________________________________________________________________________________ -->


<div id="resultados">


<?php

		include "conecta.php";
		//Consulta en la base de datos con los parámetros del filtro
		$txt_emp="SELECT * from tbl_imagenes";
		$qry_emp=mysqli_query($conn,$txt_emp);


		//Consulta en la base de datos con los parámetros del filtro
			$res="SELECT * FROM tbl_Imagenes;";
			$qry_res=mysqli_query($conn,$res);
			while($reg=mysqli_fetch_array($qry_res)){
				$img=$reg['titulo_Img'];
				$id_img=$reg['id_Img'];
				echo '<div id="pack">';
				echo "<div id='foto'><img src='Imagenes/".$img."'> </a> </div>";
				
  				echo '<div id="titulo"><p><b>';
				echo utf8_encode($reg["nombre_Img"])."    ";
				echo '</b></p></div>';

				echo '</div></br>';


			}
			
		?>
</div>

</div>
</body>
</html>
