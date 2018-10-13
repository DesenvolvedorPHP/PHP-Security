<?php
	/*
	function abc(){
		return "123";
	}
	
	$valor = abc();
	echo $valor;
	*/

function executarTeste($nota, $media = 5){
	if($nota >= $media ){
		return "Aprovado";
	}else{
		return "Reprovado";
	}
}

echo "<h2>Exame Final</h2>";
$resultado = executarTeste(8);
echo "Resultado da prova da Marta: ". $resultado;

echo "<br>";

$resultado = executarTeste(7, 8);
echo "Resultado da prova da Jose: ". $resultado;


echo "<br><br><hr>";

echo "<h2>Exame Admicional</h2>";
$resultado = executarTeste(4);
echo "Resultado do Teste da Rita: ". $resultado;

echo "<br>";

$resultado = executarTeste(9, 7);
echo "Resultado do Teste da João: ". $resultado;




	