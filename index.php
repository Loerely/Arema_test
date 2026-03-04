<?
    require_once'BD/connect.php';
    session_start();
    if(isset($_SESSION)){
        /*
            echo($_SESSION['user']['email']);
            echo($_SESSION['user']['name']);
            echo($_SESSION['user']['lastName']);
            echo($_SESSION['user']['nik']);
        */
    }

        if(isset($_POST["GoFormIndex1"])){
            if($_SESSION['user']['email'] != "admin"){
                if($_SESSION['user']['email'] != ""){
                    if($_POST["name1"] == "" || $_POST["telefon1"] == "7"){
                        echo "<script>alert(\"Пожалуйста, заполните все поля формы1.\");</script>";
                    }
                    else{
                        if(isset($_POST['yes1'])){
                            $name1 = $_POST["name1"];
                            $telefon1 = $_POST["telefon1"];
                            
                            header('Location: BD/form_index.php?name='. $name1 .'&telefon='. $telefon1 .'');
                        }
                        else{
                            echo "<script>alert(\"Пожалуйста, дайте свое согласие с условиями конфиденциальности.\");</script>";
                        }     
                    }
                }
                else{
                    echo "<script>alert(\"Пожалуйста, войдите в свой аккаунт\");</script>";
                }
            }
            else{
                    echo "<script>alert(\"Администратор не может отправлять запрос\");</script>";
            }
        }

        if(isset($_POST["GoFormIndex"])){
            if($_SESSION['user']['email'] != "admin"){
                if($_SESSION['user']['email'] != ""){
                    if($_POST["name"] == "" || $_POST["telefon"] == "7"){
                        echo "<script>alert(\"Пожалуйста, заполните все поля формы.\");</script>";
                    }
                    else{
                        if(isset($_POST['yes'])){
                            $name = $_POST["name"];
                            $telefon = $_POST["telefon"];
                            header('Location: BD/form_index.php?name='. $name .'&telefon='. $telefon .'');
                        }
                        else{
                            echo "<script>alert(\"Пожалуйста, дайте свое согласие с условиями конфиденциальности.\");</script>";
                        }     
                    }
                }
                else{
                    echo "<script>alert(\"Пожалуйста, войдите в свой аккаунт\");</script>";
                }
            }
            else{
                    echo "<script>alert(\"Администратор не может отправлять запрос\");</script>";
            }
            
        }

        if(isset($_POST["GoFormIndex2"])){
            if($_SESSION['user']['email'] != "admin"){
                if($_SESSION['user']['email'] != ""){
                    if($_POST["name2"] == "" || $_POST["telefon2"] == "7"){
                        echo "<script>alert(\"Пожалуйста, заполните все поля формы.\");</script>";
                    }
                    else{
                        if(isset($_POST['yes2'])){
                            $name = $_POST["name2"];
                            $telefon = $_POST["telefon2"];
                            header('Location: BD/form_index.php?name='. $name .'&telefon='. $telefon .'');
                        }
                        else{
                            echo "<script>alert(\"Пожалуйста, дайте свое согласие с условиями конфиденциальности.\");</script>";
                        }     
                    }
                }
                else{
                    echo "<script>alert(\"Пожалуйста, войдите в свой аккаунт\");</script>";
                }
            }
            else{
                    echo "<script>alert(\"Администратор не может отправлять запрос\");</script>";
            }
        }
    //859
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREMA</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/font.css">
</head>
<body>
    <header>
        <div>
            <a href="index.php"><img class="logo" src="img/prof_remont_white.png" alt=""></a>
            <a href="katalog.php">Портфолио</a>
            <?
            if($_SESSION['user']['email'] == "admin"){?>
                <a href="admin.php">Админ-панель</a>
            <?}
            ?>
            <a href="Rass4et.php">Калькулятор ремонта</a>
            <div>
                <p>+8 (901) 991 11 14</p>
                <p>Ежедневно с 9:00 до 21:00</p>
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
        <div  class="line">
            <a href="#price">Тарифы</a>
            <a href="#Job">Выполненные работы</a>
            <a href="#otz">Отзывы</a>
            <a href="#info">Почему мы?</a>
            <a href="#what">Как мы работаем</a>
            <a href="#cont">Контакты</a>
        </div>
        <div class="div_header">
            <div>
                <p class="p1">Ремонт квартир и помещений <br> <font>"под ключ" от 2160 руб/м2 </font></p>
                <div class="row">
                    <dir>
                        <img src="img/title/Group.png" alt="">
                        <p>Оплата за результат или в рассрочку</p>
                    </dir>
                    <dir>
                        <img src="img/title/Group 18.png" alt="">
                        <p>Гарантия 36 месяцев</p>
                    </dir>
                </div>
            </div>
            <form method="post">
                <p class="name">Хотите узнать точную стоимость ремонта?</p>
                <p class="name2">Оставьте заявку и получите <font>скидку 15% на все работы! <br> Вы сэкономите до 150 000 рублей</font></p>
                <div>
                    <p>Ваше имя</p>
                    <input type="text" name="name1" id="">
                </div>
                <div>
                    <p>Контактный номер</p>
                    <input type="text" name="telefon1" id="" value="+7" maxlength="12">
                </div>
                <input class="but2" type="submit" value="Отправить заявку" name="GoFormIndex1">
                <div class="row">
                    <input type="checkbox" name="yes1">
                    <p>Согласен с <a href=""><font>политикой конфиденциальности</font></a></p>
                </div>
            </form>
        </div>
    </header>
    

    <!--Блок 1-->
    <p class="zag_bl1">Знаем все о хорошем ремонте</p>
    <div class="bl1">
        <div class="box">
            <img src="img/title/bl1/Ellipse1.png" alt="">
            <p class="p1">Ремонт по ценам частной бригады</p>
            <p class="p2">Наши цены на 10% ниже рынка за счет автоматизации процессов и большого потока производства</p>
        </div>
        <div class="box">
            <img src="img/title/bl1/Ellipse2.png" alt="">
            <p class="p1">Полное юридическое обеспечение ремонта</p>
            <p class="p2">Сроки, гарантии и сумма зафиксированы договором. Оплата только по факту выполненных работ. Отвечаем за сроки денежной компенсацией.</p>
        </div>
        <div class="box">
            <img src="img/title/bl1/Ellipse3.png" alt="">
            <p class="p1">Оптовые программы с поставщиками материалов</p>
            <p class="p2">С нами до 30% выгоднее покупать черновые и чистовые материалы, сантехнику, электрику, двери и окна</p>
        </div>
        <div class="box">
            <img src="img/title/bl1/Houzz-Logo.png" alt="">
            <p class="p1">Лучший клиентский сервис Houzz 2023 по направлению дизайн интерьера</p>
        </div>
        <div class="box">
            <img src="img/title/bl1/__.png" alt="">
            <p class="p1">Лучшая строительная компания России по Версии Биржи Профессионалов Петровича</p>
        </div>
        <div class="box">
            <img src="img/title/bl1/__1.png" alt="">
            <p class="p1">ТОП-10 строительных компаний Тулы по версии Yell</p>
        </div>
    </div>


    <!--Слайдер 1-->
    <div class="div_slider1" id="price">
        <p class="zag">Тарифы</p>
        <p class="zag2">Минимальная сумма заказа от 50 000 руб.</p>
        <div class="slider1">
            <div>
                <button class="button_slider" onmousedown="slider1_slide1()">Капитальный</button>
                <button class="button_slider" onmousedown="slider1_slide2()">Стандартный</button>
                <button class="button_slider" onmousedown="slider1_slide3()">Косметический</button>
                <button class="button_slider" onmousedown="slider1_slide4()">Черновой</button>
            </div>

            <!--Содержимое слайдер 1-->
            <!--Слайд 1 слайдер1-->
            <div class="slide1 row">
                <div class="left">
                    <p class="p1">от 6 120 ₽/м²</p>
                    <p class="p2">без скидки: от <font class="throught">7 200 р./м²</font> </p>
                    <p class="p3">При заказе онлайн <font class="red">скидка 15%</font> <br> Выгода <font class="bold">1 080 ₽/м²</font></p>
                    <a href="rass4et.php"><button class="but" type="button">Получить смету</button></a>
                    <img src="IMG/title/slider1/Mask Group (1).png" alt="">
                    <div class="row">
                        <img src="IMG/title/slider1/photo-camera (1) 1.png" alt="">
                        <p class="p3">Фотосессия ремонта <font class="bold">бесплатно</font></p>
                    </div>
                </div>
                <div class="vertical_line"></div>
                <div class="right row">
                    <div class="right_div1">
                        <p class="p3"><font class="bold">Работы, входящие в ремонт</font></p>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по стенам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Монтаж электрики</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Монтаж сантехники</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Демонтажные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по полам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Плиточные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Устройство потолков</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена окон</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена дверей</p>
                        </div>
                    </div>
                    <div class="right_div2">
                        <div>
                            <p class="p3"><font class="bold">Чистовые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Обои</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Ламинат</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Настенная и напольная плитка</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Межкомнатные двери</p>
                            </div>
                            <p class="p4">от 2 470 ₽/м²</p>
                            <p class="p2">без скидки: от 2 717 р./м² </p>
                        </div>



                        <div>
                            <p class="p3"><font class="bold">Черновые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Смеси, грунтовки</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Гипсокартон, профили</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Реечный и натяжной потолок</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Медная проводка</p>
                            </div>
                            <p class="p4">от 1 530 ₽/м²</p>
                            <p class="p2">без скидки: от 1 683 р./м² </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Слайд 2 слайдер1-->
            <div class="slide2" style="display: none;">
                <div class="left">
                    <p class="p1">от  3 270 ₽/м²</p>
                    <p class="p2">без скидки: от <font class="throught">3 850 р./м²</font> </p>
                    <p class="p3">При заказе онлайн <font class="red">скидка 15%</font> <br> Выгода <font class="bold">570 ₽/м²</font></p>
                    <a href="rass4et.php"><button class="but" type="button">Получить смету</button></a>
                    <img src="IMG/title/slider1/Mask Group (1).png" alt="">
                    <div class="row">
                        <img src="IMG/title/slider1/photo-camera (1) 1.png" alt="">
                        <p class="p3">Фотосессия ремонта <font class="bold">бесплатно</font></p>
                    </div>
                </div>
                <div class="vertical_line"></div>
                <div class="right row">
                    <div class="right_div1">
                        <p class="p3"><font class="bold">Работы, входящие в ремонт</font></p>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по стенам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Демонтажные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по полам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Плиточные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена окон</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена дверей</p>
                        </div>
                    </div>
                    <div class="right_div2">
                        <div>
                            <p class="p3"><font class="bold">Чистовые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Настенная и напольная плитка</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Межкомнатные двери</p>
                            </div>
                            <p class="p4">от 2 470 ₽/м²</p>
                            <p class="p2">без скидки: от 2 717 р./м² </p>
                        </div>



                        <div>
                            <p class="p3"><font class="bold">Черновые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Смеси, грунтовки</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Гипсокартон, профили</p>
                            </div>
                            <p class="p4">от 1 530 ₽/м²</p>
                            <p class="p2">без скидки: от 1 683 р./м² </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Слайд 3 слайдер1-->
            <div class="slide3" style="display: none;">
                <div class="left">
                    <p class="p1">от  5 300 ₽/м²</p>
                    <p class="p2">без скидки: от <font class="throught">6 200 р./м²</font> </p>
                    <p class="p3">При заказе онлайн <font class="red">скидка 15%</font> <br> Выгода <font class="bold">900 ₽/м²</font></p>
                    <a href="rass4et.php"><button class="but" type="button">Получить смету</button></a>
                    <img src="IMG/title/slider1/Mask Group (1).png" alt="">
                    <div class="row">
                        <img src="IMG/title/slider1/photo-camera (1) 1.png" alt="">
                        <p class="p3">Фотосессия ремонта <font class="bold">бесплатно</font></p>
                    </div>
                </div>
                <div class="vertical_line"></div>
                <div class="right row">
                    <div class="right_div1">
                        <p class="p3"><font class="bold">Работы, входящие в ремонт</font></p>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по стенам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Демонтажные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по полам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Плиточные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Устройство потолков</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена окон</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена дверей</p>
                        </div>
                    </div>
                    <div class="right_div2">
                        <div>
                            <p class="p3"><font class="bold">Чистовые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Обои</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Ламинат</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Настенная и напольная плитка</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Межкомнатные двери</p>
                            </div>
                            <p class="p4">от 2 470 ₽/м²</p>
                            <p class="p2">без скидки: от 2 717 р./м² </p>
                        </div>



                        <div>
                            <p class="p3"><font class="bold">Черновые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Смеси, грунтовки</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Гипсокартон, профили</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Реечный и натяжной потолок</p>
                            </div>
                            <p class="p4">от 1 530 ₽/м²</p>
                            <p class="p2">без скидки: от 1 683 р./м² </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Слайд 4 слайдер1-->
            <div class="slide4" style="display: none;">
                <div class="left">
                    <p class="p1">от  2 700 ₽/м²</p>
                    <p class="p2">без скидки: от <font class="throught">3 200 р./м²</font> </p>
                    <p class="p3">При заказе онлайн <font class="red">скидка 15%</font> <br> Выгода <font class="bold">480 ₽/м²</font></p>
                    <a href="rass4et.php"><button class="but" type="button">Получить смету</button></a>
                    <img src="IMG/title/slider1/Mask Group (1).png" alt="">
                    <div class="row">
                        <img src="IMG/title/slider1/photo-camera (1) 1.png" alt="">
                        <p class="p3">Фотосессия ремонта <font class="bold">бесплатно</font></p>
                    </div>
                </div>
                <div class="vertical_line"></div>
                <div class="right row">
                    <div class="right_div1">
                        <p class="p3"><font class="bold">Работы, входящие в ремонт</font></p>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по стенам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Демонтажные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Работы по полам</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Плиточные работы</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Устройство потолков</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена окон</p>
                        </div>
                        <div class="row">
                            <img src="IMG/title/slider1/icon.png" alt="">
                            <p>Замена дверей</p>
                        </div>
                    </div>
                    <div class="right_div2">
                        <div>
                            <p class="p3"><font class="bold">Чистовые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Межкомнатные двери</p>
                            </div>
                            <p class="p4">от 2 470 ₽/м²</p>
                            <p class="p2">без скидки: от 2 717 р./м² </p>
                        </div>



                        <div>
                            <p class="p3"><font class="bold">Черновые материалы</font></p>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Смеси, грунтовки</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Гипсокартон, профили</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Реечный и натяжной потолок</p>
                            </div>
                            <div class="row">
                                <img src="IMG/title/slider1/icon.png" alt="">
                                <p>Медная проводка</p>
                            </div>
                            <p class="p4">от 1 530 ₽/м²</p>
                            <p class="p2">без скидки: от 1 683 р./м² </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Блок 2-->
    <div class="bl2">
        <form method="post">
            <div class="div_zag"><p class="zag"><font>Бесплатная консультация</font> <br> по вопросам ремонта</p></div>
            <div class="inf">
                <div class="inf1">
                    <dir>
                        <img src="img/title/bl2/Group.png" alt="">
                        <p>Работаем без выходных, приедем тогда, когда удобно Вам</p>
                    </dir>
                    <dir>
                        <img src="img/title/bl2/Group (2).png" alt="">
                        <p>Индивидуальная консультация от инженера и дизайнера на личной встрече</p>
                    </dir>
                    <dir>
                        <img src="img/title/bl2/Group (1).png" alt="">
                        <p>Смета без скрытых платежей, считаем без ухищрений и только то, что нужно Вам</p>
                    </dir>
                </div>
                <div class="inf2">
                    <div>
                        <p>Ваше имя</p>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <p>Контактный телефон</p>
                        <input type="text" name="telefon" value="+7" maxlength="12">
                    </div>
                    <div>
                        <input type="submit" value="Отправить" name="GoFormIndex">
                        <div class="row">
                            <input type="checkbox" name="yes">
                            <p>Согласен с <a href=""><font>политикой конфиденциальности</font></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--Блок 3-->
    <div class="bl3">
        <div>
            <p class="zag1">Калькулятор <br>стоимости ремонта</p>
            <div>
                <p class="zag2">- Привет, <br> меня зовут Леонид</p>
                <p class="zag3">Давайте узнаем стоимость вашего <br> ремонта в компании арена</p>
                <a href="rass4et.php"><button type="button">Отправить заявку</button></a>
            </div>
        </div>
    </div>


    <!--Слайдер 2-->
    <div class="div_slider2" id="info">
        <p class="zag">О нас</p>
        <div class="slider2">
            <div>
                <button class="button_slider" onmousedown="slider2slide1()">Философия</button>
                <button class="button_slider" onmousedown="slider2slide2()">Ценности</button>
                <button class="button_slider" onmousedown="slider2slide3()">История</button>
                <button class="button_slider" onmousedown="slider2slide4()">Отбор мастеров</button>
            </div>

            <!--Содержимое слайдер 2-->
            <!--Слайд 1 слайдер2-->
            <div class="slider2_slide1 row">
                <div class="left">
                    <img src="IMG/title/slider2/employees.png" alt="">
                </div>
                <div class="vertical_line"></div>
                <div class="right column">
                    <!--<p class="zagolovok">Философия</p>-->
                    <p>Мы ставим перед собой цель стать ведущей компанией, предоставляющей комплексные услуги Проектирования, Производства и Строительства в России.</p>
                    <p>Вместе мы реализуем проекты, отвечающие международным стандартам и прокладываем путь к пониманию потребностей Клиента, основываясь на фундаментальных ценностях, ведущих к достижению нашей цели.</p>
                    <p>Мы всегда уверены в своей компании и ее услугах, поэтому стремимся стать для клиентов и партнеров островом надежности в нестабильном рыночном пространстве. Мы умеем вовремя реагировать на изменения и быть гибкими, поэтому мы с уверенностью смотрим в будущее!</p>
                </div>
            </div>

            <!--Слайд 2 слайдер2-->
            <div class="slider2_slide2 row" style="display: none;">
            <div class="left">
                    <img class="img2" src="IMG/title/slider2/Filipp-Belyakov-3png.png" alt="">
                </div>
                <div class="vertical_line"></div>
                <div class="right column">
                    <!--<p class="zagolovok">Философия</p>-->
                    <p>Всё, что делает наша компания, направлено на удовлетворение клиента. Внимание к клиенту и желание быть ему полезным присутствуют во всех действиях компании и сотрудников. </p>
                    <p>"AREMA" ценит взаимное доверие и уважение, честность и открытость в отношениях. Каждый сотрудник — индивидуальность, и именно благодаря этому они дополняют друг друга своими уникальными знаниями и навыками.</p>
                    <p>Мы дорожим доверием клиентов и деловых партнёров и всегда выполняем свои обязательства. Стабильность, постоянство и долгосрочность сотрудничества -  наш главный приритет. </p>
                </div>
            </div>
                    
            <!--Слайд 3 слайдер2-->
            <div class="slider2_slide3 row" style="display: none;">
            <div class="left">
                    <img class="img3" src="IMG/title/slider2/pagina-web-01 1.png" alt="">
                </div>
                <div class="vertical_line"></div>
                <div class="right column">
                    <!--<p class="zagolovok">Философия</p>-->
                    <p>Благодаря упорству, качеству оказанных услуг и сравнительно недорогим ценам компания стала преодолевать московскую конкуренцию. Арендовали небольшой офис.</p>
                    <p>В этом году приоритетным стал ремонт по дизайн-проектам. Значительно повысилась скорость сдачи объектов, почти к нулю свелись претензии и гарантии. .</p>
                    <p></p>
                </div>
            </div>
            
            <!--Слайд 4 слайдер2-->
            <div class="slider2_slide4 row" style="display: none;">
            <div class="left">
                    <img src="IMG/title/slider2/zamer6ik 1.png" alt="">
                </div>
                <div class="vertical_line"></div>
                <div class="right column">
                    <!--<p class="zagolovok">Философия</p>-->
                    <p>Качественный исполнитель должен знать все ремонтные технологии, а также уметь работать со всеми необходимыми инструментами и оборудованием.</p>
                    <p>Наши мастера имеют большое количество лет опыта, а также приличное портфолио работ. Это позволяет нашим клиентам с уверенностю обращаться к мастерам нашей компании и повысит доверие клиентов.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Блок 5-->
    <div class="bl5" id="Job">
        <p class="zag1">Выполненные работы</p>
        <p class="zag2">Сейчас в альбоме нашей компанни более 800 объектов</p>
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
            <?
            if($row['id'] == 6){
                break;
            }
            }
            
        ?> 
        </div>
    </div>


    <!--Блок 4-->
    <div class="bl4" id="otz">
        <p class="zag1">Отзывы наших клиентов</p>
        <p class="zag2">Для нас важно, чтобы Вы улыбались после ремонта!</p>
        <div class="sliderBl4">
            <dir class="slideBl4" style="display: flex;">
                <img src="img/title/bl4/slide 1.jpg" alt="">
                <p class="zag3">Ольга Владимировна</p>
                <p class="zag4">Я настоятельно рекомендую компанию «AREMA» как высокопрофессионального и надёжного подрядчика. Недавно они выполнили для меня капитальный ремонт квартиры, и я не могу нарадоваться результатом.</p>
            </dir>
            <dir class="slideBl4" style="display: none;">
            <img src="img/title/bl4/slide2.jpg" alt="">
                <p class="zag3">Иван Фомичев</p>
                <p class="zag4">Бригада была пунктуальна, организована и очень внимательна к деталям. Они работали в тесном контакте со мной на протяжении всего проекта, чтобы убедиться, что все мои потребности и пожелания были учтены.</p>
            </dir>
            <dir class="slideBl4" style="display: none;">
            <img src="img/title/bl4/slide 3.jpg" alt="">
                <p class="zag3">Дмитрий Стручев</p>
                <p class="zag4">Качество выполненных работ было безупречным. Они использовали только высококачественные материалы и соблюдали самые высокие стандарты мастерства. Моя квартира теперь выглядит потрясающе, и я получаю комплименты от всех, кто её посещает.</p>
            </dir>
            <dir class="slideBl4" style="display: none;">
            <img src="img/title/bl4/slide 4.jpeg" alt="">
                <p class="zag3">Николай Дунаев</p>
                <p class="zag4">Я очень благодарен компании «AREMA» за их тяжёлую работу и преданность делу. Они сделали мою квартиру местом, куда я с гордостью приглашаю гостей.</p>
            </dir>
            <dir class="slideBl4" style="display: none;">
            <img src="img/title/bl4/slide 5.jpg" alt="">
                <p class="zag3">Владимир Абрамов</p>
                <p class="zag4">Отличная фирма! После ремонта остались самые приятные впечатления. Сроки соблюдены и качество выполнения работ на высоком уровне! Очень помогли в подборе отделочных материалов. Большое спасибо бригаде мастеров, будем с радостью вас рекомендовать!</p>
            </dir>
        </div>
        <div class="divBut">
            <input class="butSlide" type="button" class="prev_but" value="&lt" onmousedown="showPreviousSlide()">
            <input class="butSlide" type="button" class="next_but" value="&gt" onmousedown="shovNextSlide()">
        </div>
    </div>



    <!--Блок 6-->
    <div class="bl6">
        <p class="zag">Сотрудничество с производителями</p>
        <div class="bl6_inf">
            <div>
                <img src="img/title/bl6/krauf.png" alt="">
                <p>Строительные материалы, гипсокартон, штукатурка</p>
            </div>
            <div>
                <img src="img/title/bl6/Barlinek.png" alt="">
                <p>Паркетная доска, деревянный пол, напольные покрытия</p>
            </div>
            <div>
                <img src="img/title/bl6/Bravo1.png" alt="">
                <p>Двери, фурнитура</p>
            </div>
            <div>
                <img src="img/title/bl6/Italon1.png" alt="">
                <p>Керамические изделия и сантехническое оборудование</p>
            </div>
            <div>
                <img src="img/title/bl6/d21.png" alt="">
                <p>Керамические изделия и оборудование</p>
            </div>
            <div>
                <img src="img/title/bl6/Egger.png" alt="">
                <p>Строительные материалы, мебель, напольные покрытия</p>
            </div>
            <div>
                <img src="img/title/bl6/kronotex.png" alt="">
                <p>Линолеум, ламинат, паркетная доска </p>
            </div>
            <div>
                <img src="img/title/bl6/tarkett1.png" alt="">
                <p>Плитка, линолеум, ламинат, паркетная доска </p>
            </div>
        </div>
    </div>


    <!---->
    <div class="bl7" id="what">
        <p>Мы делаем настоящий ремонт <br>под ключ, что это значит?</p>
        <div class="bl7_container">
            <div class="inf">
                <img src="img/title/bl7/doors.png" alt="">
                <p>Двери</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (6).png" alt="">
                <p>Напольные покрытия</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (2).png" alt="">
                <p>Окна</p>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (3).png" alt="">
                <p>Кондиционеры</p>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (7).png" alt="">
                <p>Кухни</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (4).png" alt="">
                <p>Мебель</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (8).png" alt="">
                <p>Электрика</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (9).png" alt="">
                <p>Сантехника</p>
                <div class="row">
                    <img src="img/title/bl7/Vector (2).png" alt="">
                    <a href="rass4et.php">Рассчитать со скидкой</a>
                </div>
            </div>
            <div class="inf">
                <img src="img/title/bl7/mask Group (10).png" alt="">
                <p>Черновые материалы</p>
            </div>
        </div>
    </div>


    <!--Блок 8-->
    <div class="bl8">
        <div>
            <p class="p1">Ремонт, о котором Вы <br>мечтали, начинается здесь</p>
            <p class="p2">Остались вопросы? Оставьте заявку, <br> мы свяжемся с Вами в течении 15 минут</p>
            <form method="post">
                <div>
                    <p class="p_form">Ваше имя</p>
                    <input type="text" name="name2" id="">
                </div>
                <div>
                    <p class="p_form">Контактный номер</p>
                    <input type="text" name="telefon2" id="" value="+7">
                </div>
                <input class="but2" type="submit" value="Отправить заявку" name="GoFormIndex2">
                <div class="row">
                    <input type="checkbox" name="yes2">
                    <p>Согласен с <a href=""><font>политикой конфиденциальности</font></a></p>
                </div>
            </form>
        </div>
    </div>


    <!--Блок 9-->
    <div class="bl9" id="cont">
        <p class="zag1">Мы всегда на связи</p>
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6347.329234632404!2d37.628777841068086!3d55.77379163516709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a6e59f00001%3A0x8ef405dba400eb4!2z0L_RgC3RgiDQnNC40YDQsCwgMTAx0YExLCDQnNC-0YHQutCy0LAsIDEyOTA5MA!5e0!3m2!1sru!2sru!4v1719350206924!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="inf">
                <p class="p1">Адрес главного офиса:</p>
                <p class="p2">Москва, Проспект мира, дом 101с1 <br>
                (5 минут от метро Алексеевская)<br>Ежедневно с 9:00 до 21:00</p>
                <p class="p1">Контактный телефон:</p>
                <p class="p3">+7 (499) 521-42-49</p>
                <p class="p1">Почта:</p>
                <p class="p2">Гарантийное обслуживание</p>
                <p class="p3">support@arema-group.ru</p>
                <p class="p2">Любые другие вопросы</p>
                <p class="p3">info@arema-group.ru</p>
            </div>
        </div>
    </div>



    <!--Подвал сайта-->
    <footer>
        <p>© AREMA профессиональный ремонт квартир в Москве и МО. ИНН 7716912681 ОГРН 1187746496233</p>
        <a href="">Политика конфиденциальности</a>
    </footer>
    <script src="JS/ScriptIndex.js"></script>
</body>
</html>
<!---->