<!DOCTYPE html>
<html>
<head>
	<title>Asientos</title>
  <style type="text/css">
    html{background-image: url("imagenes/la-foto.jpg"); }
   #titulo{color: lime;}
   #color{background:  aquamarine;}
   table{border-color: crimson;}
    #link{color: beige;
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
echo $usuario; ?>
</div>
<a id="cerrarsesion" href="logout"> Cerrar sesion</a>
<h1 id="titulo">Elija asientos</h1>
<form action="pagos" method="post">
<table border="2">
<?php  foreach ($this->asientos as $c ) {
	       
  echo "<tr>";

  for($numero=1 ; $numero<=$c['cantidad_asientos'] ; ) {
    if($numero - 11==0)
      echo "</tr><tr>";
    $encontrado=0;
      foreach($this->asientosVendidos as $s){
        if($numero<=$c['cantidad_asientos']){
          if($s['asiento']==$numero) { 
            echo '<td id="color"><input type="checkbox" disabled name="valor[]" value="'.$numero.'">'.$numero.'</td>'; 
            $numero++ ;
            $encontrado=1;
            break;
          }
          }

        }
        if($encontrado==0){ echo '<td id="color"><input type="checkbox" name="valor[]" value="'.$numero.'">'.$numero.'</td>'; 
           $numero++;
            }
      }
    
     
    //echo '<td id="color"><input type="checkbox" name="valor[]" value="'.$numero.'">'.$numero.'</td>'; 
     $numero++;
    

  }

  ?>

 
       
	</tr>


</table>
<button><a  href="<?=$_SERVER['HTTP_REFERER']?>">Volver</a></button>
<input type="hidden" name="funcion" value="<?=$this->funcion?>" />
<input type="submit" value="Continuar">
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



