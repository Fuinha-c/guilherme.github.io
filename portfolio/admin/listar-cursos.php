<?php
    include('conecta-bd.php');

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
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/hover.css">
</head>
<body>

    <?php include('menu.php') ?>

    <div class="container">
        <h3>Listagem de Cursos</h3>
        <hr>
        <a href="cadastrar-curso.php" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i>Novo</a>
        <hr>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Carga Horária</th>
                    <th>Instituição</th>
                    <th class="text-right">Ações</th>
                </tr>
            </thead>
            <tbody>

            <?php
            foreach ($cursos as $curso) {
            ?>
                    <!-- abrir e fechar o php antes das TD  -->

                <tr>
                    <td><?php echo $curso['nome'];?></td>
                    <td><?php echo $curso['carga_horaria'];?>hr</td>
                    <td><?php echo $curso['instituicao'];?></td>

                   
                    <td class="text-right">

                        

                        <a href="editar-curso.php?id_curso=<?php echo $curso['id_curso']; ?>"  class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>

                        

                        <a data-toggle="modal" data-target="#modal-exclusao-<?php echo $curso['id_curso']; ?>" href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>
                        <?php include('modal.php'); ?>
                    </td>
                </tr>

                <!-- abrir e fechar o php somente para a }  -->

            <?php
            }
            ?>

            </tbody>


        </table>
        <hr>
        <a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i>Voltar</a>


    </div>
</body>
</html>


 <!-- text right para movimentar o texto para direita -->


<!-- botao de excluir glyphicon trash -->

<!-- lapis editor glyphicon-pencil -->