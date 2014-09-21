<?php

class predioControlador{
  private $modelo;

	function __construct(){
		require('Modelo/predioModelo.php');
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
		require('/funciones.php');
		$validar = new validar();
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$municipio = $validar->validarNombre($_REQUEST['municipio']);
		$colonia = $validar->validarNombre($_REQUEST['colonia']);

		$resaultado = $this->modelo->insertar($nombre,$municipio ,$colonia );

		if ($resultado) {
			require('/Vista/predioInsertado.html');
		}else{
			require('/Vsita/Error.html');
		}

	}

	function modificar($idPredio){

	}

	function eliminar($idPredio){

	}
}



?>