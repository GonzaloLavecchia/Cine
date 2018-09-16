<?php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/Loggearse.php';



if(isset($_POST['username'])){
	if(isset($_POST['password']));
	$userData = (new Clientes)->log($_POST['username'], $_POST['password']);

	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $userData['username'];
	header('Location: ./peliculas');
} else {
	$v = new Loggearse;
	$v->render();
}
