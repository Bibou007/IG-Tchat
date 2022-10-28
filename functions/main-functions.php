

<?php

$dbhost = 'localhost';
$dbname = 'tchat';
$dbuser = 'root';
$dbpswd = '';

try {
    $db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpswd);
    // echo('Connecter avec succès');
} catch (PDOException $e) {
    echo ('Une erreur est survenu lors de la connexion à la base de données');
}




?>