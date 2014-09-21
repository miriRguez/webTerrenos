<?php

class sesionModelo{
  private $usuario;
  private $password;
  private $sesionId;

	function iniciarSesion($usuario,$password){
		$this->usuario = $usuario;
		$this->password = $password;

		return TRUE;
	}

	function cerrarSesion($sesionId){

	}
}

?>