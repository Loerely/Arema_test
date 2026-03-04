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
    <div class="inf">
        <?
            $result = mysqli_query($connect, "SELECT * FROM `CostRepair`");
            while($row = mysqli_fetch_array($result)){?>
                <div class="container2">
                    <p style="color: black"><?=$row['typeKV1']?></p> 
                    <p style="color: black"><?=$row['Skv2']?> м</p>
                    <p style="color: black"><?=$row['typeRepair3']?></p>
                    <p style="color: black"><?=$row['matherials4']?></p>
                    <p style="color: black"><?=$row['AddServices5']?></p>
                    <p style="color: black"><?=$row['DateREpair6']?></p>
                    <p style="color: black"><?=$row['Gift7']?></p>
                    <p style="color: black"><?=$row['nameUser']?></p> 
                    <p style="color: black"><?=$row['Telefon']?></p>
                    <p style="color: black"><?=$row['status']?></p>
                    <?if($row['status'] == "Не рассмотрено"){?>
                    <a href="BD/accept.php?id=<?=$row['id']?>"><button>Рассмотрено</button></a>
                    <?}
                    ?>
                </div>
            <?}
        ?>
    </div>
</body>
</html>