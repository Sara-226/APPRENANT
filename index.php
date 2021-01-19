<?php
try{
    $user="root";
    $pass="";
    $dbh=new PDO("mysql:host=localhost; dbname=test", $user,
    $pass);
    echo "ca marche";
}
catch (PDOException $e){
    print"erreur! :" . $e->getMessage() . "<br/>";
    die();
}
?>