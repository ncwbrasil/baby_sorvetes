
<?php
    include_once('api-leads-ncw/api.php');
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114287374-45"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-114287374-45');
</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">
<base href="https://<?php echo $_SERVER['HTTP_HOST'];?>/" />
<!-- <base href="http://<?php echo $_SERVER['HTTP_HOST'];?>/baby/" /> -->
<!-- INCLUDES PHP -->

<?php 
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    //require_once("core/mod_includes/php/ctracker.php");
    //require_once("core/mod_includes/php/parametros.php");
    //include ('core/mod_includes/php/connect.php');
    $ttl = "Sorvetes Baby"; 
?>

<!-- ESTILO CSS -->
<link rel="stylesheet" type="text/css" href="core/css/estilo.css">
<link rel="stylesheet" type="text/css" href="core/css/animate.css">
<link rel="shortcut icon" href="core/imagens/favicon.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- JAVASCRITP -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="core/mod_includes/js/jquery-1.8.3.min.js"></script>
<script src="core/mod_includes/js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+55 11 4636-3877", // WhatsApp number
            call_to_action: "Entre em contato!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget/bundle.js';
        s.onload = function () 
        { 
            WhWidgetSendButton.init(host, proto, options);

            jQuery(document).on("click",".q8c6tt-2",function()
            {                
                // EVENTO PARA GOOGLE ANALYTICS
                gtag('event','Click', {'event_category':'Widget','event_label':'Whatsapp','value':0});      

                // EVENTO PARA API LEADS NCW
                JSleadsAdd(1, 'WHATSAPP WIDGET');  
          
            });            
        };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);                
    })();    
</script>
<!-- /GetButton.io widget -->
