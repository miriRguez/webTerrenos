<?php

class UsuarioModelo{
	private $nombre;
	private $nivelAcceso;
	private $password;
	private $usuarioId;
	private $telefono;


	function insertar($nombre,$nivelAcceso,$password,$telefono,$usuarioId){
		$this->nivelAcceso = $nivelAcceso;
		$this->nombre = $nombre;
		$this->usuarioId = $usuarioId;
		$this->password = $password;
		$this->telefono = $telefono;

		return TRUE;

	}

	function modificar($usuarioId){

	}

	function eliminar($usuarioId){

	}
}


?>