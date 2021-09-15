<?php
    include('admin/conecta-bd.php');

    $sql = $conexao->prepare("SELECT * FROM cursos ORDER BY nome");
    $sql->execute();
    $cursos = $sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

    <?php 
    $verifica['index']=false;
    $verifica['contato']=false;
    $verifica['cursos']=true; 
    include('menu.php'); ?>
    
    <div class="container">
        <h3>Listagem dos Cursos</h3>
        
        <table class="table-round-corner">
            <thead>
                <th>Nome</th>
                <th>Carga Horária</th>
                <th>Instituição</th>
            </thead>
            <tbody>

            <?php
            foreach ($cursos as $curso) {
            ?>
            <tr>
                <td><?php echo $curso['nome'];?></td>
                <td><?php echo $curso['carga_horaria'];?>hr</td>
                <td><?php echo $curso['instituicao']; ?></td>
            </tr>


            <?php
            }
            ?>

            </tbody>

        </table>

    </div>



</body>
</html>