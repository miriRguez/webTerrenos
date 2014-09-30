<?php

class UsuarioModelo{
	private $nombre;
	private $nivelAcceso;
	private $password;
	private $usuarioId;
	private $telefono;
	private $email;


	function insertar($nombre,$nivelAcceso,$password,$telefono,$email){
		$this->nivelAcceso = $nivelAcceso;
		$this->nombre = $nombre;
		//$this->usuarioId = $usuarioId;
		$this->password = $password;
		$this->telefono = $telefono;
		$this->email = $email;

		return TRUE;

	}

	function modificar($usuarioId){

	}

	function eliminar($usuarioId){

	}
}


?>