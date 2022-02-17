<?php
//arquivo gravar.php
//conexao com banco de dados

include("conexao.php");

$pegaid = 	  $_GET[id];


//gravando no banco

$sql = "DELETE from carros where idcarros=$pegaid";

$rs = mysql_query($sql); //execulta

//pagina de sucesso
header("Location: consulta.php");

?>