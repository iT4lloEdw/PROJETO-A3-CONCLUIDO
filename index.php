<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoA3</title>
    <link rel="stylesheet" href="estiloindex.css">
</head>
<body>
<div id="corpo-form">
</div> 
<center>

<?php
session_start();
?>
<html>
<body>
    <center>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
                <a href="cadastrar.php">Cadastrar Usuário</a><br><br>
                <a href="listar.php">Listar Usuários</a><br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php">Alterar Senha</a><br>
            <a href="logout.php">Sair</a><br>
            <?php
        } else {
            ?>
            Olá, visitante. <a href="login.php">Login</a>
            <?php
        }
        ?>
    </center>
</body>
</html>