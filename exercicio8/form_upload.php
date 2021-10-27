<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Arquivos php</title>
  </head>
  <body>
    <?php include 'links.php'; ?>
    <form method="POST" action="upload.php"  enctype="multipart/form-data">
       
        <!-- O Nome do elemento input determina o nome da array $_FILES -->
        <div class="checkbox mb-3"></div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Insira um arquivo</label>
            <input type="file" class="form-control-file" name="userfile" id="userfile" required> 
        </div>
        <div class="checkbox mb-3"></div>
        <center>
            <button class="btn btn-sm btn-success" type="submit">Enviar arquivo</button>
        </center>
    </form>
  </body>
</html>
