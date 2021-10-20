<?php
    
    $dir = "files/";

        $filename = $_POST["filename"];
        $text = $_POST["textarea1"];
        if (preg_match("/.txt/",$filename)){
            echo "if 1";
            $filename = $dir.$filename;
            echo $filename;
            $file = fopen($filename,"w+") or die("incapaz de abrir o arquivo");
            fwrite($file,$text);
            echo "<script> 
                  alert('Arquivo salvo com sucesso!');
                  window.location='index.php';
                </script>";    
        }else{
            echo "else 1";
            $filename = $dir.$filename.".txt";
            $file = fopen($filename,"w+") or die("incapaz de abrir o arquivo");
            fwrite($file,$text);
            echo "<script> 
                  alert('Arquivo salvo com sucesso!');
                  window.location='index.php';
                </script>";
        }

        fclose($file);
?>