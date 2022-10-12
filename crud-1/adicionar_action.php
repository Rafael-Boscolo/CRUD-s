<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($email){
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    if($sql->rowCount() === 0 ){
        $sql = $pdo->prepare("INSERT INTO cadastro (nome, email) VALUE (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
    
        header("Location: read.php");
        exit;
        
    } else {
        header("Location: index.php");
        exit;
    }
}else {
    header('Location: index.php');
    exit;
}
