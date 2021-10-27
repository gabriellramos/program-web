<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Exercicio 6</title>
</head>

<body>

  <div>
    <h2>Exercício Parte 6</h2>
  </div>
  <div class='checkbox mb-3'>
    <li>Dado uma palavra conte o número de caracteres.</li>
  </div>
  <?php
  $palavra = "Programação Web";
  echo "<div class='checkbox mb-3'>
            Palavra: <b>" . $palavra
    . "</b> contém " . strlen($palavra) . " caracteres.
          </div>";
  ?>
  <div class='checkbox mb-3'>
    <li>Dado uma frase conte o número de palavras.</li>
    <?php
    $frase = "Estudando php";
    echo "Frase:<b> " . $frase . "</b> contém " . str_word_count($frase) . " palavras.";
    ?>
  </div>

  <div class='checkbox mb-3'>
    <li>Inverter uma string dada..</li>
    <?php
    $frase = "GABRIEL RAMOS";
    echo "String:<b> " . $frase . "</b> invertida fica " . strrev($frase) . ".";
    ?>
  </div>

  <div class='checkbox mb-3'>
    <li>Pesquisar um texto específico na String.</li>
    <?php
    $frase = "Estudando PHP em Programação Web";
    $texto = "Estudando PHP";

    echo (strpos($frase, $texto) === false) ? "String:<b> " . $frase . "</b> não possui o texto " . $texto . "."
      : "String:<b> " . $frase . "</b> possui o texto '" . $texto . "'.";
    ?>
  </div>

  <div class='checkbox mb-3'>
    <li>Substituir texto dentro de uma sequencia de caracteres.</li>
    <?php
    $frase = "Estudando PHP em Programação Web";
    $texto = "PHP";
    $substituir = "Java";

    echo "String:<b> " . $frase . "</b> substituindo fica '" . str_replace($texto, $substituir, $frase) . "'.";
    ?>
  </div>

  <div class='checkbox mb-3'>
    <li>Retornar a saída "Tenha uma boa manhã!" Se a hora atual for
      inferior a 10:00, e "Tenha um bom dia!" Se a hora atual for menor
      que 20:00. Caso contrário, a saída será “Tenha uma boa noite!".</li>
    <?php
    $hora = date("H");
    $mensagem = "";
    if ($hora < 10)
      $mensagem = "Tenha uma boa manhã!";
    else if ($hora > 10 and $hora < 20)
      $mensagem = "Tenha um bom dia!";
    else
      $mensagem = "Tenha uma boa noite!";
    echo "Resposta: <b>" . $mensagem . "</b>.";
    ?>
  </div>

  <div class='checkbox mb-3'>
    <li>Define uma variável $x para 15 ($ x = 15). Em seguida, o loop
      while continuará a ser executado, desde que $x seja menor ou
      igual a 150 ($x <= 150). $X aumentará em 15 cada vez que o loop for executado. 
      Deve ser impresso na tela as execuções intermediárias antes de 150 (15,30,45,...,135).</li>
        <?php
          $x = 15;
          echo "($x";
          while($x<=150){
            $x+=15;
            echo ($x<150) ? ",$x" : "";
          }
          echo ")";
        ?>
  </div>

</body>

</html>