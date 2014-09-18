<?php

class UsuarioModelo{
	private $nombre;
	private $tipo;
	private $email;
	private $password;

	function insertar($nombre,$tipo,$email,$password){
		$this->tipo = $tipo;
		$this->nombre = $nombre;
		$this->email = $email;
		$this->password = $password;

		return TRUE;

	}
}


?>