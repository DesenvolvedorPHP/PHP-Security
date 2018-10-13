<?php

// Funções Anônimas - Herdando variáveis escopo anterior

$y = 2;
$z = 3;

$soma = function($x) use($y, $z)
{
	return $y + $x + $z;
};

$result = $soma(2);

echo $result;
