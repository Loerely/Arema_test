<?  
    require_once "connect.php";
    $typeKV1;
    $Skv2;
    $typeRepair3 = "";
    $matherials4;
    $AddServices5;
    $DateREpair6;
    $Gift7;

    $typeKV1 = $_POST['House'];
    $Skv2 = $_POST['Shose2'];
    $typeRepair3 =$_POST['typeRepair3'];



    if($_POST['Material4'] == "y"){
        $matherials4 = $matherials4 . " Нужен черновой материал";
    }
    if($_POST['ClearMatherial4'] == "y"){
        $matherials4 = $matherials4 . " Нужен чистовой материал";
    }
    if($_POST['Job4'] == "y"){
        $matherials4 = $matherials4 . " Нужны только работы";
    }


    if($_POST['DesignProject5'] == "y"){
        $AddServices5 = $AddServices5 . " Полный дизайн-проект";
    }
    if($_POST['Window5'] == "y"){
        $AddServices5 = $AddServices5 . " Окна";
    }
    if($_POST['Ceiling5'] == "y"){
        $AddServices5 = $AddServices5 . " Натяжные потолки";
    }
    if($_POST['Kitchen5'] == "y"){
        $AddServices5 = $AddServices5 . " Кухня";
    }
    if($_POST['Door5'] == "y"){
        $AddServices5 = $AddServices5 . " Двери";
    }
    if($_POST['Nothing5'] == "y"){
        $AddServices5 = $AddServices5 . " Ничего не требуется";
    }

    $DateREpair6 =$_POST['DateREpair6'];

    $nameUser =$_POST['nameUser'];
    $Telefon =$_POST['telefonUser'];

    $Gift7 =$_POST['Gift7'];

    echo($typeKV1);
    echo($Skv2);
    echo($typeRepair3);
    echo($matherials4);
    echo($AddServices5);
    echo($DateREpair6);
    echo($Gift7);

    mysqli_query($connect, "INSERT INTO `CostRepair` (`typeKV1`, `Skv2`, `typeRepair3`, `matherials4`, `AddServices5`, `DateREpair6`, `Gift7`, `nameUser`, `Telefon`, `status`)
    VALUES ('" . $typeKV1 ."', '" . $Skv2 ."', '" . $typeRepair3 ."', '" . $matherials4 ."', '" . $AddServices5 ."', '" . $DateREpair6 ."', '" . $Gift7 ."', '" . $nameUser ."', '" . $Telefon ."', 'Не рассмотрено')");
    
    header('Location: ../rass4et.php');
?>