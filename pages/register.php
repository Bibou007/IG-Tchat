<?php
if (isset($_POST['submit'])) {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = sha1(htmlspecialchars(trim($_POST['password'])));


    if (email_taken($email) == 1) {
        $error_email = "L'adresse Email est déjà Utilisé";
    } else {
        register($name, $email, $password);

        $_SESSION['tchat'] = $email;

        header('Location:index.php?page=members');
    }
}



?>











<div class="regForm">
    <h2>Register</h2>
    <form method="post" id="regForm">

        <div class="field">
            <label for="name" class="field-label">Your Name</label>
            <input type="text" name="name" id="name" class="field-input">
        </div>
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


    </form>
</div>