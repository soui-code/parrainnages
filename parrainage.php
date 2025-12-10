<?php
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");

include 'include/nav_modif.php';
include 'action/prestation.php';
//verifie si la sessoin existe
if (empty($_SESSION['cle'])) {
  $code = '';

} else {
  $code = $_SESSION['cle'];
  ?>
  <style>
    #p {
      display: none;
    }
  </style>
  <?php
}

//requete de selection pour la liste des avantages
$id = $_SESSION['parrain_id'];
$req = $sql->prepare('SELECT prestation.reduction FROM prestation
    JOIN asso ON asso.id_prestation = prestation.id
    JOIN utilisateur ON utilisateur.id = asso.id_utilisateur Where utilisateur.id =:id_utilisateur');
$req->bindParam('id_utilisateur', $_SESSION['parrain_id']);
$req->execute();
$resulta = $req->fetchAll(PDO::FETCH_ASSOC);

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
  <?php include "include/nav.php"; ?>
  <!-- /NAV -->
  <div class="container">
    <div class="form-container">
      <h1 class="text-center">Invite vos amis</h1>
      <p class="lead text-center">Et gagner de l'argent</p>

      <form action="" method="POST">
        <div class="form-group">
          <label for="nom">Code de parrainnage</label>
          <input type="text" class="form-control" id="code_parrainnage" name="nom" readonly value="<?php echo $code ?>">
        </div>
        <button type="submit" name="Copier" class="btn btn-primary btn-block" onclick="myFunction(event)">
          Copier
        </button>
        <button type="submit" name="Partage" class="btn btn-primary btn-block">
          Partage
        </button>
        <div class="icon">
          <a
            href="//www.facebook.com/sharer/sharer.php?u=http://localhost/parrainages/inscription.php?code=<?php echo $code ?>">
            <img src="icon/facebook.png" class="social-icon">
          </a>
          <a href="https://wa.me/?text=http://localhost/parrainages/inscription.php?code=<?php echo $code ?>">
            <img src="icon/whatsapp.png" class="social-icon">
          </a>
          <a
            href="https://twitter.com/intent/tweet?text=http://localhost/parrainages/inscription.php?code=<?php echo $code ?>">
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
      <hr>
      <div>
        <h1 class="text-center">Avantage pour vos amis</h1>
        <p class="lead text-center">
          <?php
          // var_dump($resulta);
          foreach ($resulta as $key => $value) {
            ?>
          <table>
            <tr>
              <td>
                <div>✅<?php echo $value['reduction']; ?> sur leur 1er souscription</div>
              </td>
            </tr>
          </table>
        <?php } ?>
        </p>
      </div>
    </div>
  <!-- footer -->
  <?php include "include/footer.php"; ?>

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