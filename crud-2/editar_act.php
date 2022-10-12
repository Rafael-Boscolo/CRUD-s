<?php 
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, 'telefone');

if($name && $email && $tel) {
    $sql = $pdo->prepare("UPDATE cadastro_user SET nome=:name, email=:email, telefone=:telefone WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $tel);
    $sql->execute();

    header("Location: read.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}