<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>
	<style type="text/css">
		html{background-image: url("imagenes/la-foto.jpg"); }
		#titulo{color: lime;}
		#link{color: beige;
		font-weight:bold;}
		#label{color: lightblue;
		font-weight:bold;}
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
a{text-decoration:none; 
color: black;}

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
<?php $usuario = $_SESSION['username'];
echo $usuario ;?>
</div>
<a id="cerrarsesion" href="logout"> Cerrar sesion</a>
<h1 id="titulo"> Elija una Funcion </h1>
<form action="asientos" method="post">
<?php foreach($this->funciones as $d){?>
<label id="label" for="funcion"><?=$d['horario']?>  <?=$d['nombre_sala']?></label>
  <input type="radio" value="<?=$d['id_funcion']?>" name="funcion" id="funcion"  />
<?php   } ?>
<br/>
<br/>
<button><a  href="peliculas">Volver</a></button> 
<input type="submit"  value="Siguiente">
</form>
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