<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Gestion des frais</title>
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div id="img">
      <img src="logo.jpg">
    </div>
      <b>Gestion des frais</b>
  </header>
  <br><br>
  <nav>
   <a href="deconnexion.php"><button type="button" class="btn btn-default" >Déconnexion</button></a>
  </nav>
  <br><br>
  <h1>Saisie</h1>
  <br><br>
  <form method="POST" Aaction="#">
    <label id="pe">PERIODE</label>
  <label id="mo">Mois et Année : </label>
  <input type="month" id="mint">
  <br><br>
  <h2>Frais au forfait</h2>
  <br><br>
  <label id="re">Repas midi : </label>
  <input type="text">
  <br><br>
  <label id="nu">Nuitées : </label>
  <input type="text">
  <br><br>
  <label id="et">Etape : </label>
  <input type="text">
  <br><br>
  <label id="km">Km : </label>
  <input type="text">
  <br><br>
  <h3>Hors Forfait</h3>
  /*code php ou javascripte*/
  <br><br>
  <h4>Hors Classification</h4>
  <br><br>
  <label id="nj">Nombre justificatifs : </label>
  <input type="text">
  <br><br>
  <labe id="mt">Montant total : </label>
  <input type="text">
  <br></br>
  <button type="submit" class="btn btn-default" id="bu">Effacer</button>
   <button type="submit" class="btn btn-default" id="but">Envoyer</button>
</form>
</body>


</html>
