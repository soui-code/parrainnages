<?php
//Masque le input
if (empty($_GET['code'])) {
  ?>
  <style>
    #code_parrain {display: none;}
  </style>
<?php
} else {
  ?>
   <style>
    #code_parrains {display: none;}
  </style>
  <?php
}
if (empty($_GET['code'])) {
  $code = '';
}else{
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
  <style>
    body {
    	
      background-color: #f5f5f5;
      /*min-height: 100vh;
      display: flex;
      align-items: center;*/
      padding-top: 4px; 
      padding-bottom: 40px;
    }
    .form-container {
      margin-top: 120px;
      max-width: 330px;
      padding: 30px 20px;
      margin: auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .form-container h1 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 5px;
    }
    .form-container .lead {
      color: #777;
      margin-bottom: 25px;
      font-size: 14px;
    }
    .form-container .form-control {
      font-size: 16px;
      padding: 10px;
    }
    .form-container .btn {
      font-size: 16px;
      padding: 10px;
    }
    .card-footer {
      margin-top: 20px;
      padding-top: 15px;
      border-top: 1px solid #eee;
      text-align: center;
      font-size: 13px;
    }
    .card-footer a {
      color: #337ab7;
      text-decoration: none;
    }
    .card-footer a:hover {
      text-decoration: underline;
    }
  </style>
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
          <input type="text" class="form-control" id="code_parrain" name="code_parrain" readonly value="<?php echo $code?>">
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