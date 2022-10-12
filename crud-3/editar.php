<?php
require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if ($id){
    $sql = $pdo->prepare("SELECT * FROM cadastro_new WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
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
    <label>
        Nome:
    </label><br>
    <input type="text" name="nome" value="<?=$info['nome'];?>" ><br><br>

    <label>
        email:
    </label><br>
    <input type="email" name="email" value="<?=$info['email'];?>" ><br><br>

    <button>Atualizar!</button>
    <br>
</form>