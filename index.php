<?php
session_start();

$auth = $_SESSION['auth'] ?? null;
$username = $_SESSION['login'];
?>

<html>
<head>
    <title>SPA</title>
    <link rel="stylesheet" href="style.css">
 </head>
<body>
    <div class="hat">
        <a href="#"id=links>Главная</a>
        <a href="massage.php"id=links>Массаж</a>
        <a href="sauna.php"id=links>Сауна</a>
        <a href="offer.php"id=links>Акции</a>
        <div class="login">
            <?php  if(!$auth) { ?>
                <a href="login.php" id=auth>Войти</a>
            <?php }else{ ?>
                <a href="abort.php" id=auth>Выйти</a>   
                <strong id="username"><?php echo $username; ?></strong>    
            <?php } ?>
        </div>
    </div> 
    <section>
        <article>
            <h2>К вашим услугам наш SPA-салон</h2>
            <h2>Сдесь вы найдете все что Вам нужно для отдыха</h2p>
            <h2>Широкий выбор услуг</h2>
            <h2>Массаж, Сауна, Баня, Бассейн</h2>
        </article>
        <? if($auth){?>
        <article>
            <h2>Только сейчас вам доступна скидка в течении <?
            $PrDate = $_SESSION['date'];
            $premium_date = date("d-m-Y H:i:s", strtotime("+24 hours", strtotime($_SESSION['date'])));
            $datetime1 = date_create($premium_date);
            $datetime2 = date_create(date("d-m-Y H:i:s"));
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('%h ч. %i минут %s секунд');
            ?> на 5% дополнительно!</h2>
        </article><?}?>
    </section>
</body>
<footer>
</footer>
</html>
