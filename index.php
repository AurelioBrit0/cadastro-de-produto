<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: <?php echo htmlspecialchars($corDeFundo); ?>;
        }

        .tabela{
            position: relative;
            margin-top: 60px;
            margin-left: 600px;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #000000;
            box-shadow: 4px 4px #323232;
            background-color: #6e6ce2;
            width: 800px;
            height: auto;
        }
        .tabela td{
    padding: 6px 10px;
    background-color: #7e97f1;
    border-radius: 10px;
  
 }
    </style>
</head>
<body>
<?php error_reporting(E_ERROR); ?>

<div class="formulario" style="

">

<form action="cadastroproduto.php" method="POST">

            <div class="form-group">
                <input class="form_cadastro" type="text" id="nome" name="nome" placeholder="Nome" required="">
            </div></br>

            <div class="form-group">
                <input class="form_cadastro" type="text" id="descrição" name="descrição" placeholder="Descrição" required="">
            </div></br>

            <div class="form-group">
                <input class="form_cadastro" type="number" id="preço" name="preço" placeholder="Preço" required="">
            </div></br>

            <div class="form-group">
                <input class="form_cadastro" type="number" id="estoque" name="estoque" placeholder="Estoque" required="">
            </div></br>
            <button class="bnt_confirmar_registrar" type="submit" name="submit" style=" 
            margin-left: 113px;
    background-color: 1px solid black;
    box-shadow: 4px 4px #0e0d0d ;
    width: 94px;
    color: #0a0a0a;
    border-radius: 7px;
    font-size: 17px;">Confirmar!</button>
</form>
</div>
<div class="tabela">
            <table>
                <tr>
                    <td><b>Nome</b></td>
                    <td><b>Descrição</b></td>
                    <td><b>Preço</b></td>
                    <td><b>Estoque</b></td>
                    <td><b>Excluir</b></td>
                </tr>


                <?php
                $conexao = mysqli_connect("localhost", "root", "", "cadastro");
                $consulta = "SELECT * FROM estoque";
                $resultado = mysqli_query($conexao,$consulta);

                while ($linha = mysqli_fetch_array($resultado)){
                    $nome = $linha["nome"];
                    $descrição = $linha["descrição"];
                    $preço = $linha["preço"];
                    $estoque = $linha["estoque"];
                    echo "
                    <tr>
                        <td>$nome</td>
                        <td>$descrição</td>
                        <td>$preço</td>
                        <td>$estoque</td>
                        <td><a href='excluircadastro.php?nome=$nome'>excluir</a></td>
                    </tr>
                    ";
                }

            ?>

            </table>
        </div>



</body>
</html>