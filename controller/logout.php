<?php

// controllers/logout.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/Loggearse.php';

	session_destroy();
     header("Location: ./login");
$v = new Loggearse;
$v->render();