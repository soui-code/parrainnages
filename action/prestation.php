<?php 

$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
//Creer une prestation pour chaque utilisateur
$req = $sql->prepare("SELECT * FROM asso WHERE id_parrain=:id_parrain");
$req->bindParam('id_parrain',$_SESSION['parrain_id']);
$req->execute();
$result = $req->fetchAll();
if (empty($result)) {
	$prest=1;
	$req1 = $sql->prepare("INSERT INTO asso(id_parrain,id_prestation) VALUES(:id_parrain,:id_prestation)");
	$req1->bindParam('id_parrain',$_SESSION['parrain_id']);
	$req1->bindParam('id_prestation',$prest);
  $req1->execute();
}




 ?>