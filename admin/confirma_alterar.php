<?php
//arquivo gravar.php
//conexao com banco de dados

include("conexao.php");

$pegaid = 	  $_GET[id];
$marca = 	  $_POST[fmarca];
$modelo =     strtoupper($_POST[fmodelo]);
$ano =	      (int) $_POST[fano];
$cor = 		  $_POST[fcor];
$valor = 	  (real) $_POST[fvalor];
$comentario = $_POST[fcomentario];

//script da foto

$foto = $_FILES[ffoto];
$nome_foto = $foto["name"]; //captura o nome do arquivo
@mkdir("fotos",0777); //cria a pasta
$caminho = "fotos/".$nome_foto;
move_uploaded_file($foto["tmp_name"],$caminho);
//finaliza o upload do arquivo

if($nome_foto==""){
	//gravando no banco

$sql = "UPDATE carros set marca='$marca', modelo='$modelo', ano=$ano, cor='$cor', valor='$valor', descricao='$comentario' where idcarros=$pegaid";
	
} else {
	//gravando no banco

$sql = "UPDATE carros set marca='$marca', modelo='$modelo', ano=$ano, cor='$cor', valor='$valor', descricao='$comentario', foto='$caminho' where idcarros=$pegaid";
	
}

$rs = mysql_query($sql); //execulta

//pagina de sucesso
header("Location: consulta.php");

?>