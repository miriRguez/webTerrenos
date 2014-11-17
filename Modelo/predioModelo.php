<?php

class predioModelo{

	private $idPredio;
	private $nombre;
	private $municipio;
	private $colonia;
	private $mysqli;

	function __construct()
	{	require('BD.php');
		$this->mysqli = BD::getInstancia();
	}

	function insertar($nombre,$municipio,$colonia){

		$nombre = $this->mysqli->escape_string($nombre);
		$municipio = $this->mysqli->escape_string($municipio);
		$colonia = $this->mysqli->escape_string($colonia);

		$query = "INSERT INTO `Predio`(`nombre`, `municipio`, `colonia`)
				 VALUES ('$nombre','$municipio','$colonia')";

		$result = $this->mysqli->query($query);

		if ($this->mysqli->error)
		{
			die('Usuario no registrado!');
		}

		if ($result !=FALSE)
		{
				return true;

		}else{
				die('Los datos son incorrectos!');
		}
	}

	function modificar($idPredio){

	}

	function eliminar($idPredio){

	}

	/**
	 *@return el resultado regresa la lista de predios que se encuntran en la base de datos
	 * obtiene la informacion
	 */
	function listar(){
		$predios = FALSE;
		$result = $this->mysqli->query("SELECT * FROM Predio");
		if($result!=FALSE){

			$predios=array();
			$row=$result->fetch_assoc();

			while($row!=null){
				$predios[]=$row;
				$row=$result->fetch_assoc();
			}
		}
		return $predios;
	}

}
?>