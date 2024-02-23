<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!--META TAGS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sorvetes Baby" />
    <meta property="og:description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique.' />
    <meta property="og:image" content="https://babysorvetes.com.br/core/imagens/thumb.jpg" />
    <meta property="og:url" content="https://babysorvetes.com.br/produtos" />
    <meta property="og:image:type" content="image/jpeg">
    <meta name="copyright" content="MogiComp Soluções Web">
    <meta name="description" content='Fundada em 24 de agosto de 2009, a Sorvetes Baby é uma realização do Sr. Carlos Henrique'>

    <?php include('header.php');?>
    <title>
        <?php echo $ttl;?> - Sorvetes, Açaí, Picolés, Sundae
    </title>
    <script language="javascript">
        $(document).ready(function() {
            $('.bloco2 .bloco').click(function() {
                var id = $(this).attr('id');
                $('.prod').fadeOut(100);
                $('.bloco1 #' + id).fadeIn(500);
                $('.descricao #' + id).fadeIn(500);
            });
        });
    </script>
    <style>
        .catalogo.pdf {
            text-decoration: none;
        }
        
        a {
            text-decoration: none;
        }
        
        .catalogo-pdf .ttl_contato {
            transition: 0.2s
        }
        
        .catalogo-pdf .ttl_contato:hover {
            background: #3aa635;
        }
        
        .texto-catalogo:hover {
            -webkit-transform: scale(1.3);
            -ms-transform: scale(1.3);
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <main>
        <?php 

#region MOD INCLUDES
	include('core/mod_topo/topo.php');
	include	('core/mod_includes/php/funcoes-jquery.php');
#endregion
?>

        <a href="tabela-valores.pdf" title="Baixe nosso catálogo de preços" target="_blank" class="catalogo-pdf">
            <div class="ttl_contato texto-catalogo" style="font-size: 18pt;">
                <span><i class="fa fa-download" aria-hidden="true"></i> Baixe nosso catálogo </span>
            </div>
        </a>


        <div class="produtos">
            <div class="bloco1">
                <div class="prod" id='prod1'>
                    <h2><p class="titulo"> Açaí </p></h2>
                    <p></p>
                </div>
                <div class="prod" id='prod2' style='display:none'>
                    <h2><p class="titulo"> Caixas de Sorvete </p></h2>
                    <p>As caixas de <span class="amarelo"> 5 e 10 litros </span> oferecem um ótimo custo-benefício para o seu negócio, além de diversos sabores deliciosos.</p>
                </div>
                <div class="prod" id='prod3' style='display:none'>
                    <h2><p class="titulo"> Copão </p></h2>
                    <p>Explosão de sabor <span class="amarelo">que não cabe no copo.</span></p>
                </div>
                <div class="prod" id='prod4' style='display:none'>
                    <h2><p class="titulo"> Picolés </p></h2>
                    <p>Para todos os gostos, a <span class='amarelo'>qualquer momento</span>.</span>
                    </p>
                </div>
                <div class="prod" id='prod5' style='display:none'>
                    <h2><p class="titulo"> Potes de Sorvete</p></h2>
                    <p><b class='amarelo'>1l e 2l </b> <br> Chame os amigos e a família, a sobremesa será deliciosa! </p>
                </div>
                <div class="prod" id='prod6' style='display:none'>
                    <h2><p class="titulo"> Sundae </p></h2>
                    <p>Perfeito para tomar sozinho ou na companhia de alguém especial.</p>
                </div>

            </div>

            <div class="bloco2">
                <div class="produto">
                    <div class='bloco wow bounceIn' id="prod1">
                        <img src="core/imagens/prod1.png" alt="Açaí">
                        <span class="prod_nome"> Açaí </span>
                    </div>
                    <div class='bloco wow bounceIn' id="prod2">
                        <img src="core/imagens/prod2.png" alt="Caixas">
                        <span class="prod_nome"> Caixas </span>
                    </div>
                    <div class='bloco wow bounceIn' id="prod3">
                        <img src="core/imagens/prod3.png" alt="Copão">
                        <span class="prod_nome"> Copão </span>
                    </div>
                    <div class='bloco wow bounceIn' id="prod4">
                        <img src="core/imagens/prod4.png" alt="Picolés">
                        <span class="prod_nome"> Picolés </span>
                    </div>
                    <div class='bloco wow bounceIn' id="prod5">
                        <img src="core/imagens/prod5.png" alt="Potes">
                        <span class="prod_nome"> Potes </span>
                    </div>
                    <div class='bloco wow bounceIn' id="prod6">
                        <img src="core/imagens/prod6.png" alt="Sundae">
                        <span class="prod_nome"> Sundae </span>
                    </div>

                </div>

            </div>

            <div class="descricao">
                <div class="prod" id='prod1'>
                    <img src='core/imagens/produ1.png' alt="Açaí 2">
                    <div id="descricao">
                        <div class="desc">
                            <p>Nosso delicioso açaí, disponível em diversos tamanhos, para todas as ocasiões.
                        </div>
                    </div>
                </div>

                <div class="prod" id='prod2' style='display:none'>
                    <img src='core/imagens/produ2.png' alt="Caixas 2">
                    <div id="descricao">
                        <div class="desc">
                            <p><b class='amarelo'>Sabores</b>: Abacaxi ao vinho, Beijinho, Bombom, Brigadeiro, Blue Ice, Chiclete, Chocolate, Chocolate branco, Chocomenta, Coco, Creme, Cupuaçu, Bombom Baby, Flocos, Chocolate branco com amendoim, Iogurte
                                com amora, Bombom Branco, Leite condensado, Limão, Maracujá, Maracujá trufado, Mangaba, Milho, Morango, Morango trufado, Napolitano, Milk trufado, Chocotine, Passas ao rum, Pistache, Chococo, Sensações Baby e Uva.
                        </div>
                    </div>
                </div>

                <div class="prod" id='prod3' style='display:none'>
                    <img src='core/imagens/produ3.png' alt="Copão 2">
                    <div id="descricao">
                        <div class="desc">
                            <p><b class='amarelo'>Sabores</b>: Abacaxi ao vinho, Bombom, Chocolate, Coco, Bombom Baby, Flocos, Iogurte com amora, Leite condensado, Maracujá, Milho, Morango, Napolitano e Sensações Baby.
                        </div>
                    </div>
                </div>

                <div class="prod" id='prod4' style='display:none'>
                    <img src='core/imagens/produ4.png' alt="Picolés 2">
                    <div id="descricao">
                        <div class="desc">
                            <p><b class='amarelo'>Linha Fresh</b>: Abacaxi, Limão, Maracujá e Uva. <br>
                                <b class='amarelo'>Linha Tradicional</b>: Abacaxi com coco, Abacaxi com vinho, Abóbora com coco, Açaí, Amendoim, Beijinho, Blue Ice, Chiclete, Chocolate, Chocolate branco, Coco, Coco queimado, Cupuaçu, Bombom Baby, Delírio-Cho-Coco,
                                Flocos, Goiaba, Leite condensado, Limão suíço, Milho verde, Minissaia, Morango, Mousse de maracujá, Napolitano, Romeu e Julieta, Sensações Baby e Uva de leite. <br>
                                <b class='amarelo'>Linha Especial</b>: Skibaby Coco e Skibaby Morango.</br>
                                <b class='amarelo'>Linha Premium</b>: Brigadeiro, Bablito e Trufa de Chocolate.
                        </div>
                    </div>
                </div>

                <div class="prod" id='prod5' style='display:none'>
                    <img src='core/imagens/produ5.png' alt="Potes 2">
                    <div id="descricao">
                        <div class="desc">
                            <p><b class='amarelo'>Sabores</b>: Abacaxi ao vinho, Chocolate, Cupuaçu, Bombom Baby, Flocos, Iogurte com amora, Morango, Napolitano, Milk trufado, Passas ao rum e Sensações Baby.
                        </div>
                    </div>
                </div>

                <div class="prod" id='prod6' style='display:none'>
                    <img src='core/imagens/produ6.png' alt="Sundae 2">
                    <div id="descricao">
                        <div class="desc">
                            <p><b class='amarelo'>Sabores</b>: Abacaxi ao vinho, Baunilha, Chocolate e Morango.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="wrapper" id="produtos2">
            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> Açaí </p>
                    <img src='core/imagens/produ1.png' alt="Açaí 3">
                    <p class="destaque">Nosso delicioso açaí, disponível em diversos tamanhos, para todas as ocasiões. </p>
                </div>
            </div>

            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> Caixas </p>
                    <img src='core/imagens/produ2.png' alt="Caixas 3">
                    <p class="destaque">As caixas de <span class="verde"> 5 e 10 litros </span> oferecem um ótimo custo-benefício para o seu negócio, além de diversos sabores deliciosos.</p>
                    <p><b class='verde'>Sabores</b>: Abacaxi ao vinho, Beijinho, Bombom, Brigadeiro, Blue Ice, Chiclete, Chocolate, Chocolate branco, Chocomenta, Coco, Creme, Cupuaçu, Bombom Baby, Flocos, Chocolate branco com amendoim, Iogurte com amora,Bombom
                        Branco, Leite condensado, Limão, Maracujá, Maracujá trufado, Mangaba, Milho, Morango, Morango trufado, Napolitano, Milk trufado, Chocotine, Passas ao rum, Pistache, Chococo, Sensações Baby e Uva.
                </div>
            </div>

            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> copão </p>
                    <img src='core/imagens/produ3.png' alt="Copão 3">
                    <p class="destaque">Explosão de sabor <span class="verde">que não cabe no copo.</span></p>
                    <p><b class='verde'>Sabores</b>: Abacaxi ao vinho, Bombom, Chocolate, Coco, Bombom Baby, Flocos, Iogurte com amora, Leite condensado, Maracujá, Milho, Morango, Napolitano e Sensações Baby.
                </div>
            </div>

            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> Picolés </p>
                    <img src='core/imagens/produ4.png' alt="Picolés 3">
                    <p class="destaque">Para todos os gostos, a <span class='verde'>qualquer momento</span>.</span>
                    </p>
                    <p><b class='verde'>Linha Fresh</b>: Abacaxi, Limão, Maracujá e Uva. <br>
                        <b class='verde'>Linha Tradicional</b>: Abacaxi com coco, Abacaxi com vinho, Abóbora com coco, Açaí, Amendoim, Beijinho, Blue Ice, Chiclete, Chocolate, Chocolate branco, Coco, Coco queimado, Cupuaçu, Delírio-Cho-Coco, Flocos, Goiaba,
                        Leite condensado, Limão suíço, Milho verde, Minissaia, Morango, Mousse de maracujá, Napolitano, Romeu e Julieta, Sensações Baby e Uva de leite. <br>
                        <b class='verde'>Linha Especial</b>: Skibaby Coco e Skibaby Morango.</br>
                        <b class='verde'>Linha Premium</b>: Brigadeiro, Bablito e Trufa de Chocolate.
                </div>
            </div>

            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> Potes</p>
                    <img src='core/imagens/produ5.png' alt="Potes 3">
                    <p class="destaque"><span class="verde">1l e 2l </span> Chame os amigos e a família, a sobremesa será deliciosa! </p>
                    <p><b class='verde'>Sabores</b>: Abacaxi ao vinho, Chocolate, Cupuaçu, Bombom Baby, Flocos, Iogurte com amora, Morango, Napolitano, Milk trufado, Passas ao rum e Sensações Baby.
                </div>
            </div>

            <div class="prod wow bounceIn">
                <div id="descricao">
                    <p class="titulo"> Sundae </p>
                    <img src='core/imagens/produ6.png' alt="Sundae 3">
                    <p class="destaque">Perfeito para tomar sozinho ou na companhia de alguém especial.</p>
                    <p><b class='verde'>Sabores</b>: Abacaxi ao vinho, Baunilha, Chocolate e Morango.
                </div>
            </div>

        </div>

        <div class="wrapper">
            <p class="verde"><b>Linha base leite</b></p>
            <p>Contém: Leite e derivados de leite e soja; <br>
            Podem conter: Amendoim, pistache, nozes, castanhas, abacaxi, coco, cacau, avelã. <br>
            Podem conter traços de: Amendoim, pistache, nozes, castanhas, abacaxi, coco, cacau, avelã, ovos e trigo.</p>

            <p class="verde"><b>Açaís e linha base água</b></p>
            <p>Podem conter traços de: Amendoim, pistache, nozes, castanhas, abacaxi, coco, cacau, avelã, ovos e trigo.</p>
        </div>

        <div class="ttl_contato"> Entre em contato </div>

        <div class="wrapper">
            <?php include ('formulario.php')?>
        </div>
    </main>
    <?php include ('core/mod_rodape/rodape.php')?>
</body>

</html>