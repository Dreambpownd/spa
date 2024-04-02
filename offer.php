<?php
session_start();
require_once 'users.php';
$auth = $_SESSION['auth'] ?? null;
$username = $_SESSION['login'];
?>

<html>
<head>
    <title>SPA</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <div class="hat" if="lnk">
        <a href="index.php"id=links>Главная</a>
        <a href="massage.php"id=links>Массаж</a>
        <a href="sauna.php"id=links>Сауна</a>
        <a href="offer.php"id=links>Акции</a>
        <div class="login">
            <?  if(!$auth) { ?>
                <a href="login.php" id=auth>Войти</a>
            <? }else{ ?>
                <a href="abort.php" id=auth>Выйти</a>   
                <strong id="username"><?php echo $username; ?></strong>    
            <? } ?>
        </div>
    </div>
    <section>
        <article>
            <div class="birthday">
             <?  if($auth) { 
                    if(daysUntilBirthday(getUsersList()[$username]['birthday']) == 364) { ?>
                        <h2>Поздравляем с днем рождения! </h2> 
                        <h2>Для Вас сегодня действует
                        персональная скидка 5% на все услуги!</h2> 
                        <? }else{?>
                        <h2>В нашем салоне действуют персональные скидки!</h2> 
                        <h2>В день рождения Вас ждет персональная скидка 5% на все услуги!</h2>
                        <h2>До Вашего дня рождения осталось <?echo daysUntilBirthday(getUsersList()[$username]['birthday']) ?> дней!
                        <? }
                    }else{?>
                    <h2>В нашем салоне действуют персональные скидки!</h2> 
                    <h2>В день рождения Вас ждет персональная скидка 5% на все услуги!</h2>
                    <? }?>
            </div>
        </article>
        <? if($auth) {?>
            <article>           
            <h2>Только сейчас вам доступна скидка в течении <?
            $PrDate = $_SESSION['date'];
            $premium_date = date("d-m-Y H:i:s", strtotime("+23 hours, 59 minutes, 59 seconds", strtotime($_SESSION['date'])));
            $datetime1 = date_create($premium_date);
            $datetime2 = date_create(date("d-m-Y H:i:s"));
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('%h ч. %i минут %s секунд');
            ?> на 5% дополнительно!</h2>
            
        </article><?}?>
    </section> 
</body>
</html>