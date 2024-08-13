<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Animal</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $data_nascimento = $_POST['data_nascimento'];
        $castrado = ISSET($_post['ativo']) ? 1: 0;
        $pessoa = $_POST['pessoa'];

        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Especie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data de Nascimento: $data_nascimento<br>";
        echo "Castrado: $castrado<br>";

        $sql = "INSERT INTO Animal
                (nome,especie,raca,data_nascimento,castrado,id_pessoa)";
        $sql .= "VALUES ('".$nome."','".$especie."','".$raca."','".$data_nascimento."',".$castrado.",".$pessoa.")";

        //EXECUTA COMANDO NO BANCO DE DADOS
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!!!!</h2>";
            echo mysqli_error($con);
        }

    ?>
    <form action="index.html">
    <input type="submit" value="Ir para o Index" />
</form>
</body>
</html>