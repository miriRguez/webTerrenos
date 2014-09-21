<?php

class UsuarioControlador{

	private $modelo;

	function __construct(){
		require('Modelo/usuarioModelo.php');
		$this->modelo = new UsuarioModelo();
	}


	function run(){
		switch ($_REQUEST['accion']) {
			case 'insertar':
				$this->insertar();

				break;

				case 'modificar':
					$this->modificar();
					break;
				case 'eliminar':
					$this->eliminar();
					break;


			default:
				break;
			;
		} // switch

	}

	function insertar(){
		require('/funciones.php');
		$validar = new validar();
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$nivelAcceso =  $validar->validarTexto($_REQUEST['nivelUsuario']);
		$password = $validar-> validarPassword($_REQUEST['password']);
		$telefono = $validar->validarTelefono($_REQUEST['telefono']);

		$resultado = $this->modelo->insertar($nombre,$tipo,$password,$telefono);

		if ($resultado)
		{
			require('/Vista/usuarioInsertado.html');
		}
		else
		{
			require('/Vista/Error.html');
		}

	}

	function modificar($usuarioId){

	}

	function eliminar($usuarioId){

	}
}

?>