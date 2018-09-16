<!DOCTYPE html>
<!-- html/ListaPeliculas.php -->
<html>
<head>
	<title>Cartelera</title>
	<style type="text/css">
		table{text-align: center;
		      border-color: crimson;}
       #color{background-color: lightblue ;}
       #color2{background: 	aquamarine;}
       html{background-image: url("imagenes/la-foto.jpg"); }
       #titulo{color: lime;}
       #contenedor{color: plum;}

       #caja {
	 border-radius: 10px;
	 
	 width: 1170px;
	 height: 40px;
	 margin-left: 15px;
	 margin-right: 15px;
	 margin-top: 5px;
	 margin-bottom: 5px;
	 position: relative;
	 line-height: 40px;
	 bottom: -10px;
}


.footer .png {
			width: 20px;
			height: 20px;
			vertical-align: middle;
			}

			#caja p {margin:0px;
		color: white;
		font-family: Arial, Helvetica, sans-serif;
		float: left;
		vertical-align: middle;
		position: absolute;
		left: 555px
		}

		#cerrarsesion{
  	color: beige;
  	font-weight: bold;
  }  

	</style>
</head>
<body>
<center>
<?php// $usuario = $_GET['u']; ?>
<div id="contenedor">
Logueado como: 
<?php 
$usuario=$_SESSION['username'];
echo $usuario; ?>
</div>
<a id="cerrarsesion" href="logout"> Cerrar sesion</a>
<h1 id="titulo">Elija una Pelicula:</h1>
<br/>
<br/>
<table border="2">
<tr>
<td id="color"> Titulo </td>
<td id="color"> Genero</td>
<td id="color"> Clasificacion</td>
</tr>
<?php foreach($this->peliculas as $e){?>
<tr>
	<td id="color2"><?=$e['titulo']?></td>
	<td id="color2"><?=$e['genero']?></td>
	<td id="color2"><?=$e['clasificacion']?></td>
	<td id="color2"><a href="funciones-<?=$e['id_pelicula']?>">COMPRAR ENTRADA</a></td>
</tr>
<?php   } ?>
</table>
    <div class="footer">
	<div id="caja">
				
				<p>0800-333-3333</p>
				<br/>
				<div id="social">
				<a href="http://www.facebook.com"><img class="png" src="imagenes/face.png" alt="face"/></a>
				<a href="http://www.twitter.com"><img class="png" src="imagenes/twitter.png" alt="twitter"/></a>
				<a href="http://plus.google.com"><img class="png" src="imagenes/googlemas.png" alt="google+"/></a>
				<a href="http://www.youtube.com"><img class="png" src="imagenes/youtube.png" alt="youtube"/></a>
				</div>
				</div>
</center>
</body>
</html>