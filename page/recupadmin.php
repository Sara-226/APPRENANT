<?php

require_once 'conexadmin.php';
if (count($_POST) == 3) {
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $motsdpasse = $_POST['motsdpasse'];
    $preparation = $db->prepare('INSERT INTO admine(email,nom,motsdpasse) VALUES(?, ?, ?)');
    $preparation->execute(array($email, $nom, password_hash($motsdpasse, PASSWORD_DEFAULT)));
} elseif (count($_POST) == 2) {
    $nom = $_POST['nom'];
    $motsdpasse = $_POST['motsdpasse'];
    $preparation = $db->prepare('SELECT * FROM admine WHERE nom=?');
    $preparation->execute([$nom]);
    $user = $preparation->fetch();
    $verification = password_verify($motsdpasse, $user['motsdpasse']);
    if ($verification) {
        header("location:Ajouter.php");
    } else {
        header("location:administrateur.php?error=le+mot+de+passe+est+incorecte");
    }
} else {
    echo 'erreur';
}
