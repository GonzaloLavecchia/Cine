<!DOCTYPE html>
<html>
<head>
	<title>Compra realizada</title>
	<style type="text/css">
		html{background-image: url("imagenes/la-foto.jpg"); }
		#titulo{color: lime;}
		 #link{color: beige;
		 font-weight:bold;}
		 #contenedor{color: plum;}


#cerrarsesion{
  	color: beige;
  	font-weight: bold;
  }  
	</style>
</head>
<body>
<center>
<div id="contenedor">
Logueado como:  
<?php  $usuario = $_SESSION['username'];
echo $usuario;
      $asiento = $_POST['asiento'];
//var_dump($asiento); ?> 
</div> 
<a id="cerrarsesion" href="logout"> Cerrar sesion</a>
<h1 id="titulo"> Su compra ha sido realizada con exito, gracias por su compra.<h1>
<a id="link" href="peliculas">Volver</a> 

</center>
</body>
</html>