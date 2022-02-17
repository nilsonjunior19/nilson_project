<?php 
//conexao com o obanco
include("conexao.php");

$pegaid = $_GET[id];

$sql = "select * from carros where idcarros=$pegaid";
$rs = mysql_query($sql);//execultar

list($idcarros, $marca, $modelo, $ano, $cor, $valor, $descricao, $foto) = mysql_fetch_row($rs);



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administração do site</title>
<style type="text/css">
body {
    background-image: url(../images/bg-content.png);
}
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
a {
    font-size: 18px;
}
label {
    width: 200px;
    display: block;
}
</style>
</head>

<body>
<p><img src="../images/logo.png" width="156" height="43" alt=""/>
</p>
<h2 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Alterar Dados: Sistema TotalCarros</h2>
<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">&nbsp;</p>
<h3>Preencha os dados abaixo:</h3>
<form action="confirma_alterar.php?id=<?php print $idcarros; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="fmarca">Marca:</label>
    <select name="fmarca" id="fmarca">
		
      <option value="<?php print $marca?>"><?php print $marca?></option>
    </select>
  </p>
  <p>
    <label for="fmodelo">Modelo:</label>
    <input name="fmodelo" type="text" required="required" id="fmodelo" value="<?php print $modelo; ?>">
  </p>
  <p>
    <label for="fano">Ano:</label>
    <input name="fano" type="text" required="required" id="fano" value="<?php print $ano; ?>" size="20">
  </p>
  <p>
    <label for="fcor">Cor:</label>
    <input name="fcor" type="text" id="fcor" value="<?php print $cor; ?>">
  </p>
  <p>
    <label for="fvalor">Valor:</label>
    <input name="fvalor" type="text" id="fvalor" placeholder="Digite apenas 1000" value="<?php print $valor; ?>">
  </p>
  <p>
    <label for="fcomentario">Comentário:</label>
    <textarea name="fcomentario" id="fcomentario"><?php print $descricao; ?></textarea>
  </p>
  <p>'<img src="<?php print ("$foto")?>" width="189">'</p>
  <p>&nbsp;</p>
  <p>
    <label for="ffoto">Foto:</label>
    <input type="file" name="ffoto" id="ffoto">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Editar">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>