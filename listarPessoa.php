<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>

    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Pessoa";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de pessoas</h1>
    <a href="cadastroPessoa.html">Cadastrar nova pessoa</a>
    <table align="center" border="1" width="800">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>CEP</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['endereco']."</td>";
            echo "<td>".$row['bairro']."</td>";
            echo "<td>".$row['cep']."</td>";
        }
    ?>
    </table>
</body>
</html>