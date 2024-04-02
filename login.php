<?php
    session_start();
    $auth = $_SESSION['auth'] ?? null;
?>

<html>
    <head>
        <title>SPA</title>
        <link rel="stylesheet" href="style.css">
    </head>
 <body>
    <div class="hat">
        <a href="index.php"id=links>Главная</a>
        <a href="massage.php"id=links>Массаж</a>
        <a href="sauna.php"id=links>Сауна</a>
        <a href="offer.php"id=links>Акции</a>
        <div class="login">
            <?php  if(!$auth) { ?>
                <a href="login.php" id=auth>Войти</a>
                <strong id="username"><?php echo $username; ?></strong>    
            <?php } ?>    
    </div>
    </div>
        <?php
        if(!$auth) { ?>    
        <div class="loginForm">
        <form class="log" action="process.php" method="post">
            <input name="login" type="text" placeholder="Логин">
            <input name="password" type="password" placeholder="Пароль">
            <input class="logbut" name="submit" type="submit" value="Войти">
         </form>
        </div>
    <?php } ?>
</html>

