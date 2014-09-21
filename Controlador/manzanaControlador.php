<?php

class manzanaControlador{

	private $modelo;

	function __construct(){
		require('Modelo/manzanaModelo.php');
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
		require('/funciones.php');
		$validar = new validar();
		$numero = $validar->validarNumero($_REQUEST['numero']);
	//hacemo la validacion de que exista el id del predio

		$resultado = $this->modelo->insertar($numero,$idPredio);

		if ($resultado) {
			require('/Vista/manzanaInsertada.html');
		}else{
				require('/Vista/Error.html');
		}
	}

		function modificar($idManzana){

		}

		function eliminar($idManzana){

		}


}

?>