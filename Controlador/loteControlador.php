<?php

class loteControlador{

	private $modelo;

	function __construct(){
		require('Modelo/loteModelo.php');
		$this->modelo = new loteModelo();
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
		$colindanciaSur = $validar->validarCadena($_REQUEST['colindanciaSur']);
		$colindanciaNorte = $validar->validarCadena($_REQUEST['colindanciaNorte']);
		$colindanciaEste = $validar->validarCadena($_REQUEST['colindanciaEste']);
		$colindanciaOste = $validar->validarCadena($_REQUEST['colindanciaOeste']);
		$medidaSur = $validar->validarNumero($_REQUEST['medidaSur']);
		$medidaNorte = $validar->validarNumero($_REQUEST['medidaNorte']);
		$medidaOeste = $validar->validarNumero($_REQUEST['medidaOeste']);
		$medidaEste = $validar->validarNumero($_REQUEST['medidaEste']);
		//validamos el id de la manzana

		$respuesta = $this->modelo->insertar($colindanciaSur,$colindanciaNorte,$colindanciaEste,$colindanciaOeste,
											$medidaSur,$medidaNorte,$medidaEste,$medidaOeste,$idManzana);

		if ($respuesta) {
			require('/Vista/loteInsertado.html');
		}else{
			require('/Vsita/Error.html');
		}
	}

	function modificar($idLote){

	}

	function eliminar($idLote){

	}


}

?>