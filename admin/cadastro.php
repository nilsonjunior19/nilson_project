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
<h2 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Cadastro de Carros: Sistema TotalCarros</h2>
<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">&nbsp;</p>
<h3>Preencha os dados abaixo:</h3>
<p><a href="principal.php">&lt;&lt;&lt; Voltar inicio</a></p>
<form action="gravar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="fmarca">Marca:</label>
    <select name="fmarca" id="fmarca">
      <option value="GM">GM</option>
      <option value="Ford">Ford</option>
      <option value="Fiat">Fiat</option>
      <option value="Honda">Honda</option>
      <option value="Toyota">Toyota</option>
    </select>
  </p>
  <p>
    <label for="fmodelo">Modelo:</label>
    <input name="fmodelo" type="text" required="required" id="fmodelo">
  </p>
  <p>
    <label for="fano">Ano:</label>
    <input name="fano" type="text" required="required" id="fano" size="20">
  </p>
  <p>
    <label for="fcor">Cor:</label>
    <input type="text" name="fcor" id="fcor">
  </p>
  <p>
    <label for="fvalor">Valor:</label>
    <input name="fvalor" type="text" id="fvalor" placeholder="Digite apenas 1000">
  </p>
  <p>
    <label for="fcomentario">Comentário:</label>
    <textarea name="fcomentario" id="fcomentario"></textarea>
  </p>
  <p>
    <label for="ffoto">Foto:</label>
    <input type="file" name="ffoto" id="ffoto">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Enviar">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>