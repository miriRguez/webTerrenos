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

		$this->usuarioEmail = $usuarioEmail;
		$this->password = $password;
		$this->mysqli->escape_string($this->usuarioEmail);
		$this->mysqli->escape_string($this->password);

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
				die('Usuario no registrado!');
			}

		}
		else
		{

			return false;
		}

		return TRUE;
	}

	function cerrarSesion($sesionId){
		if(!isset($_SESSION['usuarioEmail']))
		{
			echo "No hay ninguna sesion iniciada";
			//esto ocurre cuando la sesion caduca.

		}
		else
		{
			session_destroy();
			return TRUE;

		}


	}
}

?>