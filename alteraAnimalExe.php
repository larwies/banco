<?php

    include('includes/conexao.php');
    $id =$_POST['id'];
    $nome =$_POST['nome'];
    $especie =$_POST['especie'];
    $raca =$_POST['raca'];
    $data_nascimento =$_POST['data_nascimento'];
    $castrado=$_POST['castrado'];
    $pessoa =$_POST['pessoa'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALterar</title>
</head>
<body>
    <h1>Alteração de Cliente</h1>
    <?php
    echo "<p>ID: $id</p>";
    echo "<p>NOME: $nome</p>";
        $sql = "UPDATE Animal SET 
                    nome  = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    data_nascimento = '$data_nascimento',
                    castrado = '$castrado',
                    id_pessoa = '$pessoa'
                WHERE id = $id ";
        $result = mysqli_query($con,$sql);
        if ($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao Atualizar dados!\n"
            .mysqli_error($con);
    ?>
    <form action="index.html">
    <input type="submit" value="Ir para o Index" />
</body>
</html>