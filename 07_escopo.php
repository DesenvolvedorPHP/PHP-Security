<?php

// Palavra reservada globals

$x = 1;


function somar($y)
{
	global $x;	
	echo $x + $y;
	
	//echo $GLOBALS['x'] + $y;
}

function subtrair($z)
{
	echo $z - $GLOBALS['x'];
}

somar(4);
subtrair(6);




