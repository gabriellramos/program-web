<?php
    include 'connection.php';
    include 'functions_validacao.php';

    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $senha1 = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    echo $nome;
    echo $sobrenome;
    echo $cpf;
    echo $senha1;
    echo $senha2;
    
    if (valida_nome($nome) && valida_nome($sobrenome) &&
        validaCPF($cpf) && validaSenhas($senha1,$senha2)){
            $sql = "INSERT INTO `usuario` (`nome`, `sobrenome`, `cpf`, `senha`)
             VALUES ('$nome', '$sobrenome', '$cpf', '".sha1($senha1)."')";
            
            $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            
            if (!$result){
                die('Erro: '.mysqli_error($conn));
            }else{
                echo "<script> 
                        alert('Cadastro realizado com sucesso!');
                    </script>";

                header("Location: lista_usuarios.php");
            }
            
    }else if (!valida_nome($nome)){
        echo "<script> 
                alert('Erro no campo nome!');
                window.location='lista_usuarios.php';
            </script>";
            
    }else if (!valida_nome($sobrenome)){
        echo "<script> 
                alert('Erro no campo sobrenome!');
                
                window.location='registro.php';
            </script>";
    }else if (!validaCPF($cpf)){
        echo "<script> 
                alert('Erro no campo CPF!');
                
                window.location='registro.php';
            </script>";
            
    }else if (!validaSenhas($senha1,$senha2)){
        echo "<script> 
                alert('Senhas não conferem!');
                
                window.location='registro.php';
            </script>";
            
    }
    
?>