<?php

  //controller/peliculas.php

 require '../fw/fw.php';
 require '../models/Peliculas.php';
 require '../views/ListaPeliculas.php';



//if(!isset($_GET['u'])) die("error");


 $e = new Peliculas;
 $todos = $e->getTodos();
 $v = new ListaPeliculas;
 $v->peliculas = $todos;
 //$v->usuario = (new Peliculas)->getUsuario($_GET['u']);
 $v->render();

 ?>