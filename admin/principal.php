<?php include ("verifica.php");?>
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
</style>
</head>

<body>
	<?php print $_SESSION["nomeusuario"] ;?>
<p><img src="../images/logo.png" width="156" height="43" alt=""/>
</p>
<h2 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Administração do Site: totalcarrros.com.br</h2>
<h3>Navegação do Site</h3>
<ul>
  <li><a href="cadastro.php">Cadastro de Veiculos</a></li>
  <li><a href="consulta.php">Consulta de Veiculos</a></li>
  <li><a href="consulta2.php">Consulta avançada</a></li>
  <li><a href="sair.php">Sair do sistema</a></li>
</ul>
</body>
</html>