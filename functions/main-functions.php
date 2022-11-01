

<?php
session_start();
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

function isLogged(){
    if(isset($_SESSION['tchat'])){
        $logged=1;
    }else{
        $logged=0;
    }
    return $logged;
}


?>