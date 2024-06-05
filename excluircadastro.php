<?php
$nome = $_GET['nome'];


$conexao = mysqli_connect("localhost", "root", "", "cadastro");

$delete = "delete from estoque where nome = $nome";

mysqli_query($conexao, $delete);

header("Location: index.php");
?>