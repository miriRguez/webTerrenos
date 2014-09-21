<?php

class predioModelo{

	private $idPredio;
	private $nombre;
	private $municipio;
	private $colonia;

	function insertar($nombre,$municipio,$colonia){
		$this->nombre = $nombre;
		$this->municipio = $municipio;
		$this->colonia = $colonia;

		return TRUE;
	}

	function modificar($idPredio){

	}

	function eliminar($idPredio){

	}
}

?>