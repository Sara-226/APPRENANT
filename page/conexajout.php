<?php
try{
    $db=new PDO('mysql:host=localhost; dbname=baseapp', 'root', '');
} catch(Exception $e){
    die('Erreur: '.$e-> getMessage());
}
if (extension_loaded('PDO')){
    echo'ok';
}
else {
    echo'Erreur';
}
?>