<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>

    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Animal";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de animais</h1>
    <a href="cadastroAnimal.html">Cadastrar novo animal</a>
    <table align="center" border="1" width="500">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Nascimento</th>
        <th>Castrado</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['dtnasc']."</td>";
            echo "<td>".$row['castrado']."</td>";
        }
    ?>
    </table>
</body>
</html>