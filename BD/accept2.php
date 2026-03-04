<?
    require_once "connect.php";
    $id = $_GET['id'];

    mysqli_query($connect, "UPDATE `application` SET `status` = 'Принято' WHERE `application`.`id` = $id");
    header('Location: ../admin.php');
?>