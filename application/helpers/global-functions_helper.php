<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Função para Criptografia 
function criptografia($string)
{
	$palavra = "findpark";

	if(isset($string)){
		return md5($palavra.$string);
	}
}

//Função que retorna a data do brasil
function get_Date_Now() 
{
	$tz_object = new DateTimeZone('Brazil/East');
   	//date_default_timezone_set('Brazil/East');

	$datetime = new DateTime();
	$datetime->setTimezone($tz_object);

	return $datetime->format('d\-m\-Y\ ');
}

//Função que retorna um senha aleattória
function geraSenha($tamanho = 6)
{
	$lowerCase = 'abcdefghijklmnopqrstuvwxyz';
	$number = '1234567890';

	$retorno = '';
	$caracteres = '';

	$caracteres .= $lowerCase;
	$caracteres .= $number;

	$letras = strlen($caracteres);

	for ($i = 1; $i <= $tamanho; $i++) {
		$rand = mt_rand(1, $letras);
		$retorno .= $caracteres[$rand-1];
	}

	return $retorno;
}