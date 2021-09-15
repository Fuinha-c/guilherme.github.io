<?php
$username = 'root';
$password = '';
$charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {
    $conexao = new PDO('mysql:host=localhost;dbname=portfolio', $username, $password, $charset);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage(); 
}


?>