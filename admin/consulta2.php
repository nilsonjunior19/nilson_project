<?php

	//conexao com o banco
	include("conexao.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<style type="text/css">
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
</style>
</head>

<body>
<p><img src="../images/logo.png" width="156" height="43" alt=""/> </p>
<h2 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Administração do Site: totalcarros.com.br</h2>
<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: bold;">Consulta de Carros!</p>
<form id="form1" name="form1" method="post">
  <p>Busca por modelo:
    <input name="fbusca" type="text" id="fbusca" size="40">
Marca    
<select name="fmarca" id="fmarca">
	
      <option value="<?php print $_POST[fmarca];  ?>"><?php print $_POST[fmarca];  ?></option>
      <option value="Ford">Ford</option>
      <option value="Fiat">Fiat</option>
      <option value="Honda">Honda</option>
      <option value="Toyota">Toyota</option>
    </select>
    <input type="submit" name="submit" id="submit" value="Procurar">
  </p>
</form>
<p><a href="principal.php">Retorna ao Menu</a></p>
<p><br>
</p>
<table width="600" border="0" cellspacing="4">
  <tbody>
    <tr>
      <td width="200" bgcolor="#878383">Modelo</td>
      <td width="200" height="30" bgcolor="#878383">Modelo/Marca</td>
      <td width="100" bgcolor="#878383">Valor</td>
      <td width="100" bgcolor="#878383">Admin</td>
    </tr>
  </tbody>
</table>
<?php 
	
	$busca = $_POST[fbusca];
	$marcav = $_POST[fmarca];
	
	//if($busca != "") {
		if($_SERVER['CONTENT_LENGTH'] >0) {
	
	$sql = "select * from carros where modelo like '$busca%' and marca='$marcav' order by valor desc";
	$rs = mysql_query($sql);//execultar
	//dados organizados
	
	while(list($idcarros, $marca, $modelo, $ano, $cor, $valor, $descricao, $foto) = mysql_fetch_row($rs)){
		
		
	
	?>
	
	
<table width="600" border="0" cellspacing="4">
  <tbody>
    <tr>
      <td width="189"><img src="<?php print ("$foto")?>" width="189"></td>
      <td width="189" height="30"><?php print ("$marca");?>
        <p><br>
          <?php print ("$modelo");?><br>
      <?php print ("$descricao");?></p>
      <p><?php print ("$cor");?></p></td>
      <td width="95"><?php print ("R$ $valor");?></td>
      <td width="96"><a href="alterar.php?id=<?php print $idcarros; ?>"><img src="../images/745146 (1).png" width="28" height="28" alt=""/></a> | <a href="excluir.php?id=<?php print $idcarros; ?>"><img src="../images/excluir.png" width="28" height="28" alt=""/></a></td>
    </tr>
  </tbody>
</table>
	<?php
	
	}//fecha o while da repetição
	} //fecha o if
	?>
	
<p><br>
  <br>
</p>
<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: normal;">&nbsp;</p>
</body>
</html>