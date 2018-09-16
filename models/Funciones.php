<?php
/**
*Clase para la administracion de funciones
*/
class Funciones extends Model{
/**
*get funciones segun la pelicula que se haya elegido
*
*
*@param int $pelicula
*@return void
*/
  public function getFuncionesPorPelicula($pelicula){
  	
    if(!ctype_digit($pelicula)) throw Exception;
     if($pelicula < 1) throw Exception; 


    $this->db->query("SELECT nombre_sala,horario ,id_funcion 
						from funciones f
						join salas s on f.id_sala=s.id_sala
  		               WHERE id_pelicula =".$pelicula);
  	return $this->db->fetchAll();
  }   


  
  


}