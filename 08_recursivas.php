<?php

// Funções recursivas
// A recursividade é a definição de uma sub-rotina (função ou método) que pode invocar a si mesma.

function recursivo($i, $tabuada)
{
	if ($i <= 10){
		echo $i." x ". $tabuada . " = " .($i * $tabuada) ."<br>";
		recursivo($i + 1, $tabuada);
	}
}

recursivo(1,7);

