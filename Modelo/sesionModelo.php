<?php

class sesionModelo{
  private $usuarioEmail;
  private $password;
  private $sesionId;
  private $mysqli;


	function __construct()
	{	require('BD.php');
		$this->mysqli = BD::getInstancia();
	}

	function iniciarSesion($usuarioEmail,$password){

		$usuarioEmail =	$this->mysqli->escape_string($usuarioEmail);
		$password = $this->mysqli->escape_string($password);

		$query = "SELECT `usuarioId` FROM `Usuario` WHERE `usuarioEmail` = '$usuarioEmail' AND `password` = '$password'";

		$result = $this->mysqli->query($query);

		if ($this->mysqli->error)
		{
			die('Usuario no registrado!');
		}

		if ($result)
		{
			if($result->num_rows > 0){
				return true;
			}
			else{
				die('Los datos son incorrectos!');
			}

		}
		else
		{

			return false;
		}

		return TRUE;
	}

	function cerrarSesion(){
		if(!isset($_SESSION['usuarioEmail']))
		{
			echo "No hay ninguna sesion iniciada";
			//esto ocurre cuando la sesion caduca.

		}
		else
		{
			session_unset();
			session_destroy();
			return TRUE;

		}


	}
}

?>