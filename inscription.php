<?php
//Masque le input
if (empty($_GET['code'])) {
?>
  <style>
    #code_parrain {
      display: none;
    }
  </style>
<?php
} else {
?>
  <style>
    #code_parrains {
      display: none;
    }
  </style>
<?php
}
if (empty($_GET['code'])) {
  $code = '';
} else {
  $code = $_GET['code'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Système de parrainage</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- NAV -->
  <!-- /NAV -->
  <div class="container">
    <div class="form-container">
      <h1 class="text-center">Créez votre compte</h1>
      <p class="lead text-center">En toute simplicité</p>

      <form action="action/action-inx.php" method="POST">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required placeholder="Votre adresse e-mail">
        </div>
        <div class="form-group">
          <label for="pwd">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="code_parrain">code-parrain</label>
          <input type="text" class="form-control" id="code_parrain" name="code_parrain" readonly value="<?php echo $code ?>">
          <input type="text" class="form-control" id="code_parrains" name="code_parrains">
        </div>
        <button type="submit" name="inscrire" class="btn btn-primary btn-block">S'inscrire</button>
      </form>

      <div class="card-footer">
        Vous avez déjà un compte ?
        <a href="http://localhost/parrainages/connexion.php#">Se connecter</a>
      </div>
    </div>
  </div>

  <?php include "include/link.php"; ?>
</body>

</html>