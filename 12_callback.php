<?php

// Funções Anônimas - Callback


/*
$numeros = [11 ,44, 21, 99, 104, 19];

//$filtro = function($v){
//	return $v <= 50;};


$retorno = array_filter($numeros, function($v){
	return $v <= 50;
});

var_dump($retorno);
*/

$decisao = function($numero, $callback){
	if(is_callable($callback)){
		return $callback($numero);
	}else{
		throw new Exception("Callback precisa ser uma Função");
	}
	
};

$multiplica = $decisao(10, function($n){
	return $n * $n;
});

echo $multiplica;


$meu_erro = $decisao(5, "abc");
echo $meu_erro;
