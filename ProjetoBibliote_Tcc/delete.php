<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo.png" type="image/png">
    <title>Painel</title>
</head>

<body>

    <p>Bem vindo ao painel,
        <?php echo $_SESSION['name']; ?>
    </p>
    <p>
        <a href="logout.php">Sair</a>
    </p>



    <!-- <form action="painelCad.php" method="post">
        <div>
            <div>
                <input name="idLivro" type="text" placeholder="Código do Livro">
            </div>
        </div>
        <div>
            <div>
                <input name="livro" type="text" placeholder="Nome do livro" autofocus>
            </div>
        </div>
        <div>
            <div>
                <input name="genero" type="text" placeholder="Gênero">
            </div>
        </div>
        <div>
            <div>
                <input name="autor" type="text" placeholder="Autor">
            </div>
        </div>
        <div>
            <div>
                <input name="dtPosse"type="datetime-local">
            </div>
        </div>
        <button type="submit">Cadastrar livro</button>
    </form>

    <a href="livros.php">Ver livros Cadastrados</a> -->

</body>

</html>