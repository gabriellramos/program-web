<?php 
    # Substitua abaixo os dados, de acordo com o banco criado
    $user = "root"; 
    $password = ""; 
    $database = "aulaphp"; 

    # O hostname deve ser sempre localhost 
    $hostname = "localhost"; 

    # Conecta com o servidor de banco de dados 
    $conn = mysqli_connect($hostname, $user, $password, $database); 
    
    if (!$conn){
        die ("Falha na conexão! ".mysqli_connect_error());
    }

    
    
?>