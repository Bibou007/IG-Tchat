



<?php

function getMembers(){
    global $db;
    $sql=$db->query('SELECT * FROM users');
    $results=array();

   while($rows=$sql->fetchObject()){
    $results[]=$rows;
   }
   return $results;
}




