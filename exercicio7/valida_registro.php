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
    echo "oi";
    if (valida_nome($nome) && valida_nome($sobrenome) &&
        validaCPF($cpf) && validaSenhas($senha1,$senha2)){
            $sql = "INSERT INTO `usuario` (`nome`, `sobrenome`, `cpf`, `senha`)
             VALUES ('$nome', '$sobrenome', '$cpf', '".sha1($senha1)."')";
            
            $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            
            if (!$result)
            
    }else if (!valida_nome($nome)){
        echo "<script> 
                alert('Erro no campo nome!');
            </script>";
    }else if (!valida_nome($sobrenome)){
        echo "<script> 
                alert('Erro no campo sobrenome!');
            </script>";
    }else if (!validaCPF($cpf)){
        echo "<script> 
                alert('Erro no campo CPF!');
            </script>";
    }else if (!validaSenhas($senha1,$senha2)){
        echo "<script> 
                alert('Senhas não conferem!');
            </script>";
    }

    
    
?>