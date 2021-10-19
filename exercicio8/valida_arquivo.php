<?php
    $dir = "/files/";
    if (!isset($_POST["filename"]) && !isset($_POST["textarea1"])){
        $filename = $_POST["filename"];
        $text = $_POST["textarea1"];
        if (preg_match("~/.txt/",$filename)){
            $filename = $dir.$filename;
            $file = fopen($filename,"w") or die("incapaz de abrir o arquivo");
        }else{
            $filename = $dir.$filename.".txt";
            $file = fopen($filename,"w") or die("incapaz de abrir o arquivo");
        }

        if (!$file){
            fwrite()
        }
    }
    
    
    fwrite($file,$text);
    fclose($file);
?>