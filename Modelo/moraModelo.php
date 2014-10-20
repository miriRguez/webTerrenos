<?php

class moraModelo
{
	private $monto;
	private $fechaPago;
	private $mesMora;
	private $fechaMora;
	private $statusMora;
	private $ventaId;

	function insertar($monto,$fechaPago,$mesMora,$fechaMora,$statusMora,$ventaId)
	{
		$this->monto = $monto;
		$this->fechaPago = $fechaPago ;
		$this->mesMora = $mesMora;
		$this->fechaMora = $fechaMora ;
		$this->statusMora = $statusMora;
		$this->ventaId = $ventaId;

		return true;
	}

	function modificar($clienteId)
	{

	}

	function eliminar($clienteId)
	{

	}

	function traspaso($clienteIdDueño,$clienteIdNuevoDueño)
	{

	}

	function restructuracion($clienteId)
	{

	}

}

?>