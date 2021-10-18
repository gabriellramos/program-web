<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Web</title>
  </head>
  <body>
  <?php include 'links.php'; ?>
  <form name="registro" method="POST" action="valida_registro.php" >
    
    <h1 class="h3 mb-3 fw-normal">Registre-se aqui</h1>
    <div class="form-floating">
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
      <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
      <label for="floatingInput">Sobrenome</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX">
      <label for="floatingInput">CPF</label>
    </div>
    
    <div class="form-floating">
      <input type="password" inputmode="numeric" class="form-control" name="senha1" id="senha1">
      <label for="floatingInput">Senha</label>
    </div>
    <div class="form-floating">
      <input type="password" inputmode="numeric" class="form-control" name="senha2" id="senha2">
      <label for="floatingPassword">Re-Senha</label>
    </div>

    <div class="checkbox mb-3">
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>

  </form>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>