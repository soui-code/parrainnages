<?php
 include 'include/nav_modif.php';
 if (empty($_SESSION['cle'])) {
   $code = '';

 }else{
  $code = $_SESSION['cle'];
  ?>
<style>
  #p{display: none;}
</style>
<?php
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
    .icon{
      display: flex;
      align-items: center;
    }
    .social-icon{
      margin-top: 10px;
      display: block;
      width: 30px;
      height: 30px;
    }
  </style>
</head>
<body>
<!-- NAV -->
  <?php include "include/nav.php"; ?>
  <!-- /NAV -->
  <div class="container">
    <div class="form-container">
      <h1 class="text-center">Invite vos amis</h1>
      <p class="lead text-center">Et gagner de l'argent</p>

      <form action="" method="POST">
        <div class="form-group">
          <label for="nom">Code de parrainnage</label>
          <input type="text" class="form-control" id="code_parrainnage" name="nom" value="<?php echo $code?>">
        </div>
        <button type="submit" name="Copier" class="btn btn-primary btn-block" onclick="myFunction(event)">
          Copier
        </button>
        <button type="submit" name="Partage" class="btn btn-primary btn-block">
          Partage
        </button>
        <div class="icon">
          <a href="//www.facebook.com/sharer/sharer.php?u=http://localhost/parrainages/inscription.php?code=<?php echo $code?>">
            <img src="icon/facebook.png"  class="social-icon">
          </a> 
          <a href="https://wa.me/?text=http://localhost/parrainages/inscription.php?code=<?php echo $code?>" >
            <img src="icon/whatsapp.png" class="social-icon">
          </a>
           <a href="https://twitter.com/intent/tweet?text=http://localhost/parrainages/inscription.php?code=<?php echo $code?>" >
            <img src="icon/twitter.png" class="social-icon">
          </a>
        </div>
      </form>

      <div class="card-footer">
        NB: vous gagnez 50% de chaque souscription de vos fillials
      </div>
      <div class="card-footer" id="p">
        Connecter vous pour voir votre code de parrainnage
      </div>
    </div>
  </div>
  
   <script>
  const myFunction = (event) => {
    event.preventDefault(); // Empêche le rechargement de la page

    // Récupère la valeur du champ de code
    const code = document.querySelector("#code_parrainnage").value;
    const lien = "http://localhost/parrainages/inscription.php?code=" + code;

    // Copie le texte dans le presse-papier
    navigator.clipboard.writeText(lien)
      .then(() => {
        alert("Lien copié : " + lien);
      })
      .catch(err => {
        console.error("Erreur lors de la copie :", err);
      });
  }
</script>
  <?php include "include/link.php"; ?>
</body>
</html>