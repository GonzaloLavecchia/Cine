<?php

class Comprado extends Model{


public function InsertarPago($usuario,$forma_pago,$total){

 if(!ctype_digit($usuario)) throw Exception;
  if($usuario < 1) throw Exception; 
	  if(!ctype_digit($forma_pago)) throw Exception;
	   if($forma_pago < 1 || $forma_pago > 3) throw Exception; 
	   if(!ctype_digit($total)) throw Exception;
	    if($total < 1) throw Exception; 

$this->db->query("INSERT into pagos(id_cliente , id_forma_pago , total , fecha)
	                     values    ($usuario, $forma_pago , $total , NOW())");




}


public function BloquearAsientos($usuario, $asientos, $funcion) {

	// $asientos tiene que ser un array con números (de asiento)
//var_dump($asientos);
//var_dump($usuario);
//var_dump($funcion);
	 if(!ctype_digit($usuario)) throw Exception;
	  if(!ctype_digit($asientos)) throw Exception; 
	   if(!ctype_digit($funcion)) throw Exception;


	foreach($asientos as $a) {
	
		$this->db->query("INSERT into reservas_asientos(id_funcion , asiento , id_cliente)
		                         values  ($funcion , $a , $usuario ) ");
	
	
	}



}



}
