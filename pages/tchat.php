<?php


if (!isset($_GET['user']) || isLogged() == 0 || user_exist() != 1) {

    header('Location:index.php?page=home');
}

$_SESSION['user'] = $_GET['user'];
foreach (get_user() as $user) {

?> <div class="redForm">
    <h2><?= $user->name ?></h2>
    <div class="message-box">

        <div class="message message-member">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quidem ea architecto impedit corporis quod.</div>

        <div class="message message-user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ex.</div>
        <div class="message message-member">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, dolore veritatis. Explicabo architecto magni hic, obcaecati,
            laboriosam voluptate officia delectus voluptas veritatis repellendus nesciunt porro!</div>
        <div class="message message-member">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, dolore veritatis. Explicabo architecto magni hic, obcaecati,
            laboriosam voluptate officia delectus voluptas veritatis repellendus nesciunt porro!</div>
        <div class="message message-user">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem temporibus porro voluptate sed sequi culpa neque nulla provident asperiores quasi.</div>

    </div>


    <div class="bottom">
        <div class="field field-area">
            <label for="" class="field-label">Your message</label>
            <textarea name="message" id="message" cols="30" rows="2" class="field-input field-textarea"></textarea>
        </div>
        <button type="submit" id="send" class="send"> Send </button>
    </div>

<?php
}


?>