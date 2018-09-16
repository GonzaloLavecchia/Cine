<?php 

Class Login extends Model {

public function log($username, $password){
		$this->validateUsername($username);
		$this->validatePassword($password); 
		
		$this->db->query("SELECT * FROM clientes WHERE username = '$username'");

		if ($this->db->numRows() == 1) {    
			$row = $this->db->fetch();
			if ($password == $row['password']) return ($row);
			else throw new Exception("Invalid password", 1);		
		}
		else { 
			throw new Exception("Invalid username", 1);
		} 
	}


	private function validateUsername(&$username){
		if(!isset($username)) throw new Exception("Invalid credentials", 1);		
		$username = $this->db->escape($username);
		$this->db->query("SELECT username 
			from clientes 
			where username = '$username'");
		$caller = debug_backtrace()[1]['function'];
		if($caller == "login" || $caller == "baja"){
			if($this->db->numRows()!=1) throw new Exception("Invalid user", 1);
		}
	}

	private function validatePassword(&$password, $retype=null){
		if(!isset($password)) throw new Exception("Invalid credentials", 1);
		if ($retype != null) {
			if($password != $retype) throw new Exception("Password not match", 1);
			$password = $this->db->escape($password);
		}
	}
}