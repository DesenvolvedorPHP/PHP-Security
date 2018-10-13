<?php

// Funções recursivas

function recursivo($i, $tabuada)
{
	if ($i <= 10){
		echo $i." x ". $tabuada . " = " .($i * $tabuada) ."<br>";
		recursivo($i + 1, $tabuada);
	}
}

recursivo(1,7);

