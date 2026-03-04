<?
    require_once'BD/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="CSS/style_admin.css">
    <link rel="stylesheet" href="CSS/font.css">
</head>
<body>
    <header>
        <header>
            <div class="row1">
                <a href="index.php"><img class="logo" src="img/prof_remont_white.png" alt=""></a>
                <a href="adminRem.php">Заявления на ремонт</a>
                <a href="admin.php" style="color = white">Заявления на консультацию</a>
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
    <div class="container">
        <?
            $result = mysqli_query($connect, "SELECT * FROM `application`");
            while($row = mysqli_fetch_array($result)){?>
            <div class="block1">
                <p style="color: black"><?=$row['name']?></p> 
                <p style="color: black"><?=$row['telefon']?></p>
                <p style="color: black"><?=$row['status']?></p>
                <?if($row['status'] == "В ожидании"){?>
                <a href="BD/accept2.php?id=<?=$row['id']?>"><button>Принять</button></a>
                <?}?>
            </div>
            <?}
        ?>
    </div>
</body>
</html>