<?php
/**
*Clase para administrar los pagos de los clientes
*/
class Pagos extends Model{
/**
*get detalles de compra segun funcion elegida
*
*get titulo , horario , nombre de sala y precio de la funcion elegida por el usuario
*
*@param int $funcion
*@return void 
*/
public function getDetallesCompra($funcion){


         if(!ctype_digit($funcion)) throw Exception;
          if($funcion < 1) throw Exception; 

       $this->db->query("SELECT titulo , horario , nombre_sala , precio
						from funciones f
						join salas s on f.id_sala=s.id_sala
  		                join peliculas p on p.id_pelicula=f.id_pelicula
  		                where id_funcion =".$funcion);
  	return $this->db->fetchAll();

}
/**
*get forma de pago
*
*get tipo de pago (efectivo, tarjeta de credito o tarjeta de debito)
*
*@return void
*/
public function getFormaPago(){


         

       $this->db->query("SELECT  tipo_pago , id_forma_pago
       	                 from forma_pagos");
  	return $this->db->fetchAll();

}

/**
*inserta un nuevo pago en la base de datos
*
*inserta $username , $forma_pago , $total y fecha actual del pago en la tabla pagos
*
*@param string $username
*@param int $forma_pago
*@param int $total  
*@return void
*/
public function InsertarPago($username,$forma_pago,$total){

  
    if(!ctype_digit($forma_pago)) throw Exception;
     if($forma_pago < 1 || $forma_pago > 3) throw Exception; 
     if(!ctype_digit($total)) throw Exception;
      if($total < 1) throw Exception; 

$this->db->query("INSERT into pagos(username , id_forma_pago , total , fecha)
                       values    ('$username', $forma_pago , $total , NOW())");




}


}