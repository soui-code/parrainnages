<?php 
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
session_start();
 session_unset();
 session_destroy();
 header('location : http://localhost/parrainages/connexion.php');
 
 ?>