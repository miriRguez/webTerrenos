<?php

class telefonoControlador{
  private $modelo;

	function __construct(){
		require('Modelo/telefonoModelo.php');
		$this->modelo = new telefonoModelo();
	}



	function run(){
		switch ($_REQUEST['accion']) {
			case 'agregar':
				$this->agregar();

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

	function agregar(){
		require('/funciones.php');
		$validar = new validar();

		$telefono = $validar->validarTelefono($_REQUEST['telefono']);
		$tipo = $validar-> validarCadena($_REQUEST['tipo']);
		$clienteId = $validar->validarNumero($_REQUEST['clienteId']);
		$empleadoId = $validar->validarNumero($_REQUEST['empleadoID']);
		//valida ya sea el id del cliente o el empeado si es correcto
		//se hace el registro del telefono

		$resultado = $this->modelo->agregar($telefono,$tipo ,$clienteId ,$empleadoId );
		if ($resultado) {
			$query = "INSERT INTO `Telefono`(`telefono`, `tipo`, `clienteId`, `empleadoId`)
								 VALUES ('$telefono','$tipo','$clienteId','$empleadoId')";
			$result = $this->bd_driver->query($query);
				require('Vista/telefonoAgregado.html');
		}else{
				require('/Vista/Error.html');
		}
	}

	function modificar($idCliente){

	}

	function eliminar($idCliente){

	}



}

?>