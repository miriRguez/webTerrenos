<?php

class UsuarioControlador{

	private $modelo;
	public $mysqli;

	function __construct(){
		require('Modelo/usuarioModelo.php');
		require('configuracion.inc');

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAM);

		if ($mysqli->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}

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
		$email = $validar->validarEmail($_REQUEST['email']);

		$resultado = $this->modelo->insertar($nombre,$nivelAcceso,$password,$telefono,$email);

		if ($resultado)
		{
		//	$query = "INSERT INTO Lote (niveldeacceso,contrasena) VALUES ('$i', '$pk_predio', '$pk_manzana')";
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