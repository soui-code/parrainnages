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
$req=$sql->prepare("SELECT id FROM utilisateur WHERE email=:email");
$req->bindParam(":email",$email);
$req->execute();
$user = $req->fetch(PDO::FETCH_ASSOC);
// var_dump($user);
if ($user) {
    echo "Cet email a déjà été utilisé...";

} else{
	//Verification du code utilisateur
	$req=$sql->prepare("SELECT id FROM utilisateur WHERE cle =:code_parrain");
	$req->bindParam('code_parrain',$code_parrain);
	$req->execute();
  $parrain = $req->fetch(PDO::FETCH_ASSOC);
   // echo $parrain['id'];
  if (($parrain) or ($parrain==null)){
  	// insertion d'un utilisateur dans la base de donnee
   
	$req=$sql->prepare("INSERT INTO utilisateur (nom,email,password,cle) VALUES(:nom, :email, :password, :cle)");
	$req->bindParam(":nom",$_POST['nom']);
	$req->bindParam(":email",$_POST['email']);
	$req->bindParam(":cle",$cle);
	$req->bindParam(":password",$password);	
	$result=$req->execute();	
if($result== true){
	//insertion du filleul
	$id_parrain = $parrain['id'];
	$req1 = $sql->prepare("INSERT INTO filleul(id_parrain,nom_filleul) VALUES(:id_parrain,:nom_filleul)");
  $req1->bindParam(':id_parrain',$id_parrain);
  $req1->bindParam(':nom_filleul',$_POST['nom']);
  $result=$req1->execute();	
	echo "compte creé avec succes! <a href='http://localhost/parrainages/connexion.php'> se connecter </a>";
	// header("location: connexion.php");
  
}else{
	echo "erreur lors de l'inscription";
}
  } else{
  	echo "code parrain invalide";
  }
	

}

 ?>
 