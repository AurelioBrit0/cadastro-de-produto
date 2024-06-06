<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$conexao = mysqli_connect("localhost", "root", "", "cadastro");

$insert = "insert into estoque (nome, descricao, preco, estoque) values ('$nome', '$descricao', $preco, $estoque)";

mysqli_query($conexao, $insert);

header("Location: index.php");
?>