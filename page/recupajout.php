<?php

require_once 'conexajout.php';
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ville = $_POST['villeorigine'];
$forma = $_POST['formation'];
$sexe = $_POST['sexe'];
$format = $_POST['format'];
$appre = $_POST['appreciation'];
$preparation = $db->prepare('INSERT INTO formulaires(email,nom,prenom, villeorigine, formation, sexe, devref, appreciation) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
//$preparation->bindParam(':nom, $nom');

$preparation->execute(array($email, $nom, $prenom, $ville, $forma, $sexe, $forma, $appre));
