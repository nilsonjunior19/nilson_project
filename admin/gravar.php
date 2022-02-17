<?php
//arquivo gravar.php
//conexao com banco de dados

include("conexao.php");

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




//gravando no banco

$sql = "INSERT INTO carros(marca, modelo, ano, cor, valor, descricao, foto)
values('$marca','$modelo',$ano,'$valor','$cor','$comentario','$caminho')";

$rs = mysql_query($sql); //execulta

//pagina de sucesso
header("Location: sucesso.php");

?>