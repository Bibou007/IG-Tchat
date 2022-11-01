
<?php 
if(isLogged()==0){
    header('Location:index.php?page=signin');
}

?>
<div class="regForm">
 
<h2>Tous les membres</h2>

<?php

foreach(getMembers() as $member ){
    if($member->email!= $_SESSION['tchat']){
        ?>
<div class="member">
    <strong><?= $member->name  ?></strong><br>
    <span><?= $member->email ?></span><br>
    <a class="select" href="index.php?page=tchat&user=<?=$member->email?>"> &#937;</a>
</div>

<?php
    } }?>

</div>