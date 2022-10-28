<?php

function email_taken($email){

global $db;

$e= array('email'=>$email);


$sql='SELECT * FROM users WHERE email=:email ';

$req=$db->prepare($sql);

$req->execute($e);

$count=$req->rowCount();

return $count;

}


function register($name,$email,$password){

global $db;

$reg=array(
    'name'=>$name,
     'email'=>$email,
     'password'=>$password
    );


$sql='INSERT INTO users(name,email,password) VALUES(:name,:email,:password)';

$req=$db->prepare($sql);
$req->execute($reg);


}