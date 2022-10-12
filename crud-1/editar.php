<?php
require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else {
        header("Location: index.php");
        exit;
    }
}else {
    header("Location: index.php");
    exit;
}
?>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$info['id']; ?>">
        <h1>Atualizar Cadastro:</h1>
        <label>
            Nome: <br>
            <input type="text" name="nome" value="<?=$info['nome']; ?> ">
        </label><br><br>

        <label>
            e-mail: <br>
            <input type="email" name="email" value="<?=$info['email']; ?>">
        </label><br><br>

        <button>Editar</button>
</form><br><br>