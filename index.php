<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include('header.php');?>
	<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Sorvetes Baby" />
	<meta property="og:description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique.'/>
	<meta property="og:image" content="https://babysorvetes.com.br/core/imagens/thumb.jpg" />
	<meta property="og:url" content="https://babysorvetes.com.br/" />
	<meta property="og:image:type" content="image/jpeg">
	<meta name="copyright" content="MogiComp Soluções Web">
	<meta name="description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique'>

	<title><?php echo $ttl; $pagina = 'index'; ?></title>
	<script>
		$(document).ready(function(){
			$('#back-banner').mousemove(function(e){
				var x = -(e.pageX + this.offsetLeft) / 60;
				var y = -(e.pageY + this.offsetTop) / 60;
				$(this).css('background-position', x + 'px ' + y + 'px');
			});   
			$('#banner').mousemove(function(e){
				var x = -(e.pageX + this.offsetLeft) / 70;
				var y = -(e.pageY + this.offsetTop) / 70;
				$(this).css('background-position', x + 'px ' + y + 'px');
			});    
			
			

                
                 
		});
	</script>
</head>

<body>
<?php 

#region MOD INCLUDES
	include('core/mod_topo/topo.php');
	include	('core/mod_includes/php/funcoes-jquery.php');
#endregion

?>
<div id="banner">	
	<div id='back-banner'>
		<?php include('banner.php')?>
	</div>
</div>

<div class="home">
<div class="ttl_contato"> Entre em contato </div>
	<div class="wrapper">
		<?php include ('formulario.php')?>
	</div>
</div>

<div class='rodape rodape2'>
	<div id="copy">
        <p>© <?php echo date('Y'); ?> Copyright - Todos os direitos reservados<a href="http://www.mogicomp.com.br" target="_blank"><img src="core/imagens/mc-home.png" border="0" id="mc"/></a></p>
    </div>
</div>

</body>	
</html>

