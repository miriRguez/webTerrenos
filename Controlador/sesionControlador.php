<?php

require('controladorStandar.php');

class sesionControlador extends controladorStandar{
  private $modelo;


	function __construct(){
		require('Modelo/sesionModelo.php');
		$this->modelo = new sesionModelo();

		if (!isset($_REQUEST['accion'])) {
			header('Location:Vista/login.html');

		}
	}



	function run(){
		switch ($_REQUEST['accion']) {
			case 'iniciar':
				if (!$this->estaLogeado()) {
					$this->iniciarSesion();
				}

				break;
			case 'cerrar':
					echo "entra!!!";

					if ($this->estaLogeado()) {

						$this->cerrarSesion();
					}
				break;
			default:
				require('/Vista/Error.html');
		} // switch

	}

	function iniciarSesion(){
		require('funciones.php');
		$validar = new validar();
		//require('Vista/login.html');

		$usuarioEmail = $validar->validarEmail($_REQUEST['usuarioEmail']);
		$password = $validar-> validarCadena($_REQUEST['password']);

		$resutado = $this->modelo->iniciarSesion($usuarioEmail,$password);

		if ($resutado) {
			$_SESSION['sessionID'] = $usuarioEmail;
			header('Location:Vista/index.html');
		}else{
			header('Location:Vista/Error.html');
		}
	}

	function cerrar(){
		if(!isset($_SESSION['usuarioEmail']))
		{
			die("No hay ninguna sesion iniciada");
			//esto ocurre cuando la sesion caduca.

		}
		else
		{
			$terminar = $this-$this->modelo->cerrarSesion();
       		if ($terminar) {
       			echo("entra!!!");
       			header('Location:Vista/index.html');

       		}
		}
	}
}

?>