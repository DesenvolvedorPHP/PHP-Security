<?php

// Parâmetro por referência x parâmetro por valor

/*
function add($i)
{
	$i++;
	echo "Interno  " . $i . "<br>";
}
*/


// O & determina que a passagem de parâmetro seja por referência e não por valor

function add(&$i)
{
	$i++;
	echo "Interno  " . $i . "<br>";
}
	$numero = 1;	
	add($numero);		
	echo "Externo  " .$numero;
	
	