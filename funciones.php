<?php

class validar
{
	function validarNumero($numero)
	{
		if (is_numeric($numero))
		{
			return $numero;
		}
		else
		{
			die("Formato invalido para numero");
		}
	}

	function validarCadena($cadena)
	{

		$match = '/[A-Za-z0-9]{2,}/';

		if (preg_match($match,$cadena ))
		{
			return $cadena;
		}
		else
		{
			die("Formato invalido para cadena!");
		}
	}

	function validarNSS($nss)
	{
		$match = '/([0-9]{2}[\-]{1}){3}([0-9]{4}[\-]{1}[0-9]{1})$/';
		if (preg_match($match,$nss )) {
			return $nss;
		}
		else
		{
			die("formato invalido para NSS");
		}
	}

	function validarCP($cp)
	{
		$match = '/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/';

		if (preg_match($match,$cp ))
		{
			return $cp;
		}
		else
		{
			die("Formato invalido para Cσdigo Postal");
		}
	}

	function validarSexo($sexo)
	{
		if (strcasecmp($sexo,'m') == 0 || strcasecmp($sexo,'f') == 0) {
			return $sexo;
		}
		else
		{
			die('Formato invalido para Sexo');
		}
	}

	function validarRFC($rfc)
	{
		$match = '/([A-Z]{4}[0-9]{6}[A-Z0-9]{3})$/';
		if (preg_match($match,$rfc ))
		{
			return $rfc;

		}
		else
		{
			die("Formato invalido para RFC");
		}
	}

	function validarFecha($fecha)
	{
		$match = '/([0-2][0-9]|3[0-1])[\/](0?[1-9]|1[012])[\/](19|20)\d{2}$/';
		if (preg_match($match,$fecha))
		{
			return $fecha;
		}
	    else
		{
			die("Formato invalido de fecha, formato correcto dd/mm/aaaa");
		}
	}


	function validarTelefono($telefono)
	{
		$match = '((\s{0,1}\-{0,1}[0-9]{2,3}){3,6})';

		if (preg_match($match,$telefono))
		{
			return $telefono;
		}
		else
		{
			die("Formato invalido para telefono");
		}
	}

	function validarTexto($texto)
	{

		$match =  '/^[a-z\d_]{4,28}$/i';
		if (preg_match($match,$texto))
		{
			return $texto;
		}
		else
		{
			die("Formato invalido para texto");
		}
	}


	function validarEmail($email)
	{
		$match = "/^\w+([\w\._-])*@([\w])+(\.\w+)+$/";

		if(preg_match($match,$email))
		{
			 return $email;
		}
		else
		{
			die("Formato invalido para e-mail");
		}
	}

	function validarNombre($nombre)
	{
		$match = '/^[A-Za-zαινσϊρ]{2,}(([\s][A-Za-zαινσϊρ]{2,}){0,1})+$/';
		if (preg_match($match,$nombre))
		{
			return $nombre;
		}
		else
		{
			die ("Formato invalido para nombre");
		}
	}

	function validarPassword($password)
	{
		$match = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";
		if (preg_match($match, $password))
		{
			return $password;
		}
		else
		{
			die("Formato invalido para contraseρa, contraseρa debil");
		}
	}
}

?>