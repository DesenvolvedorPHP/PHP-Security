<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

// if(!is_numeric($id) || strlen($id) > 5) {
// 	exit("Injeção de SQL - Fail");
// }

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM clientes WHERE id_cliente = $id";

$exec = mysqli_query($conn, $sql);


while ($resultado = mysqli_fetch_object($exec)){

	var_dump($resultado);

}

// localhost/PHP-Security/SQL_Injection?id=X OR 1 = 1 --
// http://localhost/PHP-Security/SQL_Injection/?id=4%20OR%201%20=%201%20--