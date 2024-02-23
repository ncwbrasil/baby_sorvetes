<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!--META TAGS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sorvetes Baby" />
    <meta property="og:description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique.' />
    <meta property="og:image" content="https://babysorvetes.com.br/core/imagens/thumb.jpg" />
    <meta property="og:url" content="https://babysorvetes.com.br/pontos-de-venda" />
    <meta property="og:image:type" content="image/jpeg">
    <meta name="copyright" content="MogiComp Soluções Web">
    <meta name="description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique'>

    <title>Baby Sorvetes - Pontos de venda</title>

    <?php include('header.php');?>
    <script language="javascript">
        largura = $(window).width();
        if (largura > '651') {
            $(document).ready(function() {
                $('li').click(function() {
                    var id = $(this).attr('id');
                    $('.mapa').fadeOut(100);
                    $('.col1 li').css('font-weight', '400');
                    $('.col1 li').css('color', '#2580BF');
                    $('.col1 li').css('background-color', '#F6F6F6');

                    $('.col2 #' + id).fadeIn(500);
                    $('li#' + id).css('background-color', '#3AA635');
                    $('li#' + id).css('color', '#fff');
                    $('li#' + id).css('font-weight', '400');

                });
            });
        }
    </script>
</head>

<body>
    <?php 

#region MOD INCLUDES
	include('core/mod_topo/topo.php');
	include	('core/mod_includes/php/funcoes-jquery.php');
#endregion

?>
    <div class="ttl_paginas"> Entre em contato </div>


    <div class="wrapper" id="pontos">
        <div class="col1">
            <ul>
                <li id="uni01">
                    <p>Unidade Poá 1 (Matriz)</p>
                    <div class="bloco">
                        <p>Rua Clemente Cunha Ferreira, 20 - Vila Perracine - Poá/SP<br> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146342656' >
                            (11) 4634-2656
                        </a><br> Segunda a sábado das 9h às 18h<br> Domingo e feriado das 11h às 18h</p>
                    </div>
                    <div class="bloco">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.091812789611!2d-46.3530973853475!3d-23.529199966289777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7ad9a2541ee1%3A0xf644bb44a744c27a!2sRua%20Clemente%20Cunha%20Ferreira%2C%2020%20-%20Conj.%20Res.%20Bela%20Vista%2C%20Po%C3%A1%20-%20SP%2C%2008563-347!5e0!3m2!1spt-BR!2sbr!4v1575468433999!5m2!1spt-BR!2sbr"
                            width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </li>
                <li id="uni02">
                    <p> Unidade Poá 2 </p>
                    <div class="bloco">
                        <p>Avenida Nove de Julho, 1438 - Vila das Acácias - Poá/SP<br> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146380737' >
                            (11) 4638-0737
                        </a><br> Segunda a sábado das 10h30 às 18h30<br> Domingo e feriado das 11h às 18h</p>
                    </div>
                    <div class="bloco">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.952042965205!2d-46.341430801220184!3d-23.51441654958409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e3b2fc777b845e5!2sSorvetes%20Baby%209%20de%20Julho!5e0!3m2!1spt-BR!2sbr!4v1575468473347!5m2!1spt-BR!2sbr"
                            width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </li>
                <!-- <li id="uni08">
                    <p> Unidade Poá 3 </p>
                    <div class="bloco">
                        <p>Av. Getúlio Vargas, 845 - Calmon Viana - Poá/SP<br> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146342498' >
                            (11) 4634-2498
                        </a>
                        <br> Segunda a domingo, das 11h às 19h</p>
                    </div>
                    <div class="bloco">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4176.548684715053!2d-46.33856930515786!3d-23.52856256892906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7aef4d214c03%3A0xe378b1132c32be73!2sAv.%20Get%C3%BAlio%20Vargas%2C%20845%20-%20Calmon%20Viana%2C%20Po%C3%A1%20-%20SP%2C%2008560-000!5e0!3m2!1spt-BR!2sbr!4v1628857663444!5m2!1spt-BR!2sbr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> 
                </li> -->
                <li id="uni03">
                    <p>Unidade Suzano 1 </p>
                    <div class="bloco">
                        <p>Avenida Mogi das Cruzes, 311 - Parque Suzano - Suzano/SP<br> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551147422029' >
                            (11) 4742-2029
                        </a>
                        <br> Segunda a sábado das 10h30 às 18h30<br> Domingo e feriado das 11h às 18h </p>
                    </div>
                    <div class="bloco">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0632535542636!2d-46.323174085348334!3d-23.49423106500103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7b9f1ba6cb3d%3A0xe01d326cc5200c1c!2sAv.%20Miguel%20Badra%2C%202358%20-%20Cidade%20Miguel%20Badra%2C%20Suzano%20-%20SP%2C%2008690-010!5e0!3m2!1spt-BR!2sbr!4v1575468527585!5m2!1spt-BR!2sbr"
                            width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </li>
                <li id="uni04">
                    <p>Unidade Suzano 2 </p>
                    <div class="bloco">
                        <p>Avenida Miguel Badra, 2358 - Badra Baixo - Suzano/SP<br>
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551147495914' >
                            (11) 4749-5914
                        </a>
                        <br> Segunda a sábado das 16h às 22h<br> Domingo e feriado das 16h às 22h</p>
                    </div>
                    <div class="bloco">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8388067959295!2d-46.319777485347224!3d-23.538299366625417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7a6425a4f7cf%3A0xbd181d415e206c3!2sAv.%20Mogi%20das%20Cruzes%2C%20311%20-%20Parque%20Suzano%2C%20Suzano%20-%20SP%2C%2008673-010!5e0!3m2!1spt-BR!2sbr!4v1575468556008!5m2!1spt-BR!2sbr"
                            width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </li>
                <li id="uni09">
                    <p>Itaquaquecetuba </p>
                    <div class="bloco">
                        <p>Estr. Pinheirinho Novo, 2101 Box1 (Dentro do Semar Supermercado) Rec Monica-Itaquaquecetuba<br>
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+11949943231' >
                            (11) 94994-3231
                        </a>
                        <br> Segunda a sábado das 10h às 20h<br> Domingo e feriado das 10h às 18h</p>
                    </div>
                    <div class="bloco">
                   
                    </div>
                </li>
                

            </ul>
        </div>

        <style>
            .col2 p .fa-phone,
            .col2 p .fa-clock {
                margin-bottom: 20px;
            }
        </style>

        <div class="col2">
            <div class="mapa" id="uni01">
                <div class="bloco">
                    <p class="end"><i class="fas fa-map-marker-alt"></i> Rua Clemente Cunha Ferreira, 20 - Vila Perracine - Poá/SP </p>
                    <p><i class="fas fa-phone"></i> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146342656' >
                            (11) 4634-2656
                        </a><br> Segunda a sábado: <br>
                        <i class="fas fa-clock"></i> 9h às 18h<br> Domingo e feriado: <br>
                        <i class="fas fa-clock"></i> 11h às 18h</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.091812789611!2d-46.3530973853475!3d-23.529199966289777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7ad9a2541ee1%3A0xf644bb44a744c27a!2sRua%20Clemente%20Cunha%20Ferreira%2C%2020%20-%20Conj.%20Res.%20Bela%20Vista%2C%20Po%C3%A1%20-%20SP%2C%2008563-347!5e0!3m2!1spt-BR!2sbr!4v1575468433999!5m2!1spt-BR!2sbr"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="mapa" id="uni02" style="display: none">
                <div class="bloco">
                    <p class="end"><i class="fas fa-map-marker-alt"></i> Avenida Nove de Julho, 1438 - Vila das Acácias - Poá/SP </p>
                    <p><i class="fas fa-phone"></i> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146380737' >
                            (11) 4638-0737
                        </a><br> Segunda a sábado: <br>
                        <i class="fas fa-clock"></i> 10h30 às 18h30<br> Domingo e feriado: <br>
                        <i class="fas fa-clock"></i> 11h às 18h</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.952042965205!2d-46.341430801220184!3d-23.51441654958409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e3b2fc777b845e5!2sSorvetes%20Baby%209%20de%20Julho!5e0!3m2!1spt-BR!2sbr!4v1575468473347!5m2!1spt-BR!2sbr"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="mapa" id="uni03" style="display: none">
                <div class="bloco">
                    <p class="end"><i class="fas fa-map-marker-alt"></i> Avenida Mogi das Cruzes, 311 - Parque Suzano - Suzano/SP </p>
                    <p><i class="fas fa-phone"></i> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551147422029' >
                            (11) 4742-2029
                        </a><br> Segunda a sábado: <br>
                        <i class="fas fa-clock"></i> 10h30 às 18h30<br> Domingo e feriado: <br>
                        <i class="fas fa-clock"></i> 11h às 18h</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0632535542636!2d-46.323174085348334!3d-23.49423106500103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7b9f1ba6cb3d%3A0xe01d326cc5200c1c!2sAv.%20Miguel%20Badra%2C%202358%20-%20Cidade%20Miguel%20Badra%2C%20Suzano%20-%20SP%2C%2008690-010!5e0!3m2!1spt-BR!2sbr!4v1575468527585!5m2!1spt-BR!2sbr"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="mapa" id="uni04" style="display: none">
                <div class="bloco">
                    <p class="end"><i class="fas fa-map-marker-alt"></i> Avenida Miguel Badra, 2358 - Badra Baixo - Suzano/SP </p>
                    <p><i class="fas fa-phone"></i> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551147495914' >
                            (11) 4749-5914
                        </a><br> Segunda a sábado: <br>
                        <i class="fas fa-clock"></i> 16h às 22h<br> Domingo e feriado: <br>
                        <i class="fas fa-clock"></i> 16h às 22h</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8388067959295!2d-46.319777485347224!3d-23.538299366625417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7a6425a4f7cf%3A0xbd181d415e206c3!2sAv.%20Mogi%20das%20Cruzes%2C%20311%20-%20Parque%20Suzano%2C%20Suzano%20-%20SP%2C%2008673-010!5e0!3m2!1spt-BR!2sbr!4v1575468556008!5m2!1spt-BR!2sbr"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            
            <div class="mapa" id="uni08" style="display: none">
                <div class="bloco">
                    <p class="end"><i class="fas fa-map-marker-alt"></i> Av. Getúlio Vargas, 845 - Calmon Viana - Poá/SP
                    <p> <i class="fas fa-phone"></i> 
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+551146342498' >
                            (11) 4634-2498
                        </a> <br> 
                    Segunda a domingo: <br>
                    <i class="fas fa-clock"></i> 11h às 19h</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4176.548684715053!2d-46.33856930515786!3d-23.52856256892906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7aef4d214c03%3A0xe378b1132c32be73!2sAv.%20Get%C3%BAlio%20Vargas%2C%20845%20-%20Calmon%20Viana%2C%20Po%C3%A1%20-%20SP%2C%2008560-000!5e0!3m2!1spt-BR!2sbr!4v1628857663444!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="mapa" id="uni09" style="display: none">
                    <div class="bloco">
                        <p class="end"><i class="fas fa-map-marker-alt"></i> Estr. Pinheirinho Novo, 2101 Box1 (Dentro do Semar Supermercado) Rec Monica-Itaquaquecetuba</p>
                        <a onclick="gtag('event','Click', {'event_category':'Contato','event_label':'Telefone','value':0}); JSleadsAdd(3,'TELEFONE PONTOS VENDA');" href='tel:+11949943231' >
                        (11) 94994 3231
                        </a>
                        <br>
                        Segunda a sábado: <br>
                        <i class="fas fa-clock"></i> 10h às 20h<br>
                        Domingo e feriado: <br>
                        <i class="fas fa-clock"></i> 10h às 18h</p>
                    </div>

            </div>
            

        </div>
    </div>

    <div class="ttl_contato"> Entre em contato </div>
    <div class="wrapper">
        <?php include ('formulario.php')?>
    </div>


    <?php include ('core/mod_rodape/rodape.php')?>
</body>

</html>