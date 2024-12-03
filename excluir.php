<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ("conexao.php");
    $id = $_POST["id"];
    $nome = $_POST['nome'];

    $sql= "DELETE FROM produtos WHERE id_produto = $id";

    if($conexao=mysqli_query($conexao, $sql)){
        echo"Deletado com sucesso";
    }
    else{
        echo"erro ao cadastra-se";
    }
    ?>
    <br>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>