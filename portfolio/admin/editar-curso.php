
<?php
include('conecta-bd.php');

    if (isset($_GET['id_curso']) ) {
        $id_curso = $_GET['id_curso'];

        // para recuperar as informações deste registro no banco utilizamos o seguinte

        $sql = $conexao->prepare("SELECT * FROM cursos WHERE id_curso = $id_curso");
        $sql->execute();
        $curso = $sql->fetchAll();

        $nome = $curso[0]['nome'];
        $carga_horaria = $curso[0]['carga_horaria'];
        $instituicao = $curso[0]['instituicao'];



    }else {
        header('location:listar-cursos.php');
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php include('menu.php') ?>

    <div class="container">
        <h3 >Editar Curso</h3>
        <hr>

        <form action="atualizar-curso.php" method="POST" class="form-inline">

        <input value="<?php echo $nome; ?>" type="text" name="nome" placeholder="Nome do curso" required class="form-control" size="50" maxlength="50">

        <input value="<?php echo $carga_horaria; ?>" type="number" name="carga_horaria" placeholder="Carga horária" required class="form-control">

        <input value="<?php echo $instituicao; ?>" type="text" name="instituicao" placeholder="Instituição" required class="form-control" size="50" maxlength="50">

        <input type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">

        <button type="submit" class="btn btn-success">
            <i class="glyphicon glyphicon-floppy-disk" ></i> 
            Salvar
        </button>


        </form>


        <hr>
        <a href="listar-cursos.php" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i>Voltar</a>
    
    </div>
</body>
</html>