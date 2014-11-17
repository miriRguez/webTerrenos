<?php

class clienteModelo{

	private $clienteId;
	private $nombre;
	private $apellidoP;
	private $apellidoM;
	private $calle;
	private $numeroInt;
	private $numeroExt;
	private $colonia;
	private $cp;
	private $municipio;
	private $fechaNac;
	private $sexo;
	private $estado;
	private $nacionalidad;
	private $estadoCivil;
	private $oficio;
	private $cdOrigen;
	private $municipioOrigen;
	private $rfc;

	function __construct()
	{	require('BD.php');
		$this->mysqli = BD::getInstancia();
	}

	function insertar($nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,
					$cp,$municipio,$fechaNac,$sexo,$estado,$nacionalidad,$estadoCivil,$oficio,
					$cdOrigen,$municipioOrigen,$rfc){

		$nombre = $this->mysqli->escape_string($nombre);
		$apellidoP = $this->mysqli->escape_string($apellidoP);
		$apellidoM = $this->mysqli->escape_string($apellidoM);
		$calle = $this->mysqli->escape_string($calle);
		$numeroInt =  $this->mysqli->escape_string($numeroInt);
		$numeroExt = $this->mysqli->escape_string($numeroExt);
		$colonia = $this->mysqli->escape_string($colonia);
		$cp = $this->mysqli->escape_string($cp);
		$municipio = $this->mysqli->escape_string($municipio);
		$fechaNac = $this->mysqli->escape_string($fechaNac);
		$sexo = $this->mysqli->escape_string($sexo);
		$estado = $this->mysqli->escape_string($estado);
		$nacionalidad = $this->mysqli->escape_string($nacionalidad);
		$estadoCivil = $this->mysqli->escape_string($estadoCivil);
		$oficio = $this->mysqli->escape_string($oficio);
		$cdOrigen = $this->mysqli->escape_string($cdOrigen);
		$municipioOrigen = $this->mysqli->escape_string($municipioOrigen);
		$rfc = $this->mysqli->escape_string($rfc);

		$query = "INSERT INTO `Cliente`(`clienteId`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `calle`, `numeroInterior`,
												 `numeroExterior`, `colonia`, `cp`, `municipio`, `fechaNacimiento`, `sexo`, `nacionalidad`,
												  `estado`, `estadoCivil`, `oficio`, `ciudadOrigen`, `municipioOrigen`, `estadoOrigen`, `rfc`)
												  VALUES ('$clienteId','$nombre','$apellidoP','$apellidoM','$calle','$numeroInt','$numeroExt',
												  '$colonia','$cp','$municipio','$fechaNac','$sexo','$nacionalidad','$estado','$estadoCivil',
												  '$oficio','$cdOrigen','$municipioOrigen','$municipioOrigen','$rfc')";

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

	function modificar($clienteId){

	}

	function eliminar($clienteId){

	}

	function  listar(){
		$clientes = FALSE;
		$result = $this->mysqli->query("SELECT * FROM Cliente");
		if($result!=FALSE){

			$clientes=array();
			$row=$result->fetch_assoc();

			while($row!=null){
				$clientes[]=$row;
				$row=$result->fetch_assoc();
			}
		}
		return $clientes;
	}


}

?>