<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoA3</title>
    <link rel="stylesheet" href="estilolistar.css">
</head>
<body>
<div id="corpo-form">
</div> 
<center>

<?php
include("conexao.php");

// Consulta para recuperar os nomes dos usuários cadastrados
$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    // Exibe os nomes dos usuários cadastrados
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>