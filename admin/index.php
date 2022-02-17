<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<style type="text/css">
label {
    width: 200px;
    display: block;
}
#tab {
    background-color: #0A09A4;
    color: #FDFBFB;
    padding-left: 0px;
    width: 200px;
}
</style>
</head>

<body>
<h2>CONTROLE DE ACESSO</h2>
<h3>Preencha os dados abaixo</h3>
<div class="tabela" id="tab">
  <form action="valida_login.php" method="post" name="form1" id="form1">
    <p>
      <label for="flogin"><strong>Login:</strong></label>
      <input type="text" name="flogin" id="flogin">
    </p>
    <p>
      <label for="fsenha"><strong>Senha:</strong></label>
      <input type="password" name="fsenha" id="fsenha">
    </p>
    <p>
      <input name="submit" type="submit" id="submit" formaction="valida_login.php" formmethod="POST" value="login">
    </p>
  </form>
</div>
<p>&nbsp;</p>
</body>
</html>