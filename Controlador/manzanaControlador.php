<?php

class manzanaControlador{

	private $modelo;

	function __construct(){
		require('Modelo/manzanaModelo.php');
		require('config.inc');
		$this->bd_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAM);

		if ($this->bd_driver->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}



		$this->modelo = new manzanaModelo();
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
		$numero = $validar->validarNumero($_REQUEST['numero']);
		$idPredio = $validar->validarNumero($_REQUEST['idPredio']);
	//hacemo la validacion de que exista el id del predio

		$resultado = $this->modelo->insertar($numero,$idPredio);

		if ($resultado) {
			$query = "INSERT INTO `Manzana`(`manzanaId`, `numero`, `predioId`) VALUES (1,'$numero','$idPredio')";
			$result = $this->bd_driver->query($query);

			if ($this->bd_driver->error) {
				require('Vista/Error.html');
			}else{
				require('Vista/manzanaInsertada.html');
			}

		}else{
			require('Vista/Error.html');
		}
	}

		function modificar($idManzana){

		}

		function eliminar($idManzana){

		}


}

?>