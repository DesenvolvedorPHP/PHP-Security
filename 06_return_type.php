<?php

// Return types declarations 
// Declarações de tipos de retorno

$numeros = [1, 3, 5, 8, 9];
$aleatorio = mt_rand(1, 10);

function temNumero(int $aleatorio, array $numeros): ?int
{
	if(in_array($aleatorio, $numeros)){
		return $aleatorio;
	}else{
		//return false;
		return null;
	}	
}

echo $aleatorio."<br><hr>";
$resultado = temNumero($aleatorio, $numeros);
var_dump($resultado);	