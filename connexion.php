<?php

//Connexion Base de données
function connectionDb() {

  $dsn = 'mysql:host=192.168.10.41;dbname=silmo;charset=utf8'; 
	$user = 'luis';
	$password = '33Censier'; 

  try {

    $tdl = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $tdl;

  } catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
  }
}

//renvoie object pdo statement ou false, 
//soit exeption (géré par try and catch) 