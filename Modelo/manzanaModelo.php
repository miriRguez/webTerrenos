<?php

class manzanaModelo{

	private $idManzana;
	private $numero;
	private $idPredio;


	function insertar($numero,$idPredio){
		$this->numero = $numero;
		$this->idPredio = $idPredio;

		return TRUE;
	}

	function modificar($idManzana){

	}

	function eliminar($idManzana){

	}
}

?>