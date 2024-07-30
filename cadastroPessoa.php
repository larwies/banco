<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
</head>
<body>

    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $end = $_POST['end'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        echo "<h1>Dados da pessoa</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $email<br>";
        echo "Raça: $end<br>";
        echo "Nascimento: $bairro<br>";
        echo "Castrado: $cep<br>";

        $sql = "insert into Pessoa (nome, email, endereco, bairro, cep)";
        $sql .= " values('".$nome."','".$email."','".$end."','".$bairro."','".$cep."')";
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