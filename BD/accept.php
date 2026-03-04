<?
    require_once "connect.php";
    $id = $_GET['id'];

    mysqli_query($connect, "UPDATE `CostRepair` SET `status` = 'Рассмотрено' WHERE `CostRepair`.`id` = $id");
    header('Location: ../adminRem.php');
?>