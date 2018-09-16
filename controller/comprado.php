<?php

//controller/pagos.php

require '../fw/fw.php';
require '../models/Pagos.php';
require '../models/Asientos.php';
require '../views/CompraRealizada.php';


//var_dump($_POST['valor[]']);
//$usuario = $_POST['usuario']; 
//$asiento = $_POST['asiento'];

 if(!isset($_SESSION['username'])) die("error");
  if(!isset($_POST['forma_pago'])) die("error");
   if(!isset($_POST['total'])) die("error");
    if(!isset($_POST['asiento'])) die("error");
     if(!isset($_POST['funcion'])) die("error");

$r = new CompraRealizada;
$r->funcion = $_POST['funcion'];
$r->comprarealizada = (new Pagos)->InsertarPago($_SESSION['username'],$_POST['forma_pago'],$_POST['total']);
$r->bloquearasientos = (new Asientos)->BloquearAsientos($_SESSION['username'], $_POST['asiento'], $_POST['funcion']);
$r->render();