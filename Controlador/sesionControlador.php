<?php

class sesionControlador{
  private $modelo;

	function __construct(){
		require('Modelo/sesionModelo.php');
		$this->modelo = new sesionModelo();
	}

	function run(){
		switch ($_REQUEST['accion']) {
			case 'iniciar':
				$this->iniciarSesion();
				break;
			case 'cerrar':
				$this->cerrarSesion();
				break;
			default:
				require('/Vista/Error.html');
		} // switch

	}

	function iniciarSesion(){
		require('/funciones.php');
		$validar = new validar();

		$usuario = $validar->validarNombre($_REQUEST['usuario']);
		$password = $validar-> validarPassword($_REQUEST['password']);
		$email = $validar->validarEmail($_REQUEST['email']);

		$resutado = $this->modelo->iniciarSesion($usuario,$password,$email);

		if ($resutado) {
			session_start();
			require('Vista/inicioSesion.html');
		}else{
			require('/Vista/Error.html');
		}
	}

	function cerrarSesion($sesionId){
		session_destroy();
		require('Vista/sesionTerminada');
	}
}

?>