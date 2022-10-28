
<?php

$pages=scandir('pages/');


if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){

    $page=$_GET['page'];
}else{
    $page='home';
}

$pages_function=scandir('functions/');
// print_r($pages_function);


if(in_array($_GET['page'].'.func.php',$pages_function)){
    include('functions/'.$_GET['page'].'.func.php');
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>IG Tchatt</title>
</head>
<body>
<?php 

include 'body/topbar.php'

?>
<?php 

include('pages/'.$page.'.php');


?>
    <h1>Bienvenu en IG
    </h1>



    <script src="js/jquery.js"></script>
<?php
$pages_js=scandir('js/');

if(in_array($_GET['page'].'.func.js',$pages_js)){
    ?>
    <script src="js/<?= $_GET['page']?>.func.js"></script>
   
<?php
}
 ?>


</body>
</html>