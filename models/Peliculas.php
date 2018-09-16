<?php

  //models/Peliculas.php
/**
*Clase para la administracion de peliculas
*/
  class Peliculas extends Model {
/**
*get todas las peliculas
*
*get todas las peliculas de la base de datos
*
*@return void
*/    
      public function getTodos(){
      	$this->db->query("SELECT * from peliculas");
      	return $this->db->fetchAll();
      }


  }