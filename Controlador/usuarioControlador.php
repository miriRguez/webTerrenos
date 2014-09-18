<?php

class UsuarioControlador{

	private $modelo;

	function UsuarioControlador(){
		require('Modelo/usuarioModelo.php');
		$this->modelo = new UsuarioModelo();
	}


	function run(){
		switch ($_REQUEST['accion']) {
			case 'insertar':
				$this->insertar();

				break;
			default:
				break;
			;
		} // switch

	}

	function insertar(){
		require('/funciones.php');
		$validar = new validar();
		$nombre = $validar->validarTexto($_REQUEST['nombre']);
		$email = $validar->validarEmail($_REQUEST['email']);
		$tipo =  $validar->validarTexto($_REQUEST['tipo']);
		$password = $validar-> validarPassword($_REQUEST['password']);

		$resultado = $this->modelo->insertar($nombre,$tipo,$email,$password);

		if ($resultado)
		{
			require('/Vista/usuarioInsertado.html');
		}
		else
		{
			require('/Vista/Error.html');
		}

	}
}

?>