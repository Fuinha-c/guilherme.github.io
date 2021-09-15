<?php
include('conecta-bd.php');

// primeiro validamos com o "isset" se as variaveis esperadas foram enviadas
if(isset($_POST['nome']) && isset( $_POST ['carga_horaria'] ) ) {

    // se tudo correr bem podemos seguir com a inserção do nosso novo registro

    $nome = $_POST['nome'];
    $instituicao = $_POST['instituicao'];
    $carga_horaria = $_POST['carga_horaria'];
    

    // chamadas para o banco de dados
    $sql= $conexao->prepare("INSERT INTO cursos (nome, carga_horaria, instituicao) VALUES ('$nome', '$carga_horaria', '$instituicao')");
    $sql->execute();

}

    // redirecionamento do usuario para a tela de listagem novamente
    // comando header é especifico para PHP

    header('location:listar-cursos.php');


?>