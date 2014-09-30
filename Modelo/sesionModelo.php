<?php

class sesionModelo{
  private $usuario;
  private $password;
  private $sesionId;

	function iniciarSesion($usuario,$password){
		$this->usuario = $usuario;
		$this->password = $password;
		$this->email = $email;

		return TRUE;
	}

	function cerrarSesion($sesionId){

	}
}

?>