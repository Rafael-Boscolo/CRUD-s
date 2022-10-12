<?php
require 'config.php';

$sql = $pdo->query("SELECT * FROM cadastro_user");

$list = [];

if($sql->rowCount()>0){
    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<table width="100%" border="1px">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    <?php foreach($list as $user):?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['nome'];?></td>
            <td><?=$user['email'];?></td>
            <td><?=$user['telefone'];?></td>
            <td>
                <a href="editar.php?id=<?=$user['id'];?>"><button>Editar</button></a>

                <a href="excluir.php?id=<?=$user['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')"><button>Excluir</button></a>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<a href="index.html"><button>Tela Inicial</button></a>