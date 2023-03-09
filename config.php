<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'startup';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName)

?>

<?php

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO contato(nome, email, comentario) VALUES ('$nome', '$email', '$mensagem')");

?>
