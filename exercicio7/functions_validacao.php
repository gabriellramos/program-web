<?php

function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

function valida_nome($str){  
    $r = str_split($str);
    $valida = false;
    foreach ($r as $char){

        if (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' '){
            //echo $char;
            $valida = true;
        }
        else{
            $valida = false;
            break;
        } 
    }
    return $valida;
}

function verificaValoresSenha($str){
    
    $r = str_split($str);

    $result = array_unique($r);
    echo "--------".strlen($str)." ------ ".count($result)."------";
    if (strlen($str) == count($result))
        return true;

    return false;
}


function validaSenhas($str1, $str2){

    if ($str1 === $str2)
        if (verificaValoresSenha($str1) && strlen(($str1) >= 6)){
            echo "função senha ok";
            return true;
        }

    return false;
}

function validaEmail($email){
    
    // Remove os caracteres ilegais, caso tenha
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Valida o e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
       return false;
    }

}
?>