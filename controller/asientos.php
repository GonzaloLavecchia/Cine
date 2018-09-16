<?php

//controller/asientos.php

require '../fw/fw.php';
require '../models/Asientos.php';
require '../models/Funciones.php';
require '../views/SelecAsientos.php';



//var_dump($_POST);
//$usuario = $_POST['usuario'];

     if(!isset($_POST['funcion'])) die("error");

$s = new SelecAsientos;
$s->asientos = (new Asientos)->getCantidadAsientosPorFuncion($_POST['funcion']);
$s->asientosVendidos = (new Asientos)->getAsientosVendidosPorFuncion($_POST['funcion']);
$s->funcion = $_POST['funcion'];
$s->render();