<?php
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
session_start();
$code =$_SESSION['cle'];
$req = $sql->prepare("SELECT * FROM parrain WHERE code_parrain =:code");
$req->bindParam(":code",$code);
$req->execute();
$resulta=$req->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste de mes filleul</title>
</head>
<body>
  <table border="2 solid black" cellspacing="2px">
    <tr>
      <th>Nom</th>
      <th>E-mail</th>
    </tr>
    <?php
      if (!empty($resulta)) { foreach ($resulta as $key => $value) {
    ?>
    <tr>
      <th><?php echo $value['nom'] ;?></th>
      <th><?php echo $value['email'] ;?></th>
    </tr>
  <?php } }?>
  </table>
  
</body>
</html>