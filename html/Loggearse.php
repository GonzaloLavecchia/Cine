<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		table{text-align: center;
		      border-color: crimson;}
       #color{background-color: lightblue ;}
       #color2{background: 	aquamarine;}
       html{background-image: url("imagenes/la-foto.jpg"); }
       #titulo{color: lime;}
       #contenedor{color: plum;}
       #parrafo{color: black;
      font-weight:bold;}

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

a{text-decoration:none; 
color: black;}

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

	</style>
</head>
<body>
<center>
<h1 id="titulo">Log-In</h1>
<form action="login" method="post">
<p id="parrafo">Usuario: </p>    <input type="text" name="username">
<br/>
<p id="parrafo">Contraseña: </p> <input type="password" name="password">
<br/>
<button><a href="signup">Registrarse</a></button>	
<input type="submit" value="Ingresar">

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