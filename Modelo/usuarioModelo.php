<?php

class UsuarioModelo
{
	private $nombre;
	private $nivelAcceso;
	private $password;
	private $usuarioId;
	private $telefono;
	private $mysqli;//variable de conexion

	function __construct()
	{
		$this->mysqli = BD::getInstancia();

		//$conexion =  $this->bd->conexion();
		/*
		$this->mysqli_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		if ($mysqli->connect_errno)
		{
			return new soapval('return','xsd:string','NO TIENE ACCESO');
		}*/
	}

	function insertar($nombre,$nivelAcceso,$password,$telefono,$usuarioId)
	{
		$this->nivelAcceso = $nivelAcceso;
		$this->nombre = $nombre;
		$this->usuarioId = $usuarioId;
		$this->password = $password;
		$this->telefono = $telefono;

		$this->mysqli->escape_string($this->nivelAcceso);
		$this->mysqli->escape_string($this->nombre);

	    $query = "INSERT INTO `Usuario`(`id_user`, `nombre`, `tipo`, `password`) VALUES '$usuarioId','$nombre',' $nivelAcceso')";

		$result = $this->mysqli->query($query);

		if ($this->$this->mysqli->error)
		{
			die('Error al insetar usuario');
		}

		if ($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/*function leerCsv()
	{
		$fila = 1;
		if (($gestor = fopen("OutlookContacts.csv", "r")) !== FALSE)
		{
			while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE)
			{
					$numero = count($datos);
					echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
					$fila++;
					for ($c=0; $c < $numero; $c++) {
					echo $datos[$c] . "<br />\n";
			}
		}
	fclose($gestor);
	}

}*/

	function modificar($usuarioId,$nivelAcceso,$password)
	{
		$query = "UPDATE `Usuario` SET `nivelAcceso`=$nivelAcceso, `password`=$password WHERE `empleadoId` = $usuarioId";
		$respuesta = $this->bd->modificar($query);

		if($respuesta)
		{
			//require(vissta);
			echo 'Modificacion EXITOSA';
		}
	}

	function eliminar($usuarioId){

	}
}


?>