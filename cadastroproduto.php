<?php
$nome = $_POST['nome'];
$descrição = $_POST['descrição'];
$preço = $_POST['preço'];
$estoque = $_POST['estoque'];

$conexao = mysqli_connect("localhost", "root", "", "cadastro");

$insert = "insert into estoque (nome, descrição, preço, estoque) values ('$nome', '$descrição', '$preço', '$estoque')";

mysqli_query($conexao, $insert);

header("Location: index.php");
?>