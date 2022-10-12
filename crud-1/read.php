<?php
require 'config.php';

$sql = $pdo->query("SELECT * FROM cadastro");

$list = [];

if($sql->rowCount() > 0) {
    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<table width="100%" border="1px">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>ações</th>
    </tr>

    <?php foreach($list as $usuario):?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>"><button>Editar</button></a>

                <a href="excluir.php?id=<?=$usuario['id']; ?>" onclick="return confirm('Cereteza que deseja deletar?')" ><button>Excluir</button></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table><br><br>

<a href="index.php"><button>Tela inicial</button></a>