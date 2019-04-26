<?php 
  session_start();

  if (isset($_SESSION["logged"])) {
    header("Location: caixa.php");
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>

  <style>
    .letra {
      font-family: 'Lobster', cursive;
    }
  </style>
  <title>Atendimento.</title>
</head>

<body>
  
  <form action="verify_login.php" method="post">
    <div class=container>
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <h1 class="letra text-center">Login</h1>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" name=login placeholder="login"> </div>
          <div class="form-group">
            <input type="password" class="form-control" name=senha placeholder="senha">
            <div>
              <p class="text-center"><?= isset($_SESSION["userError"]) ? "Usuário ou senha inválidos" : "Bem vindo"; ?></p>
            </div>
            <button type="submit" type="button" class="btn btn-primary btn-block">
              Login
            </button>
          </div>
        </div>
      </div>
  </form>

 </body>

</html>