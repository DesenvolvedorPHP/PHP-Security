<?php
	if($_SERVER["REQUEST_METHOD"] === "POST"):
		$cmd = $POST["cmd"];
		echo "<pre>";
			$comando = system("dir C:", $retorno);
		echo "</pre>";
	endif;


?>

<form action="" method="POST">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>