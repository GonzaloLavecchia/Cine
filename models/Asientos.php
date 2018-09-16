<?php
/**
*Clase para administrar los asientos de una sala
*/
class Asientos extends Model{
/**
*get cantidad total de asientos
*
*get cantidad total de asientos segun funcion elegida 
*
*@param int $funcion
*@return void
*/
  public function getCantidadAsientosPorFuncion($funcion) {

       if(!ctype_digit($funcion)) throw Exception;
        if($funcion < 1) throw Exception; 

       $this->db->query("SELECT cantidad_asientos 
            from salas s
            join funciones f on s.id_sala=f.id_sala
                     WHERE id_funcion =".$funcion);
    return $this->db->fetchAll();
  }
/**
*get asientos vendidos
*
*get asientos vendidos segun funcion elegida
*@param int $funcion
*@return array
*/
  public function getAsientosVendidosPorFuncion($funcion) {
       if(!ctype_digit($funcion)) throw Exception;
         $this->db->query("SELECT asiento 
            from reservas_asientos
            where id_funcion=".$funcion);
              return $this->db->fetchAll();
       
  	
  }

  /**
*inserta los asientos comprados
*
*inserta $username , $asientos , $funcion en la tabla reservas_asientos
*
*@param string $username
*@param int $asientos
*@param int $funcion
*@return void
*/
public function BloquearAsientos($username, $asientos, $funcion) {

  // $asientos tiene que ser un array con números (de asiento)

   
    //if(!ctype_digit($asientos)) throw Exception; 
     if(!ctype_digit($funcion)) throw Exception;


  foreach($asientos as $a) {
  
    $this->db->query("INSERT into reservas_asientos(id_funcion , asiento , username)
                             values  ($funcion , $a , '$username' ) ");
  
  
  }



}

}