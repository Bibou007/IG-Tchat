<?php


function user_exist(){
    global $db;
    $e=array('user'=>$_GET['user'], 'session'=>$_SESSION['tchat']);

    $sql= 'SELECT * FROM users WHERE email=:user AND email!=:session';
    $req=$db->prepare($sql);

    $req->execute($e);

    $count=$req->rowCount();
    return $count;
}

function get_user(){
    global $db;
    $session=$_SESSION['user'];
    // die($session);
    $query=$db->query("SELECT * FROM users WHERE email='$session'");
    $user= array();
    while($row=$query->fetchObject()){
        $user[]=$row;
    }
    return $user;
}