<?php

class BD
{

	private static $conexion;

	public static function getInstancia(){
		if(self::$conexion === null){
			require('config.inc');
			self::$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			if(self::$conexion->connect_errno){
				//Vista de error en la conexión a la base de datos
				die('Fallo la base de datos '.$this->conexion->connect_errno);
			}
		}
		return self::$conexion;
	}
/**
 *@param variable conectar utilizada para hacer la instancia
 *@param variable mysqli instancia de la clase para conectar a la base de datos
 *@param variable para las consultas a la base de datos
 */


/**
*
 *	static $instancia;

 private $mysqli;
 private $resultadoQuery;
 *@param constructor con acceso privado para que no pueda ser instanciado
 *//*
	private function __construct()
	{
		$this->conexion();
	}


 *funcion que creara el objeto
 *//*
	public static function getInstancia()
	{
		if(!(self::$instancia instanceof self))
		{
			self::$instancia = new self();
		}
		return self::$instancia;
	}

/**
 *@param funcion que creara la conexion a la base de datos

	private function conexion()
	{
		$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		if ($this->mysqli->connect_errno)
		{
			echo('Error al intentar conextar con la base de datos '.$this->mysqli->connect_errno);
		}
	}

	*/

	private function __clone()
	{
		trigger_error('ACCION NO PERMITIDA', E_USER_ERROR);
	}
}
?>