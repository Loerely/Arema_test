<?
    require_once'BD/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_kat.css">
    <link rel="stylesheet" href="CSS/font.css">
    
</head>
<body>
    <header>
            <div>
                <a href="index.php"><img class="logo1" src="img/prof_remont_white.png" alt=""></a>
                <a href="index.php">Ремонт квартир</a>
                <a href="Rass4et.php">Калькулятор ремонта</a>
                <div>
                    <p>+8 (901) 991 11 14</p>
                    <p>Адрес</p>
                </div>
                <?
            if($_SESSION['user']['email'] != ""){?>
                <div class="column">
                    <p><?=$_SESSION['user']['email']?></p>
                    <a href="SessionDestroy.php">Выйти</a>
                </div>
            <?}
            else{?>
                <a href="Register/vhGoogle.php"><button class="but1">Войти</button></a>
            <?}
            ?>
            </div>
    </header>
    <div class="bl5">
        <div class="inf">
        <?
            $result = mysqli_query($connect, "SELECT * FROM CartCatalog");
            while($row = mysqli_fetch_array($result)){?>
                <div class="block">
                <img src="<?=$row['img']?>" alt="">
                <p class="p1"><?=$row['name']?></p>
                <p class="p2"><?=$row['adres']?></p>
                <p class="p3"><?=$row['price']?></p>
                <a href="BD/tov.php?id=<?=$row['id']?>">Посмотреть весь проект</a>
            </div>
            <?}
            
        ?> 
        </div>
    </div>
    <footer>
        <p>© AREMA профессиональный ремонт квартир в Москве и МО. ИНН 7716912681 ОГРН 1187746496233</p>
        <a href="">Политика конфиденциальности</a>
    </footer>
</body>
</html>