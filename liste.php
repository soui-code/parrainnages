<?php
include 'include/nav_modif.php';
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
// session_start();
$id = $_SESSION['parrain_id'];
$req = $sql->prepare("SELECT * FROM filleul WHERE id_parrain =:id_parrain");
$req->bindParam(":id_parrain", $id);
$req->execute();
$resulta = $req->fetchAll();

//Ajout de l'entête

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
      <h1>Liste de mes feuilles</h1>
      <table cellspacing="2px">
        <tr class="form-group">
          <th><label class="form-control">NOM</label></th>
        </tr>
        <?php
        if (!empty($resulta)) {
          foreach ($resulta as $key => $value) {
        ?>
            <tr class="form-group">
              <th><label class="form-control "><?php echo $value['nom_filleul']; ?></label></th>
            </tr>
        <?php }
        } ?>
      </table>
    </div>
  <?php include "include/footer.php"; ?>
    
  </div>
  
  <?php include "include/link.php"; ?>
</body>

</html>