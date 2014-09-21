<?php

class telefonoModelo{
  private $telefono;
  private $tipo;
  private $clienteId;
  private $empleadoId;

	function agregar($telefono,$tipo,$clienteId,$empleadoId){
		$this->telefono = $telefono;
		$this->tipo = $tipo;
		$this->clienteId = $clienteId;
		$this->empladoId = $empleadoId;

		return TRUE;
	}

	function modificar($idCliente){

	}

	function eliminar($idCliente){

	}

?>