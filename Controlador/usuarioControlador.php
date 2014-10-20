<?php

require('controladorStandar.php');
class UsuarioControlador  extends controladorStandar{

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
		require('funciones.php');

		//Valido que los datos esten limpios y con el formato que les corresponde

		$validar = new validar();
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		if (isset($_REQUEST['nivelAcceso'])) {
			$nivelAcceso =  $validar->validarNumero($_REQUEST['nivelAcceso']);
		}else{
			$nivelAcceso = '0';
		}


		$password = $validar-> validarCadena($_REQUEST['password']);
		//$telefono = $validar->validarTelefono($_REQUEST['telefono']);
		$usuarioEmail = $validar->validarEmail($_REQUEST['usuarioEmail']);
		//$contactos = array();
		$resultado = $this->modelo->insertar($nombre,$password,$usuarioEmail,$nivelAcceso);

		//$contactos = $this->modelo->leerCsv();

		if ($resultado)
		{
			//si fue correctamente insertado lo llevo a una vista de usuario insertado
			//y le enviamos un correo para darle la  bienvenida
			require('correo.php');
			$asunto = 'Confirmacion de registro';
			$cuerpo = 'Saludos '.$nombre.', este correro es para confirmar tu registro en nuestra pagina,
						agradecemos tu preferencia';
			$correo = new Correo($usuarioEmail, $asunto, $cuerpo);
			$correo->send();
			header('Location:Vista/usuarioInsertado.html');
		}
		else
		{
			header('Location:Vista/Error.html');
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