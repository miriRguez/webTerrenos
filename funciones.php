<?php

class validar{

function validarNumero($numero){
	if (is_numeric($numero)) {
		return $numero;
	}
}


function validarTexto($texto){
/*	if (preg_match(" [a-zA-Z\-_]",$texto)) {
			return $texto;

	}*/
	return $texto;

}

function validarEmail($email){
	if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
	 { return $email;

		}
}

function validarPassword($password){
	if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)){
		return $password;
	}

}


}


?>