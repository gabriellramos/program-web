<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Usuários</title>
  </head>
  <body>

    <?php
        include 'links.php'; 
        include 'connection.php';

        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

        if ($result->num_rows > 0){
            echo "<table class='table table-striped'>
                    <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Sobrenome</th>
                        <th scope='col'>CPF</th>
                    </tr>
                    </thead>
                    <tbody>";
            $cont = 1;
            while ($row = $result->fetch_assoc()){
                echo "<tr>
                        <th scope='row'>".$cont++."</th>
                        <td>".$row["nome"]."</td>
                        <td>".$row["sobrenome"]."</td>
                        <td>".$row["cpf"]."</td>
                    </tr>";
            }
            echo "</tbody></table>";
            $conn->close();
        }else echo "<h2>Nenhum registro encontrado</h2>";

    ?>