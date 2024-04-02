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
    <div class="hat" if="lnk">
        <a href="index.php"id=links>Главная</a>
        <a href="#"id=links>Массаж</a>
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
        <h2>Массаж лица</h2>     
            <a href="#">
            <img src="https://media.istockphoto.com/id/1158898504/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B6%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D0%B0-%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B0%D1%82%D1%8C-%D0%BC%D0%B0%D1%81%D1%81%D0%B0%D0%B6-%D0%BB%D0%B8%D1%86%D0%B0-%D1%81-%D0%B7%D0%B0%D0%BA%D1%80%D1%8B%D1%82%D1%8B%D0%BC%D0%B8-%D0%B3%D0%BB%D0%B0%D0%B7%D0%B0%D0%BC%D0%B8-%D0%B2-%D1%81%D0%BF%D0%B0.jpg?s=612x612&w=0&k=20&c=1-77adnwRY_r3HikO2SWrxlouBV6uboWJWdmfm5SgA4=" width="800" height="500">
            </a>
            <p>Массаж лица очень приятная процедура. Это хороший способ устранить дефекты кожи без инъекций и хирургического вмешательства. 
                Эта методика основана только на мануальных техниках, которые воздействуют на лицевые мышцы, глубокие слои дермы и жидкостные среды. 
                Она позволяет легко исправить видимые недостатки эпителия без риска повреждений.</p>
        </article>
        <article>        
        <h2>Тайский массаж</h2>     
            <a href="#">
            <img src="https://pattayapeople.ru/wp-content/uploads/2019/05/uznajte-kakoj-massazh-vam-na-samom-dele-delali-v-tailande-870x400.jpg" width="800" height="400">
            </a>
            <p>Попробуйте тайский массаж. Тайский массаж является сложной системой оздоровления. 
                Техника массажа направлена на улучшение кровообращения, состояния нервной системы, кожного покрова и вывод токсинов и снятие отечности.</p>
        </article>
        <article>        
        <h2>Ароматический маслянный массаж</h2>     
            <a href="#">
            <img src="https://img.freepik.com/free-photo/honey-pouring-on-woman-s-naked-back-in-spa-salon_176420-7547.jpg?w=826&t=st=1712087888~exp=1712088488~hmac=68215b9d15d02ae532489a45a0c63ea864731107f2e81093c18c2098e8974145" width="800" height="400">
            </a>
            <p>Арома-oil массаж - это очаровательное смешение мышечного, точечного массажей, мягкой мануальной терапии и необыкновенной нежности рук с применением ароматических масел. 
                Тайский oil-массаж - это объединение двух лечебных функций: расслабляющего массажа и ароматерапии, что делает данную процедуру очень приятной.</p>
        </article>
    </section> 
</body>
</html>