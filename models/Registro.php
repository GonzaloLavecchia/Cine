<?php

Class Registro extends Model {

public function alta($apellido , $nombre , $usuario, $contrasenia, $contrasenia2) {
		$this->validateUsername($usuario);
		$this->validatePassword($contrasenia, $contrasenia2);
		$this->db->query("INSERT into clientes
			(apellido, nombre, username , password)
			values
			('$apellido' , '$nombre', '$usuario' , '$contrasenia')");
	}

	private function validateUsername($usuario){
		if(!isset($usuario)) throw new Exception("Invalid credentials", 1);		
		$usuario = $this->db->escape($usuario);
		$this->db->query("SELECT username 
			from clientes 
			where username = '$usuario'");
		     return $this->db->fetchAll();
		
		
		}


		private function validatePassword($contrasenia, $contrasenia2=null){
		if(!isset($contrasenia)) throw new Exception("Invalid credentials", 1);
		if ($contrasenia2 != null) {
			if($contrasenia != $contrasenia2) throw new Exception("Password not match", 1);
			$contrasenia = $this->db->escape($contrasenia);
		}
	}
	}



