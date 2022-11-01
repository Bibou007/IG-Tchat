<div class="topbar">
    <a class="appname" href="home.php">IG Tchatt</a>
    <div class="menu">


        <?php
        
        if (isLogged() == 1) {
            
        ?>
            <a href="index.php?page=members" class="<?php echo($page=='members')?'active':'' ?>">Membres</a>
            <a href="index.php?page=logout">Deconnexion</a>
        <?php } else { ?>

            <a href="index.php?page=register" class="<?php echo($page=='register')? 'active':'' ?>">S'inscrire</a>
            <a href="index.php?page=signin"  class="<?php echo($page=='signin')? 'active':'' ?>">Connexion</a>
        <?php
        }
        ?>


    </div>
</div>