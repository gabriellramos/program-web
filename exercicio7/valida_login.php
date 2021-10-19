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
                  window.location='lista_usuarios.php';
                </script>";
      }
  }else 
    echo "<script> 
            alert('Falha ao efetuar login!');
            window.location='index.php';
          </script>";
  

  


?>