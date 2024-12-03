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
$nome=$_POST['nome'];
$preco=$_POST['preco'];
$categoria=$_POST['categoria'];


    $sql= "INSERT INTO produtos(nome,preco,id_categoria)
    VALUES('$nome','$preco', '$categoria')";
    if($conexao=mysqli_query($conexao, $sql)){
        echo"cadastro realizado com sucesso";
    }
    else{
        echo"erro ao cadastra-se";
    }
    
?>
<br>
<button><a href="index.php">Voltar</a></button>
</body>
</html>
