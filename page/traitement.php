<?php 
require_once 'connexion.php';
$nom = $_POST['NOM'];
$prenom = $_POST['PRENOM'];
$naissance = $_POST['NAISSANCE'];
$email = $_POST['Email'];
$formation = $_POST['FORMATION'];
$ville = $_POST['VILLE'];
$preparation = $db -> prepare('INSERT INTO diasim(NOM, PRENOM, NAISSANCE, EMAIL, FORMATION, VILLE) VALUES(?, ?, ?, ?, ?, ?)');
$preparation->execute (array ($nom, $prenom, $naissance, $email, $formation, $ville));
?>