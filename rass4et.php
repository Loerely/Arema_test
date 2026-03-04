<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рассчитайте стоимость ремонта</title>
    <link rel="stylesheet" href="CSS/style_rass4et.css">
    <link rel="stylesheet" href="CSS/font.css">
</head>
<body>
    <header>
        <div class="div_logo">
            <a href="index.php"><img class="logo" src="img/prof_remont_white.png" alt=""></a>
            <div>
                <p class="num">+8 (901) 991 11 14</p>
                <p>Получите консультацию от <br> инженера-сметчика или дизайнера</p>
            </div>
        </div>
        <div class="div_header">
            <p class="zag">Рассчитайте стоимость ремонта <br>
                будущей квартиры прямо сейчас </p>
            <p class="zag2">Ответьте на 7 вопросов и получите:</p>
            <div class="row">
                <dir>
                    <img src="img/rass4et/header/accounting.png" alt="">
                    <p>Расчет стоимости <br> ремонта квартиры</p>
                </dir>
                <dir class="row">
                    <img src="img/rass4et/header/open-book.png" alt="">
                    <p>Каталог материалов <br>по ценам производителя </p>
                </dir>
                <dir class="row">
                    <img src="IMG/rass4et/header/giftbox.png" alt="">
                    <p>1 из 2 подарков к заказу</p>
                </dir>
            </div>
            <button onmousedown="OpenDialog()">Узнать стоимость ремонта</button>
        </div>
    </header>
    <div class="bl1">
        <div>
            <p class="zag">Несколько слов о нас</p>
            <p class="zag2">Можно много говорить об опыте, качестве наших услуг <br>
                и системах контроля объектов, но что, действительно, важно? <br> 
                Только факты и отзывы реальных клиентов!</p>
            
            <div>
                <dir>
                    <img src="img/rass4et/bl1/__ (1).png" alt="">
                    <p>Лучшая строительная компания России <br>
                        по Версии Биржи Профессионалов Петровича</p>
                </dir>
                <dir>
                    <img src="img/rass4et/bl1/Houzz-Logo (1).png" alt="">
                    <p>Лучший клиентский сервис Houzz 2019 <br>
                        по направлению дизайн интерьера</p>
                </dir>
                <dir>
                    <img src="img/rass4et/bl1/__1 (1).png" alt="">
                    <p>ТОП-10 строительных компаний <br> Москвы по версии Yell</p>
                </dir>
            </div>
            <div class="row">
                <img src="img/rass4et/bl1/Group.png" alt="">
                <a href="">Посмотреть сертификат</a>
            </div>
            <p>Руководитель отдела продаж - Буйняков Сергей, <br> Офис-менеджер - Полина Иванова</p>
        </div>
    </div>


    <div class="bl2">
        <div class="text">
            <p class="zag">500</p>
            <p class="zag2">реальных отзывов <br> в сети интернет</p>
        </div>
        
        <div class="line"></div>

        <div class="text">
            <p class="zag">270</p>
            <p class="zag2">реализованных <br> дизайн-проектов</p>
        </div>

        <div class="line"></div>

        <div class="text">
            <p class="zag">53</p>
            <p class="zag2">специалиста <br> в штате</p>
        </div>

        <div class="line"></div>

        <div class="text">
            <p class="zag">7</p>
            <p class="zag2">лет — минимальный <br> стаж архитекторов</p>
        </div>
    </div>

    <footer>
        <p>© AREMA профессиональный ремонт квартир в Москве и МО. ИНН 7716912681 ОГРН 1187746496233</p>
        <a href="">Политика конфиденциальности</a>
    </footer>



    <dialog id="dialog">
        <div class="dialog_bl">
            <a href="" class="close"><img src="IMG/rass4et/dialog/X.svg" alt=""></a>
            <form action="BD/form_rass4et.php" method="post" class="dialog_inf">


                <div class="slide slide1">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining1">
                        <p>Осталось ответить на 7 вопросов, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 1</p>
                            <img src="IMG/rass4et/dialog/Group.png" alt="">
                        </div>
                        <div>
                            <div class="row">
                                <p class="zag2">1</p>
                                <p class="zag3">Что будем ремонтировать? </p>
                            </div>
                            <div>
                                <p class="zag4">Выберите один вариант</p>
                                <div class="row inf">
                                    <div>
                                        <img src="img/rass4et/dialog/slide1/new-building.png" alt="">
                                        <div class="row">
                                            <input type="radio" name="House" id="" value="Новостройка">
                                            <p class="zag4">Новостройка</p>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="img/rass4et/dialog/slide1/secondary-housing.png" alt="">
                                        <div class="row">
                                        <input type="radio" name="House" id="" value="Вторичное жилье">
                                            <p class="zag4">Вторичное жилье</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="slide slide2">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining2">
                        <p>Осталось ответить на 6 вопросов, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 2</p>
                            <img src="IMG/rass4et/dialog/Group2.png" alt="">
                        </div>
                        <div>
                            <div class="row">
                                <p class="zag2">2</p>
                                <p class="zag3">Какая площадь пола (S) вашего помещения: </p>
                            </div>
                            <div>
                                <input type="range" name="Shose2" id="" value="100" min="1" max="200" oninput="this.nextElementSibling.value = this.value">
                                <output>100</output>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="slide slide3">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining3">
                        <p>Осталось ответить на 5 вопросов, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 3</p>
                            <img src="IMG/rass4et/dialog/Group3.png" alt="">
                        </div>
                        <div>
                            <div>
                                <p class="zag2">3</p>
                                <p class="zag3">Какой вид ремонта Вас интересует?</p>
                            </div>
                            <p>Выберите один вариант</p>
                            <div class="row inf">
                                <div>
                                    <img src="img/rass4et/dialog/slide3/redecorating.png" alt="">
                                    <div class="row">
                                    <input type="radio" name="typeRepair3" id="" value="Косметический ремонт">
                                        <p>Косметический ремонт</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/rass4et/dialog/slide3/standard-repair.png" alt="">
                                    <div class="row">
                                    <input type="radio" name="typeRepair3" id="" value="Стандартный ремонт">
                                        <p>Стандартный ремонт</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/rass4et/dialog/slide3/overhaul.png" alt="">
                                    <div class="row">
                                        <input type="radio" name="typeRepair3" id="" value="Капитальный ремонт">
                                        <p>Капитальный ремонт</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="slide slide4">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining4">
                        <p>Осталось ответить на 4 вопроса, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 4</p>
                            <img src="IMG/rass4et/dialog/Group4.png" alt="">
                        </div>
                        <div>
                            <div>
                                <p class="zag2">4</p>
                                <p class="zag3">Нужна ли Вам помощь в покупке материалов?</p>
                            </div>
                            <p>Выберите один вариант</p>
                            <div class="row inf">
                                <div>
                                    <img src="img/rass4et/dialog/slide4/draft-material.png" alt="">
                                    <div class="row">
                                        <input type="checkbox" name="Material4" id="" value="y">
                                        <p>Нужен черновой материал</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/rass4et/dialog/slide4/fine-material.png" alt="">
                                    <div class="row">
                                        <input type="checkbox" name="ClearMatherial4" id="" value="y">
                                        <p>Нужен чистовой материал</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/rass4et/dialog/slide4/work (1).png" alt="">
                                    <div class="row">
                                        <input type="checkbox" name="Job4" id="" value="y">
                                        <p>Нужны работы</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="slide slide5">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining5">
                        <p>Осталось ответить на 3 вопроса, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 5</p>
                            <img src="IMG/rass4et/dialog/Group5.png" alt="">
                        </div>
                        <div class="row">
                            <p class="zag2">5</p>
                            <p class="zag3">Нужны ли Вам дополнительные услуги по обустройству квартиры?</p>
                        </div>
                        <div>
                            <div class="row">
                                <input type="checkbox" name="DesignProject5" id="" value="y">
                                <p>Полный дизайн-проект</p>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="Window5" id="" value="y">
                                <p>Окна</p>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="Ceiling5" id="" value="y">
                                <p>Натяжные потолки</p>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="Kitchen5" id="" value="y">
                                <p>Кухня</p>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="Door5" id="" value="y">
                                <p>Двери</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="slide slide6">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining6">
                        <p>Осталось ответить на 2 вопроса, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 6</p>
                            <img src="IMG/rass4et/dialog/Group6.png" alt="">
                        </div>
                        <div class="row">
                            <p class="zag2">6</p>
                            <p class="zag3">Когда планируете начать ремонт?</p>
                        </div>
                        <div>



                            <div class="row">
                                <input type="radio" name="DateREpair6" id="" value="В ближайшие 5 дней">
                                <p>В ближайшие 5 дней</p>
                            </div>
                            <div class="row">
                                <input type="radio" name="DateREpair6" id="" value="В течение 14 дней">
                                <p>В течение 14 дней</p>
                            </div>
                            <div class="row">
                                <input type="radio" name="DateREpair6" id="" value="В следующем месяце">
                                <p>В следующем месяце</p>
                            </div>
                            <div class="row">
                                <input type="radio" name="DateREpair6" id="" value="Ключи еще не получил">
                                <p>Ключи еще не получил</p>
                            </div>
                            <div class="row">
                                <input type="radio" name="DateREpair6" id="" value="Квартиру не купил, прицениваюсь">
                                <p>Квартиру не купил, прицениваюсь</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="slide slide7">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining7">
                        <p>Осталось ответить на 1 вопрос, чтобы получить гарантированный подарок</p>
                    </div>
                    <div class="div_form">
                        <div class="row">
                            <p class="zag">Шаг 7</p>
                            <img src="IMG/rass4et/dialog/Group7.png" alt="">
                        </div>
                        <div>
                            <div>
                                <p class="zag2">7</p>
                                <p class="zag3">Выберите подарок: </p>
                            </div>
                            <p>Выберите один вариант</p>
                            <div class="row inf">
                                <div>
                                    <img src="img/rass4et/dialog/slide7/disscount.png" alt="">
                                    <div class="row">
                                        <input type="radio" name="Gift7" id="" value="Индивидуальная скидка 20%">
                                        <p>Индивидуальная скидка 20%</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="img/rass4et/dialog/slide7/desing-project.png" alt="">
                                    <div class="row">
                                        <input type="radio" name="Gift7" id="" value="Полный дизайн-проект">
                                        <p>Полный дизайн-проект</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide slide8">
                    <div class="head">
                        <div class="row zag_row">
                            <img src="img/rass4et/dialog/prof_remont.png" alt="">
                            <p>Рассчитайте стоимость ремонта Вашей квартиры <br>
                                и получите каталог материалов, а так же 1 из 2 подарков</p>
                        </div>
                        <img src="img/rass4et/dialog/repairs.png" alt="">
                    </div>
                    <div class="lining lining8">
                        <p>Отлично! Вы ответили на 7 основных вопросов, которые значительно влияют на стоимость работ</p>
                    </div>
                    <div class="div_form">
                            <div class="lastDiv">
                                <p class="p1">Спасибо за ответы. Оставьте свой телефон, <br>
                                мы закрепим за Вами подарок</p>
                                <div class="row">
                                    <div class="column">
                                        <input type="text" name="nameUser" id="" placeholder="Имя">
                                        <input type="text" name="telefonUser" id="" placeholder="Контактный телефон" value="+7" maxlength="12">
                                        <input type="submit" value="Получить рассчет">
                                    </div>
                                    <div class="column divImg">
                                        <img src="img/rass4et/dialog/lastslide/calc.png" alt="">
                                    </div>
                                    <div class="column">
                                        <p class="p2">+ Каталог и Подарок <br>
                                        при заказе ремонта квартиры</p>
                                        <div class="row">
                                            <img src="img/rass4et/dialog/lastslide/Group.png" alt="">
                                            <p class="p4">Скидка 20%</p>
                                        </div>
                                        <p class="p3">Скидка действует в течение 30 дней! <br>
                                        Только для посетителей квиза</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <input type="button" class="prev_but slideBut" value="&lt">
                    <input type="button" class="next_but slideBut" value="&gt">
                </div>
            </form>
        </div>
    </dialog>
    <script src="JS/ScriptRass4et.js"></script>
    <script src="JS/ScriptDialogRass4et.js"></script>
</body>
</html>