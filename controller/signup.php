<?php

// controllers/signup.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/SignUp.php';


	 if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['contrasenia']) && isset($_POST['contrasenia2'])) {
         if((new Clientes)->existe($_POST['usuario'])==1) die("Usuario Existente");
	 	(new Clientes)->alta($_POST['apellido'] , $_POST['nombre'] , $_POST['usuario'], $_POST['contrasenia'], $_POST['contrasenia2'] );
          header('Location: ./login');
	}
	$v = new SignUp;
	$v->render();
