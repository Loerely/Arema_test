<script src="https://apis.google.com/js/platform.js" async defer>
    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
<?
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "AREMA");
    if(isset($_POST['doGo'])){
        if(!$_REQUEST['email']){
            $error = 'Введите логин';
        }
        if(!$_REQUEST['psw']){
            $error = 'Введите пароль';
        }
    }
    if(!$error){
        $email = $_REQUEST['email'];
        $psw = $_REQUEST['psw'];
        if($result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '" . $email ."' ")){
            while($row = mysqli_fetch_assoc($result)){
                if($row['id']){
                    if($psw == $row['password']){
                        if( $email === "ADMIN" ){
                        $_SESSION [ 'user' ]['nik'] = "ADMIN" ;
                        }
                        elseif($email != "ADMIN"){
                            $_SESSION['user']['email'] = $row['email'];
                            $_SESSION['user']['nik'] = $row['nik'];
                            $_SESSION['user']['lastName'] = $row['lastName'];
                            $_SESSION['user']['name'] = $row['name'];
                        }
                        header('Location: ../index.php');
                    }
                    else{
                        echo "<script>alert(\"Пароль не совпадает.\");</script>";
                    }
                }
                else{
                    echo "<script>alert(\"Вы не ввели логин.\");</script>";
                }
            }
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
                <p class="zag">Форма входа</p>
                <input type="text" name="email" placeholder="Электронная почта">
                <input type="password" name="psw" id="" placeholder="Введите пароль">
                <div class="div_button">
                    <input name="doGo" type="submit" value="Войти">
                </div>
                <p>Нет аккаунта? <a href="reg.php">Регистрация</a></p>
                <p><a href="../index.php">на главную</a></p>
                <meta name="google-signin-client_id" content="987610195187-po8lonml3a6jlupv3m4dasi6f5l2si75.apps.googleusercontent.com">
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </form>
        </div>
    </div>
</body>
</html>