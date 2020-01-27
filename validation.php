<?php
session_start();
session_start([
    'cookie_lifetime' => 86400,
]);
require_once('connexion.php');
$_SESSION["nom"]=$_POST['nom'];
$_SESSION["prenom"]=$_POST['prenom'];
$_SESSION["mail"]=$_POST['mail'];
$_SESSION["tel"]=$_POST['tel'];
$_SESSION["mobile"]=$_POST['mobile'];
$_SESSION["magasin"]=$_POST['magasin'];
$_SESSION["adresse"]=$_POST['adresse'];
$_SESSION["postal"]=$_POST['postal'];
$_SESSION["pays"]=$_POST['pays'];
function valid_nom($post){
  $valid_taille= strlen($post['nom'])>1;
  
  if(isset($post) && isset($post['nom']) && preg_match("#^[A-Za-z éèàçù~_+-]+[']?[A-Za-zéèàçù~_-]+$#i", $post['nom'])==true && $valid_taille==true){
    return true;
  }else{
    return false;
  }
}
function valid_prenom($post){
  $valid_taille= strlen($post['prenom'])>1;
  if(isset($post) && isset($post['prenom']) && preg_match("#^[A-Za-z éèàçù~_+-]+[']?[A-Za-zéèàçù~_-]+$#i", $post['prenom'])==true && $valid_taille==true ){
    return true;
  }else{
    return false;
  }
}
function valid_country($post){
  $valid_taille= strlen($post['pays'])>2;
  if(isset($post) && isset($post['pays']) && preg_match("#^[A-Za-zéèàçù~_+-]+[']?[A-Za-zéèàçù~_-]+$#i", $post['pays'])==true && $valid_taille==true && $post['pays']!="Pays"){
    return true;
  }else{
    return false;
  }
}
function valid_postal($post){
  $valid_taille= strlen($post['postal'])>3;
  if(isset($post) && isset($post['postal']) && preg_match("#^[a-zA-Z0-9]+$#i", $post['postal'])==true && $valid_taille==true){
    return true;
  }else{
    return false;
  }
}
function valid_mail($post){
  $valid_taille= strlen($post['mail'])>3;
  if(isset($post) && isset($post['mail']) && preg_match("#^[0-9a-zA-Z._ éèàçù~^¨-]+@[0-9a-zA-Z_éàù-]{2,}\.[- a-z_]{2,6}$#i", $post['mail'])==true && $valid_taille==true){
    return true;
  }else{
    return false;
  }
}
function valid_company($post){
  $valid_taille= strlen($post['magasin'])>2;
  if(isset($post) && isset($post['magasin'])  && $valid_taille==true ){
    return true;
  }else{
    return false;
  }
}
function valid_tel($post){
  $valid_taille= strlen($post['tel'])>3;
  if(isset($post) && isset($post['tel']) && preg_match("#^[+]?[0-9]+$#", $post['tel'])==true && $valid_taille==true ){
    return true;
  }else{
    return false;
  }
}
function valid_mobile($post){
  $valid_taille= strlen($post['mobile'])>3;
  if(isset($post) && isset($post['mobile']) && preg_match("#^[+]?[0-9]+$#", $post['mobile'])==true && $valid_taille==true ){
    return true;
  }else{
    return false;
  }
}
function valid_adresse($post){
  $valid_taille= strlen($post['adresse'])>3;
  if(isset($post) && isset($post['adresse']) &&  $valid_taille==true ){
    return true;
  }else{
    return false;
  }
}
$validation = valid_prenom($_POST)*valid_nom($_POST)*valid_mail($_POST)*valid_tel($_POST)*valid_mobile($_POST)*valid_company($_POST)*valid_adresse($_POST)*valid_postal($_POST)*valid_country($_POST);
$champs = array(
	"prenom"	=>	valid_prenom($_POST),
	"nom"		=>  valid_nom($_POST),
	"mail"		=>	valid_mail($_POST),
	"tel"		=>	valid_tel($_POST),
	"mobile"	=>	valid_mobile($_POST),
	"magasin"	=>	valid_company($_POST),
	"adresse"	=>	valid_adresse($_POST),
	"postal"	=>	valid_postal($_POST),
	"pays"		=>	valid_country($_POST)
);
header("Content-type:application/json");
if($validation==true || $validation==1){
  $nom = trim($_POST['nom']); 
  $prenom = trim($_POST['prenom']);
  $mail = trim($_POST['mail']);
  $phone = trim($_POST['tel']);
  $mobile = trim($_POST['mobile']);
  $magasin = trim($_POST['magasin']);
  $adresse = trim($_POST['adresse']);
  $pays = trim($_POST['pays']);
  $postal = trim($_POST['postal']);
  $sql ="INSERT INTO inscrits(nom,prenom,mail,phone,mobile,magasin,adresse,postal,pays)";
  $sql .="VALUES(?,?,?,?,?,?,?,?,?)";
  $bdd = connectionDb();
  $stmt= $bdd->prepare($sql);
  $stmt->bindValue(1, $nom);
  $stmt->bindValue(2, $prenom);
  $stmt->bindValue(3, $mail);
  $stmt->bindValue(4, $phone);
  $stmt->bindValue(5, $mobile);
  $stmt->bindValue(6, $magasin);
  $stmt->bindValue(7, $adresse);
  $stmt->bindValue(8, $postal);
  $stmt->bindValue(9, $pays);
  $stmt->execute();
  if($stmt->errorCode() === '00000'){
    header('Content-Type: application/json');
    session_destroy();
    echo json_encode("ok");
  }else{
    header('Content-Type: application/json');
    echo json_encode("Le compte existe déjà".$stmt->errorCode());
  }
  
	
}else {
	echo json_encode($champs);
}
//header('Location: index.php'); 

