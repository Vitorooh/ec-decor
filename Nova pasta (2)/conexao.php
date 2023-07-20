<?php

$usuario = 'root';
$senha = '6k2PzhFn71FvVti81M0b';
$database = 'railway';
$host = 'containers-us-west-125.railway.app';
$port = '6523';

$mysqli = new mysqli($host, $usuario, $senha, $database, $port);
 
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>