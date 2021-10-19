<?php
  include "connection.php";
  
  $cpf = $_POST["cpf"];
  $senha = sha1($_POST["senha"]);
  $sql = "SELECT * FROM usuario WHERE cpf='".$cpf."' and senha='".$senha."'";
  $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

  if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()){
          echo "<script> 
                  alert('Login efetuado com sucesso!');
                </script>";
          header("Location: lista_usuarios.php");
      }
  }else {
    echo "<script> 
                alert('Falha ao efetuar login!');
              </script>";
    header("Location: index.php");
  }

  


?>