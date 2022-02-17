<!DOCTYPE php>
<php lang="en">
<head>
<title>Contato</title>
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
            
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</header>
<!-- content -->
<section>
	<div class="bg">
		<div class="container_24">
			<div class="wrapper">
				<div class="grid_24 padtop33">
					<h4>Entre em contato</h4>
					<form id="contact-form">
						<div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong></div>
						<fieldset>
							<div class="wrapper">
								<div class="grid_8 suffix_1 alpha">
									<label class="name">
										<input type="text" value="Nome">
										<span class="error">*Este nome não é válido</span>
										<span class="empty">*Campo obrigatório.</span>
										<span class="clear"></span>
									</label>
									<label class="email">
										<input type="text" value="Email">
										<span class="error">*Este e-mail não é válido</span>
										<span class="empty">*Campo obrigatório.</span>
										<span class="clear"></span>
									</label>
									<label class="phone">
										<input type="text" value="Telefone">
										<span class="error">*Este telefone não é válido</span>
										<span class="empty">*Campo obrigatório.</span>
										<span class="clear"></span>
									</label>
								</div>
								<div class="grid_13 suffix_2 omega">
									<label class="message">
										<textarea>Mensagem</textarea>
										<span class="error">*Mensagem muito curta.</span>
										<span class="empty">*Campo obrigatório.</span>
										<span class="clear"></span>
									</label>
									<div class="buttons"><span><a class="button" data-type="reset">Limpar</a></span><span><a class="button" data-type="submit">Enviar</a></span></div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container_24">
		<div class="">
			<div class="grid_6 padtop22">
			  <h4 class="padbot2">Endereço</h4>
				<address class="contacts">
					<p>TotalCarros Ltda. 8901 Av. Brasil, Centro, São Paulo,<br>
78009-784. <br>
<br>
Telefone: 0800 559 6580 <br>
FAX: 11 9889 9898 <br>
<br>
E-mail: comercial@totalcarros.com.br</p>
					<p>&nbsp;</p>
				</address>
			</div>
			<div class="grid_10 suffix_1 padtop22">
				<h4 class="padbot2">Mapa</h4>
				<div class="box-img map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3657.084343043063!2d-46.65181700000001!3d-23.565414099999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1409681766792"></iframe></div>
			</div>
			<div class="grid_7 padtop22">
				<h4 class="padbot2">Acesse também</h4>
				<ul class="icons icons2">
					<li><a href="#"><img src="images/icon2-1.png" alt=""></a></li>
					<li><a href="#"><img src="images/icon2-2.png" alt=""></a></li>
					<li><a href="#"><img src="images/icon2-3.png" alt=""></a></li>
					<li><a href="#"><img src="images/icon2-4.png" alt=""></a></li>
					<li><a href="#"><img src="images/icon2-5.png" alt=""></a></li>
				</ul>
				<ul class="list4">
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Forrst</a></li>
					<li><a href="#">Linkedln</a></li>
					<li><a href="#">Skype</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">YourVersion</a></li>
				</ul>
			</div>
			<div class="clear"></div>
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
</body>
</html>