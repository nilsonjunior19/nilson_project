<?php
//arquivo conexao.php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$basedados = "totalcarros";


$conexao = mysql_connect($servidor, $usuario, $senha);
mysql_select_db($basedados, $conexao);

//print("Conexão OK");

?>