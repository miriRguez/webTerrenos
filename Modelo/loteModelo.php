<?php

class loteModelo{

	private $idLote;
	private $colindanciaSur;
 	private $colindanciaNorte;
	private $colindanciaEste;
	private $colindanciaOeste;
	private $medidaNorte;
	private $medidaSur;
	private $medidaEste;
	private $medidaOeste;
	private $idManzana;

	function insertar($colindanciaSur, $colindanciaNorte, $colindanciaEste, $colindanciaOeste,$medidaSur,$medidaNorte,$medidaEste,$medidaOeste,$idManzana){
		$this->colindanciaSur = $colindanciaSur;
		$this->colindanciaEste = $colindanciaEste;
		$this->colindanciaOeste = $colindanciaOeste;
		$this->conlindanciaNorte = $conlindanciaNorte;
		$this->medidaEste = $medidaEste;
		$this->medidaOeste = $medidaOeste;
		$this->medidaNorte = $medidaNorte;
		$this->medidaSur = $medidaSur;
		$this->idManzana = $idManzana;

		return TRUE;

	}

	function modificar($idLote){

	}

	function eliminar($idLote){

	}
}

?>