<?php

//controller/pagos.php

require '../fw/fw.php';
require '../models/Pagos.php';
require '../views/PagodeEntrada.php';


//var_dump($_POST);
/*$usuario = $_POST['usuario']; 
      $funcion = $_POST['funcion']; 
      $valores = $_POST['valor'];*/

      if(!isset($_POST['valor'])) die("error");

$p = new PagodeEntrada;
$p->funcion = $_POST['funcion'];
$p->pagos = (new Pagos)->getDetallesCompra($_POST['funcion']);
$p->forma_pagos = (new Pagos)->getFormaPago();
$p->render();