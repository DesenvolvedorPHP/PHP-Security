<?php

function converteData($data, $formato = 'br'){
	
	if($formato == "br"){
		$data = explode( "-" , $data);
		$data = array_reverse($data);
		$data = implode( "/", $data);
	}else{
		$data = explode("/" , $data);
		$data = array_reverse($data);
		$data = implode("-", $data);
	}
	
		
	echo $data;
	
}


converteData('1984-10-07', 'db');