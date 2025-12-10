<?php 
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
//recherche de l'user
$req=$sql->prepare("SELECT * FROM  utilisateur WHERE email=:email");
$req->bindParam(":email",$email);
$req->execute();
$user = $req->fetch();
if($user){

	//verifier le mot de passe 
if ($password === $user['password']) {
// de verifier si le mot de passe existe
// on stoke les info dans la base de donnee
	$_SESSION['parrain_id']=$user['id'];
	$_SESSION['nom']=$user['nom'];
	$_SESSION['cle']=$user['cle'];
	$_SESSION['code_parrain']=$user['code_parrain'];
	//redirection 
	header("location: http://localhost/parrainages/index.php");
  }else {
  	echo "Mot de passe incorrect";
		
	}
}else{
  
	echo" utilisateur n'ont trouvé";
 }







 ?>