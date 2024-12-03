<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    include ("conexao.php");
    $id = $_GET["id"] ?? '';
    $sql= "SELECT * FROM produtos WHERE id_produto = $id";

    $dados= mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>
                <form action="editcard.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">

                        <label for="email" class="form-label">preco</label>
                        <input type="int" class="form-control" name="preco" required value="<?php echo $linha['preco'];?>">

                        <label for="senha" class="form-label">categoria</label>
                        <input type="text" class="form-control" name="categoria" required value="<?php echo $linha['id_categoria'];?>">

                        <input type="submit" class="btn btn-success" value="salvar alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['id_produto'];?>">
                    </div>

          




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>