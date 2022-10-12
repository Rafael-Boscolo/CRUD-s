<?php
require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare("SELECT * FROM cadastro_user WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.html");
        exit;
    }

} else {
    header("Location: index.html");
    exit;
}
?>

<form method="POST" action="editar_act.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>">
        <h1>Editar Usuário:</h1>
        <h3>Nome:</h3>
        <input type="text" name="nome" value="<?=$info['nome'];?>" >

        <h3>e-mail:</h3>
        <input type="email" name="email" value="<?=$info['email'];?>" >

        <h3>Telefone:</h3>
        <input type="text" name="telefone" value="<?=$info['telefone'];?>" >
        <br><br>

        <button>Editar</button>
</form>