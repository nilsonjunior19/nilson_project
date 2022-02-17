<?php
include("admin/conexao.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Empresa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/forms.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(function(){
	$('#contact-form').forms({ownerEmail:'#'});
});
</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!-- header -->
<header class="padheader">
	<div class="container_24">
		<div class="grid_24">
			<?php include("menu.php"); ?>
            
            <!-- fim do menu-->	
			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</header>
<!-- content -->
<section>
	<div class="bg">
		<div class="container_24">
			<div class="wrapper padbot6">
			  <div class="grid_20 padtop33">
					<h4>Nosso Catálogo de Veículos</h4>
				  <p>Seja bem vindo a empresa totalcarros automoveis ltda.<br>
				  Veja aqui todos automóveis disponiveis pra você.</p>
					<form id="form1" name="form1" method="post">
					  <label for="fbusca">Busca por modelo:</label>
                      <input name="fbusca" type="text" id="fbusca" size="40">
			          <input type="submit" name="submit" id="submit" value="Buscar">
				  </form>
				<p>&nbsp;</p>
				<table width="600" border="0" cellspacing="4">
				  <tbody>
				    <tr>
				      <td width="200" bgcolor="#E3DDDD">Modelo</td>
				      <td width="200" height="30" bgcolor="#E3DDDD">Modelo/Marca</td>
				      <td width="100" bgcolor="#E3DDDD">Valor</td>
				      <td width="100" bgcolor="#E3DDDD">Admin</td>
			        </tr>
			      </tbody>
			    </table>
				  <br>
                <?php 
	
	$busca = $_POST[fbusca];
	
	//if($busca != "") {
		if($_SERVER['CONTENT_LENGTH'] > 0) {
	
	$sql = "select * from carros where modelo like '$busca%'";
	$rs = mysql_query($sql);//execultar
	$cor="white";		
	//dados organizados
	
	while(list($idcarros, $marca, $modelo, $ano, $corbd, $valor, $descricao, $foto) = mysql_fetch_row($rs)){
		
	if ($cor=="white"){
		
		$cor="aqua";
	}	else {
		
		$cor="white";
	}
	
	?>
                <table width="600" border="0" cellspacing="4">
                  <tbody>
                    <tr>
                      <td width="189"><a href="detalhar.php?id=<?php print $idcarros; ?>"><img src="<?php print ("admin/$foto")?>" width="189" height="140"></a></td>
                      <td width="189" height="30"><?php print ("$marca");?>
                        <p><?php print ("$modelo");?><br>
                        <?php print ("$descricao");?><br>
                        <?php print ("$corbd");?><br>
                        <?php print ("$ano");?></p></td>
                      <td width="95"><?php print ("R$ $valor");?></td>
                      <td width="96">&nbsp;</td>
                    </tr>
                  </tbody>
                </table><br>
                <?php
	
	}//fecha o while da repetição
	} //fecha o if
	?>
<br>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			  </div>
				<br>
			</div>
		</div>
	</div>
</section>
<!-- footer -->
<footer class="">
	<div class="container_24">
		<div class="wrapper">
			<div class="grid_24"><a href="index.php" class="link"><img src="images/logo.png" alt="" width="53" height="15"></a>&copy; 2014 | <a href="#">Privacy Policy</a></div>
		</div>
	</div>
</footer> 
<!-- Coded by Ariadna --> 
</body>
</html>