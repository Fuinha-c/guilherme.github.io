<?php 

 include ('conecta-bd.php');

    $sql= $conexao->prepare("SELECT * FROM cursos ORDER BY nome");
    $sql->execute();
    $cursos = $sql->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Nomes</title>
</head>
<body>
   <?php  include('menu.php'); ?>

<div class="container">

    <hr>
    <h3>Nomes dos Cursos</h3>
    <hr>

    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>       
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($cursos as $curso) {  ?>

                <tr>
                    <td><?php echo $curso['nome'];?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>    
            
        <hr>
    <a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i>Voltar</a>
</div>

</body>
</html>























