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
	<meta property="og:url" content="https://babysorvetes.com.br/quem-somos" />
	<meta property="og:image:type" content="image/jpeg">
	<meta name="copyright" content="MogiComp Soluções Web">
	<meta name="description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique'>

	<?php include('header.php');?>
	<title><?php echo $ttl;?></title>
</head>

<body>
<?php 

#region MOD INCLUDES
	include('core/mod_topo/topo.php');
	include	('core/mod_includes/php/funcoes-jquery.php');
#endregion

?>
<div class='banner-pagina'>
	<img src="core/imagens/banner/banner-quem-somos.jpg" width="100%">
</div>

<div class="wrapper">
	<p>Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique, empreendedor no setor de sorvetes. Ele deu início ao sonho em sua garagem, onde vendia seus sorvetes na região metropolitana de São Paulo.
	<p>Aos poucos a pequena produção foi se transformando e aumentando, seus produtos começaram a ser distribuídos para o segmento de atacado e varejo, atendendo pequenos lojistas, bombonieres e padarias. Em 2012, devido aos lucros e sucesso, o negócio se expandiu com a distribuição de freezers próprios.
	<p>Atualmente, a Sorvetes Baby conta com 5 lojas próprias no Alto Tietê e Zona Leste de São Paulo e mais de 100 pontos de revenda. 
</div>
<div class="ttl_contato"> Entre em contato </div>

<div class="wrapper">
    <?php include ('formulario.php')?>
</div>

<?php include ('core/mod_rodape/rodape.php')?>
</body>	
</html>

