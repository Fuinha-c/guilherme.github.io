<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <div class="container">
            <a href="index.php"><img src="img/logotipo.png" alt="logotipo"></a>


            <nav class="menu">
                <a <?php if($verifica['index']==true) echo "class='on'" ?> href="index.php">Home</a>
                <a <?php if($verifica['contato']==true) echo "class='on'" ?> href="contato.php">Contato</a>
                <a <?php if($verifica['cursos']==true) echo "class='on'" ?> href="cursos.php">Cursos</a>
            </nav>

        </div>
    </header>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="js/on.js"></script>


</body>
</html>