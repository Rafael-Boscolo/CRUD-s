<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'nome'); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, 'telefone');


if($email) {
    $sql = $pdo->prepare("SELECT * FROM cadastro_user WHERE email=:email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO cadastro_user (nome, email, telefone) VALUE (:name, :email, :telefone)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $tel);
        $sql->execute();
    
        header("Location: read.php");
        exit;
    } else {
        header("Location: index.html");
        exit;
    }

} else {
    header("Location: index.html");
    exit;
}