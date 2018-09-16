<?php

//controllers/detallepelicula.php


require '../fw/fw.php';
require '../models/Funciones.php';
require '../views/DetallePelicula.php';
require '../models/Peliculas.php';

//$usuario = $_GET['u'];

if(!isset($_GET['p'])) die("error");

$d = new DetallePelicula;
$d->funciones = (new Funciones)->getFuncionesPorPelicula($_GET['p']);
$d->render();


