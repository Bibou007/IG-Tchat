<?php

if (isset($_POST['submit'])) {
    
    $email = htmlspecialchars(trim($_POST['email']));
    $password = sha1(htmlspecialchars(trim($_POST['password'])));
    
    if (user_verify($email, $password) == 1) {
        $_SESSION['tchat'] = $email;
        header('Location:index.php?page=members');
    } else {
        $error_user_not_found = "L'email ou le mot de passe est incorrecte";
    }
}

?>




<div class="regForm">
    <h2>Login Form</h2>
    <form method="post" id="logForm">
        <div class="field">
            <label for="email" class="field-label">Your Mail</label>
            <input type="email" name="email" id="email" class="field-input">
        </div>
        <div class="field">
            <label for="password" class="field-label">Your Password </label>
            <input type="password" name="password" id="password" class="field-input">
        </div>
        <p class="error"><?= (isset($error_email)) ? $error_email : '' ?></p>
        <button type="submit" name="submit">Envoyer</button>

        <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : '' ?></p>
    </form>
</div>