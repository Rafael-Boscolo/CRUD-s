<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($id && $name && $email) {
    $sql = $pdo->prepare("UPDATE cadastro SET nome=:name, email=:email WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    header("Location: read.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}