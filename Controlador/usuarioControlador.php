<?php

class UsuarioControlador{

	private $modelo;

	function __construct()
	{
		require('Modelo/usuarioModelo.php');
		$this->modelo = new UsuarioModelo();
	}

	function run()
	{
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

	function insertar()
	{
		require('/funciones.php');

		$validar = new validar();
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$nivelAcceso =  $validar->validarTexto($_REQUEST['nivelUsuario']);
		$password = $validar-> validarPassword($_REQUEST['password']);
		$telefono = $validar->validarTelefono($_REQUEST['telefono']);

		//$contactos = array();
		$resultado = $this->modelo->insertar($nombre,$tipo,$password,$telefono);

		//$contactos = $this->modelo->leerCsv();

		if ($resultado)
		{
			//var_dump($contactos);
			die ('por fin llegue');
			require('/Vista/usuarioInsertado.html');
		}
		else
		{
			require('/Vista/Error.html');
		}
	}

	function modificar($usuarioId)
	{
		require('/funciones.php');

		$validar = new validar();

		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$nivelAcceso =  $validar->validarTexto($_REQUEST['nivelUsuario']);
		$password = $validar-> validarPassword($_REQUEST['password']);

		$resultado = $this->modelo->modificar($usuarioId,$nivelAcceso, $password);

		if ($resultado)
		{
			echo('hice algo');
		}
		else
		{
			echo('vali madre');
		}
	}

	function eliminar($usuarioId){

	}
}

?>