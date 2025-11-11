<?php
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
session_start(); 
  if (empty($_SESSION['parrain_id'])) {
    $nom='';
  ?>
  <style>
  	#Se_deconnecter, #liste{
  		display: none;
  	}
  </style>
  <?php

} else {
  $nom=$_SESSION['nom']
?>
   <style>
   	#Se_connecter, #Sincrire { 
   		display:none; 
   	}
   </style>
<?php
}
//Selection du parrain de l'utilisateur
$req = $sql->prepare("SELECT * FROM parrain WHERE cle =:code_parrain");
$req->bindParam("code_parrain",$_SESSION['code_parrain']);
$req->execute();
$result = $req->fetchAll();

?>