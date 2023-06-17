<?php
include('conexao.php');
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert="insert into login (nome,login,senha)
values('$nome','$login','$senha')";

$query = mysqli_query($conexao,$insert);
header('location: index.php');

?>