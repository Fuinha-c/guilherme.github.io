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
        <h3 >Cadastrar Curso</h3>
        <hr>

        <form action="inserir-curso.php" method="POST" class="form-inline">

        <input type="text" name="nome" placeholder="Nome do curso" required class="form-control" size="50" maxlength="50">

        <input type="number" name="carga_horaria" placeholder="Carga horária" required class="form-control">

        <input type="text" name="instituicao" placeholder="Instituição" required class="form-control" size="50" maxlength="50">

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