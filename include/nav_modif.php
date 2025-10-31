<?php
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
session_start(); 
  if (empty($_SESSION['parrain_id'])) {
  ?>
  <style>
  	#Se_deconnecter, #liste{
  		display: none;
  	}
  </style>
  <?php

} else {
?>
   <style>
   	#Se_connecter, #Sincrire { 
   		display:none; 
   	}
   </style>
<?php
}

?>