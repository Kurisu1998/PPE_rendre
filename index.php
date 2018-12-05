<!DOCTYPE html>
<html>
<head>
  <title>Page de connexion</title>
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
</head>
<body>
  <form method="POST" action="connexion.php" class="form-inline">
    <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
  </div>
  <br><br>
  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Mot de passe">
  </div>

 <br><br>
  <button type="submit" class="btn btn-default">Connecter</button>

  </form>

</body>

</html>
