<?php
$id = $_GET['id'];


$conexao = mysqli_connect("localhost", "root", "", "cadastro");

$delete = "delete from estoque where id = $id";

mysqli_query($conexao, $delete);

header("Location: index.php");
?>