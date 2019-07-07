<?php

$folder = "files";
// Definindo as permissões da pasta
$permission = "0775";

if(!is_dir($folder)) mkdir($folder, $permission);

echo "Directory created successfully!";