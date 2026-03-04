<?
    require_once "connect.php";
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/font.css">
    <link rel="stylesheet" href="../CSS/tov.css">
</head>
<body>
    <header>
        <a href="../katalog.php"><img src="../IMG/prof_remont.png" alt=""></a>
    </header>
    <?
    $result = mysqli_query($connect, "SELECT * FROM CartCatalog");
    while($row = mysqli_fetch_array($result)){
        if($row['id'] == $id){?>
        <div class="block">
            <div class="slider">
                <?
                    $string =  $row['imgslider'];

                    $strsArray = explode(',', $string);
                    
                    foreach ($strsArray as $string) {?>
                        <img class="slide" src="<?="../". $string?>" alt="">
                <?}?>
                <div class="buttons">
                    <input type="button" class="prev_but slideBut" value="&lt">
                    <input type="button" class="next_but slideBut" value="&gt">
                </div>
            </div>
            <div class="container">
                <p class="p1"><?=$row['name']?></p>
                <p class="p2"><?=$row['adres']?></p>
                <p class="p3"><?=$row['price']?></p>
                <div class="column">
                    <p class="p4">Отзыв хозяина квартиры:</p>
                    <p class="p5">"<?=$row['review']?>"</p>
                    <p class="p2"><?=$row['nameReview']?></p>
                </div>
                <div class="column">
                    <p class="p6">Над проектом работали:</p>
                    <?
                        $string2 =  $row['workers'];

                        $strsArray2 = explode(',', $string2);
                        foreach ($strsArray2 as $string2) {?>
                            <div class="row">
                                <img src="<??>" alt="">
                                <div class="column">
                                <p class="p2"><?=$string2?></p>
                                <p class="p5">Инженер</p>
                        </div>
                    </div>
                    <?}?>
                </div>
                <a href="../rass4et.php"><button>Хочу такой ремонт</button></a>
            </div>
        </div>
    <?}}
    ?>
    <script src="../JS/ScriptTov.js"></script>
</body>
</html>


<?/*?><img src="<?="../".$row['img']?>" alt="">
            <p class="p1"><?=$row['name']?></p>
            <p class="p2"><?=$row['adres']?></p>
            <p class="p3"><?=$row['price']?></p>
            */?>