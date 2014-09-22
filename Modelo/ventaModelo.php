<?php

class ventaModelo
{
	private $tipoPago;
	private $monto;
	private $mensualidad;
	private $fechaCompra;
	private $fechaCorte;
	private $statusVenta;

	function insertar($tipoPago,$monto,$mensualidad,$fechaCompra,$fechaCorte,$statusVenta)
	{
		$this->tipoPago = $tipoPago ;
		$this->monto = $monto;
		$this->mensualidad = $mensualidad ;
		$this->fechaCompra = $fechaCompra;
		$this->fechaCompra = $fechaCompra ;
		$this->statusVenta = $statusVenta;

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