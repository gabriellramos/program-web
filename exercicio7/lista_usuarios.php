<?php
    include 'links.php'; 
    include 'connection.php';

    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

    if ($result->num_rows > 0){
        echo "";
        while ($row = $result->fetch_assoc()){
            echo "Nome > ".$row["nome"]."    Email: ".$row["email"]."<br><br>";

        }

        $conn->close();
    }else echo "nenhum registro encontrado";

?>