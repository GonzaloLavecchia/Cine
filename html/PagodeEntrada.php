<!DOCTYPE html>
<html>
<head>
	<title>Pagos</title>
	<style type="text/css">
		html{background-image: url("imagenes/la-foto.jpg"); }
		#titulo{color: lime;}
   #color{background:  aquamarine;}
   #color2{background: 	aquamarine;}
   table{border-color: crimson;}
    #link{color: beige;
    font-weight:bold;}
     #contenedor{color: black;
     	         font-weight:bold;}
               #contenedor2{color: plum;}

     #parrafo{color: black;
      font-weight:bold;}

      #cerrarsesion{
    color: beige;
    font-weight: bold;
  }  
	</style>
</head>
<body>
<center>
<div id="contenedor2"> 
Logueado como:  
<?php  $usuario = $_SESSION['username'];
echo $usuario;
      $funcion = $_POST['funcion']; 
      $valores = $_POST['valor']; 
      //var_dump($valores); ?>
</div>
<a id="cerrarsesion" href="logout"> Cerrar sesion</a>
<table border="1">
<form action="compra_realizada" method="post">
<h1 id="titulo">Detalle de Compra</h1>
<br/>
<br/>
<td id="color"> Titulo </td>
<td id="color"> Horario </td>
<td id="color"> Sala </td>
 <?php foreach($this->pagos as $p){?>
<tr>
	<td id="color2"><?=$p['titulo']?></td>
	<td id="color2"><?=$p['horario']?></td>
	<td id="color2"><?=$p['nombre_sala']?></td>
</tr>


</table>
<div id="contenedor">
Entradas: <?php $cantidad=count($_POST['valor']);
                echo $cantidad; ?>
<br/>
Total: $ <?php $monto=$cantidad * $p['precio'];
               echo $monto; ?>
</div>
<br/>
<p id="parrafo">Elija una forma de pago:</p>
<select name="forma_pago">
<?php foreach($this->forma_pagos as $fp){?>
	<option value="<?=$fp['id_forma_pago']?>"><?=$fp['tipo_pago']?></option>
<?php }} ?>
</select>
<input type="hidden" name="funcion" value="<?=$this->funcion?>" />
<input type="hidden" name="cantidad" value="<?=$cantidad?>" />
<input type="hidden" name="total" value="<?=$monto?>" />
<?php foreach ($valores as $v )  { //var_dump($v);?>
<input type="hidden" name="asiento[]" value="<?= $v ?>" />
<?php } ?>
<input type="submit" value="Comprar">
</form>
</table>
</body>
</html>