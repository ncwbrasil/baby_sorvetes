<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Sorvetes Baby" />
	<meta property="og:description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique.'/>
	<meta property="og:image" content="https://babysorvetes.com.br/core/imagens/thumb.jpg" />
	<meta property="og:url" content="https://babysorvetes.com.br/fale-conosco" />
	<meta property="og:image:type" content="image/jpeg">
	<meta name="copyright" content="MogiComp Soluções Web">
	<meta name="description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique'>

	<?php include('header.php');?>
	<title>Contato - <?php echo $ttl?></title>
</head>

<body>
<?php 
include('core/mod_topo/topo.php');
include	('core/mod_includes/php/funcoes-jquery.php');
?>

<div class="ttl_paginas"> Entre em contato </div>

<div class="wrapper contato" id='pagina'>
	<div class="bloco">
		<br>
		<p class="subtitulo azul">Entre em contato conosco, ou se preferir deixe uma mensagem.</p> 
		<p>
		<span onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE CONTATO');"><a href='tel:+551146342656' title='Ligar agora'  alt='Ligar agora'><i class="fas fa-phone"></i> (11) 4634-2656</a></span><br>
		<span onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(1,'WHATSAPP CONTATO');""><a href='https://wa.me/551146363877' title='Whatsapp'  alt='Whatsapp'><i class="fab fa-whatsapp"></i> (11) 4636-3877</a></span><br>
		<span onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Email','value':0}); JSleadsAdd(4,'EMAIL CONTATO');""><a href='mailto:vendas@babysorvetes.com.br'><i class="fas fa-envelope"></i> vendas@babysorvetes.com.br</a></span></p>  <br>
		<iframe onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Mapa','value':0});" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.091812789611!2d-46.3530973853475!3d-23.529199966289777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7ad9a2541ee1%3A0xf644bb44a744c27a!2sRua%20Clemente%20Cunha%20Ferreira%2C%2020%20-%20Conj.%20Res.%20Bela%20Vista%2C%20Po%C3%A1%20-%20SP%2C%2008563-347!5e0!3m2!1spt-BR!2sbr!4v1575468433999!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<div class="bloco">
		<?php include('formulario.php')?>
	</div>
</div>

<?php include('core/mod_rodape/rodape.php');?>
</body>
</html>

