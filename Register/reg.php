<?
    $connect = mysqli_connect("localhost", "root", "", "AREMA");

    if(isset($_REQUEST['doGo'])){
        if(!$_REQUEST['name']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if(!$_REQUEST['lastname']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if(!$_REQUEST['nik']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if(!$_REQUEST['email']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if(!$_REQUEST['psw']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if(!$_REQUEST['confirm_psw']){
            $error = "1";
            echo"<script>alert(\"1.\");</script>";
        }
        if($_REQUEST['psw'] == $_REQUEST['confirm_psw'] && !$error){
            $name = $_REQUEST['name'];
            $lastname = $_REQUEST['lastname'];
            $nik = $_REQUEST['nik'];
            $email = $_REQUEST['email'];
            $psw = $_REQUEST['psw'];
            $confirmPsw = $_REQUEST['confirm_psw'];

            mysqli_query($connect, "INSERT INTO `users` (`name`, `lastName`, `nik`, `email`, `password`) VALUES ('" . $name ."', '" . $lastname ."', '" . $nik ."', '" . $email ."', '" . $psw ."')");
            echo "<script>alert(\"Регистрация успешна.\");</script>";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рассчитайте стоимость ремонта</title>
    <link rel="stylesheet" href="../CSS/font.css">
    <link rel="stylesheet" href="../CSS/style_vh_reg.css">
</head>
<body>
    <div class="BL">
        <div class="row inf">
            <img src="../img/reg/BG.png" alt="">
            <form action="">
                <p class="zag">Форма регистрации</p>
                <div class="row">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="lastname" placeholder="Фамилия">
                </div>
                <input type="text" name="nik" placeholder="Отображаемое имя">
                <input type="text" name="email" placeholder="Электронная почта">
                <input type="password" name="psw" id="" placeholder="Введите пароль">
                <input type="password" name="confirm_psw" id="" placeholder="Повторите пароль">
                <div class="div_button">
                    <input type="submit" name="doGo" value="Зарегистрироваться">
                </div>
                <p>Уже есть аккаунт? <a href="vhGoogle.php">Вход</a></p>
                <p><a href="../index.php">на главную</a></p>
            </form>
        </div>
    </div>
</body>
</html>