<?php 
$sql = new PDO("mysql: host=localhost;dbname=parrainage", "root", "");

$nom=$_POST['nom'];
$email=$_POST['email'];
$password=$_POST['password']; 
$cle=uniqid(); // pur generer une clé unique
if (empty($_POST['code_parrain'])) {
	$code_parrain = $_POST['code_parrains'];

} else {
$code_parrain = $_POST['code_parrain'];
  //verification  et securite
}
//verifier si l'email existe deja
$req=$sql->prepare("SELECT id FROM parrain WHERE email=:email");
$req->bindParam(":email",$email);
$req->execute();
$user = $req->fetch(PDO::FETCH_ASSOC);
if ($user) {
    echo "Cet email a déjà été utilisé...";

} else{
	// insertion dans la base de donnee

	$req=$sql->prepare("INSERT INTO parrain (nom,email,password,code_parrain,cle) VALUES(:nom, :email, :password,:code_parrain, :cle) ");
	$req->bindParam(":nom",$_POST['nom']);
	$req->bindParam(":email",$_POST['email']);
	$req->bindParam(":cle",$cle);
	$req->bindParam(":password",$password);	
	$req->bindParam(":code_parrain",$code_parrain);
	$result=$req->execute();	
if($result== true){
	
	echo "compte creé avec succes! <a href='http://localhost/parrainages/connexion.php'> se connecter </a>";
	// header("location: connexion.php");
  
}else{
	echo "erreur lors de l'inscription";
}

}

 ?>
 