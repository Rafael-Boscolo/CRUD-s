<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <title>Cadastro mg-code</title>

</head>

<body>
    <div>
        <form method="POST" action="adicionar_action.php">
            <h1>Cadastre-se:</h1>
            <label>
                Nome: <br>
                <input type="text" name="nome">
            </label><br><br>

            <label>
                e-mail: <br>
                <input type="email" name="email">
            </label><br><br>

            <button>Cadastrar</button><br><br>

            <a href="read.php">Consultar Cadastro</a>   
        </form><br><br>
    </div>
</body>
</html>