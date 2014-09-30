<?php

class predioControlador{
	private $modelo;
	public $bd_driver;

	function __construct(){
		require('Modelo/predioModelo.php');
		require('config.inc');
		$this->bd_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAM);

		if ($this->bd_driver->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}

		$this->modelo = new predioModelo();
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
		require('funciones.php');
		$validar = new validar();
		$idPredio = $validar->validarNumero($_REQUEST['idPredio']);
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$municipio = $validar->validarNombre($_REQUEST['municipio']);
		$colonia = $validar->validarNombre($_REQUEST['colonia']);

		$resultado = $this->modelo->insertar($idPredio,$nombre,$municipio ,$colonia);
		if ($resultado) {
			$query = "INSERT INTO `Predio`(`predioId`, `nombre`, `municipio`, `colonia`) VALUES ('$idPredio','$nombre','$municipio' ,'$colonia')";
			$result = $this->bd_driver->query($query);

			if ($this->bd_driver->error) {
				echo "eror query";
				require('Vista/Error.html');
			}else{
				require('Vista/predioInsertado.html');
			}

		}else{
			echo "error en datos";
			require('Vista/Error.html');
		}

	}

	function modificar($idPredio){

	}

	function eliminar($idPredio){

	}
}



?>