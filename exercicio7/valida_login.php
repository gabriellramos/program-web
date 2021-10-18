<?php
  include "connection.php";
  
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $sql = "SELECT * FROM usuario WHERE email='".$email."' and senha='".$senha."'";
  $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

  if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()){
          echo "<script> 
                  alert('Login efetuado com sucesso!');
                </script>";

      }
  }else echo "alert('Falha ao efetuar login!)";


?>