<?php

// Parâmetros

function paramPhp($nome){
	
	echo "Bienvenido ". $nome;

}

paramPhp("Fulano");
echo "<br>";
paramPhp("Ciclano");

// Trocar o formato da data
function converteData($formato, $data){
	
	if($formato == "br"){
		$data = explode(delimiter, "-" , $data);
		$data = array_reverse($data);
		$data = implode(glue, "/", $data);
	}else{
		$data = explode(delimiter, "/" , $data);
		$data = array_reverse($data);
		$data = implode(glue, "-", $data);
	}
	
		
	echo $data;
	
}


converteData('br','2018-10-12');