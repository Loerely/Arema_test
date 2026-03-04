<?
    require_once "connect.php";
    
    

        $name = $_GET['name'];
        $telefon = $_GET['telefon'];

        mysqli_query($connect, "INSERT INTO `application` (`name`, `telefon`, `status`) VALUES ('" . $name ."', '" . $telefon ."', 'В ожидании')");

        // Сообщение
        $message = "Спасибо за отправку сообщения\r\nLine 2\r\nLine 3";
        // Отправляем
        mail('gowe009@gmail.com', 'My Subject', $message);

    echo($name);
    echo($telefon);
    header('Location: ../index.php');
?>