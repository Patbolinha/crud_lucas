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
$id=$_POST['id'];
$nome=$_POST['nome'];
$preco=$_POST['preco'];
$categoria=$_POST['categoria'];


    $sql= "UPDATE produtos SET nome = '$nome', preco = '$preco', id_categoria = '$categoria' WHERE id_produto='$id'";
    if($conexao=mysqli_query($conexao, $sql)){
        echo"alterado com sucesso";
    }
    else{
        echo"erro ao cadastra-se".mysqli_connect_error($conexao);
    }
    ?>
    <br>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>



