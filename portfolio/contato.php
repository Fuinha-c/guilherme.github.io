<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio do Borges - Contato</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/contato.css">

</head>

<body>

    <?php
    $verifica['index']=false;
    $verifica['contato']=true;
    $verifica['cursos']=false;  
    include ('menu.php'); ?>

    <section>
        <!-- aqui vai o formulário de contato -->
        <aside >
            <form action="" class="contato" onsubmit= "return validaForm()" autocomplete="off">
                <input class="nome" id="nome" type="text" placeholder="Digite o seu nome" autocomplete="">
                <input class="email" id="email" type="text" placeholder="Digite o seu e-mail">
                <textarea id="mensagem" class="msg" maxlength="150" placeholder="Digite sua mensagem"></textarea>
                <span id="erro"></span>
                <button class="botao" type="submit">ENVIAR</button>
            </form>
        </aside>

        <!-- aqui vai o mapa -->

        <aside>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.516044597421!2d-51.0817793847198!3d-29.93583183319398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951973ec3e075645%3A0xd8c8063ceb1f0fd1!2sShopping%20do%20Vale!5e0!3m2!1spt-BR!2sbr!4v1628102938412!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </aside>
    </section>

<script src="js/contato.js"></script>




    
</body>

</html>
