<?php
//arquivo valida.php

include("conexao.php");

//capturar as variaveis
$vlogin=$_POST[flogin];
$vsenha=$_POST[fsenha];


//consulta a tabela do banco de dados

$sql = "select * from usuarios where login='$vlogin' and senha='$vsenha'";
$rs = mysql_query($sql);//execulta

//procurando os registros
while(list($idusuario, $nome, $login, $senha, $nivel)= mysql_fetch_row($rs)){
	$contador = $contador + 1;
	$peganome = $nome;
	$peganivel = $nivel;
	
}



//situacao do usuario

if ($contador > 0){
	//acesso liberado
	session_start();//liberar o acesso a memória sevidor
	$_SESSION["status"] = "liberado";
	$_SESSION["nomeusuario"] = "$peganome";	
	
	header("location: principal.php");
	
} else {
	//acesso negado
		
		header("location: index.php");
	
}






?>