<?php

$dir = "files/"; 
$temp = $_FILES['userfile']['tmp_name'];
$extensao = pathinfo($_FILES['userfile']['name'],PATHINFO_EXTENSION);
// recebendo o arquivo multipart  
$name_arquivo = trim($_FILES['userfile']['name'],".$extensao").".$extensao";
// Move o arquivo da pasta temporaria de upload para a pasta de destino 
if (move_uploaded_file($temp,$dir.$name_arquivo)) { 
    echo "Arquivo enviado com sucesso!";
    /*echo "<script> 
            alert('Arquivo enviado com sucesso!');
            window.location='form_upload.php';
        </script>";  
        */
} 
else { 
    
    echo "<script> 
            alert('Erro, o arquivo não pode ser enviado');
            //window.location='form_upload.php';
        </script>";  
    
}     
echo 'Aqui está mais informações de debug:';
print_r($_FILES);

?>