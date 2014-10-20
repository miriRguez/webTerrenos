<?php

class UsuarioModelo
{
	private $nombre;
	private $nivelAcceso;
	private $password;
	private $usuarioId;
	private $telefono;
	private $mysqli;//variable de conexion
	private $usuarioEmail;

	function __construct()
	{
		require('BD.php');
		$this->mysqli = BD::getInstancia();
	}

	function insertar($nombre,$password,$usuarioEmail,$nivelAcceso)
	{
		$this->nivelAcceso = $nivelAcceso;
		$this->nombre = $nombre;
		//$this->usuarioId = $usuarioId;
		$this->password = $password;
		//$this->telefono = $telefono;
		$this->usuarioEmail = $usuarioEmail;

		$this->mysqli->escape_string($this->nombre);
		$this->mysqli->escape_string($this->password);
		$this->mysqli->escape_string($this->usuarioEmail);

	    $query = "INSERT INTO `Usuario`(`nombre`, `nivelAcceso`, `password`,`usuarioEmail`) VALUES ('$nombre','$nivelAcceso','$password','$usuarioEmail')";

		$result = $this->mysqli->query($query);

		if ($this->mysqli->error)
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