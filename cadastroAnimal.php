<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>

    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $dtnasc = $_POST['dtnasc'];
        $castrado = $_POST['castrado'];
        echo "<h1>Dados do animal</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Nascimento: $dtnasc<br>";
        echo "Castrado: $castrado<br>";

        $sql = "insert into Animal (nome, especie, raca, dtnasc, castrado )";
        $sql .= " values('".$nome."','".$especie."','".$raca."','".$dtnasc."','".$castrado."')";
        echo $sql;

        //executa comando no banco de dados
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>

</body>
</html>