<div class="formulario">
    <form name='form_contato' id='form_contato' enctype='multipart/form-data' method='post' action='envia_contato'>
        <input type='text' id='nome' name='nome' placeholder="Nome" class="obg">
        <input type='text' id='telefone' name='telefone' placeholder="Telefone" >
        <input type='text' id='email' name='email' placeholder="E-mail" class="obg">
        <textarea id='mensagem' name="mensagem" placeholder="Mensagem" class="obg"></textarea>
    </form>
    <div id="msg" style="display: none">
        <center> <i style='color: red'>Por favor, preencha todos os campos!</i> </center>
    </div>
    <div class='botao' id="bt_contato">
        <div id='botao3'>Enviar </div>
    </div>
</div>

<script>
    jQuery("#bt_contato").click(function() {
        var isValid = true;
        jQuery(".obg").each(function() {
            var element = $(this);
            if (element.val() == "") {
                isValid = false;
                element.css({
                    "border": "1px solid #F90F00"
                });
                $("#msg").css({
                    "display": "block"
                })
            } else {
                element.css({
                    "border": "1px solid #DDD"
                });
                jQuery("#form_contato").submit();
            }

        }); // each Function
    });
</script>