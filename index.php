<!-- <?php

        include "databases.php";

        $result = mysqli_query($link, "SELECT * FROM `fameles` WHERE `id`='2'");

        $fameles = mysqli_fetch_assoc($result);



        echo $fameles['title_1']


        ?>  -->



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="http://localhost/RocketBusinessTest/img/favicon.ico" type="image/ico" />
    <!-- Добавление фона -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400&family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>RocketBusinessTest</title>
</head>

<body>
    <header>
        <div class="container-header">
            <div class="top-head">
                <div class="top-head-left">
                    <button id="modalbutton" type="button" onclick="changeClass(div)" aria-label="Close"><img src="http://localhost/RocketBusinessTest/img/Group 24.svg" alt="left"></button>

                    <a href="/index.html" class="logo">
                        <img src="http://localhost/RocketBusinessTest/img/LOGO.png" alt="Logo" />
                    </a>

                    <div class="card-link">
                        <a href="https://clck.ru/gN4MK" target="_blank">
                            <img src="http://localhost/RocketBusinessTest/img/placeholder.svg" alt="indicator" />
                            <span>Ростов-на-Дону</span>
                        </a>
                        <a href="https://clck.ru/gN4MK" target="_blank" class="lenina">
                            &nbsp;&nbsp;&nbsp;&nbsp; ул. Ленина, 2Б
                        </a>
                    </div>

                </div>
                <div class="top-head-right">
                    <div class="number-phone">
                        <a href="tel:+7(863) 000 00 00">
                            <img src="http://localhost/RocketBusinessTest/img/whatsapp 1.png" alt="numberphone" />
                            <span>+7(863) 000 00 00</span> </a>
                        <a href="https://clck.ru/gN4MK" target="_blank" class="lenina-number">
                            &nbsp;&nbsp;&nbsp;&nbsp; Ростов-на-Дону
                        </a>

                    </div>
                    <div class="button-block">
                        <input type="button" value="Записаться на прием">
                    </div>
                </div>
            </div>
            <div class="link-head"></div>
        </div>
    </header>

    <nav class="nav-top">
        <div class="nav-bar">
            <a href="#">
                О клинике
            </a>
            <a href="#">
                Услуги
            </a>
            <a href="#">
                Специалисты
            </a>
            <a href="#">
                Цены
            </a>
            <a href="#">
                Контакты
            </a>
    </nav>

    <div class="main-container">
        <div class="main-block">
            <h1>Многопрофильная клиника для детей
                и взрослых</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna
                aliqua</p>
        </div>
        <img src="http://localhost/RocketBusinessTest/img/Rectangle 9.jpg" alt="">
    </div>

    <!--Slaider-->

    <div class="slider">
        <div class="item">
            <div class="check-up-container">
                <div class="text-block flex-item">
                    <?php
                    include "databases.php";
                    $result = mysqli_query($link, "SELECT * FROM `fameles` WHERE `id`='1'");
                    $fameles = mysqli_fetch_assoc($result);
                    ?>
                    <h1>CHECK-UP-
                        <?php echo $fameles['id'] ?>
                    </h1>
                    <h3>для
                        <?php echo $fameles['gender'] ?>
                    </h3>
                    <ul>
                        <li>
                            <?php echo $fameles['title_1'] ?>
                        </li>
                        <li>
                            <?php echo $fameles['title_2'] ?>
                        </li>
                        <li>
                            <?php echo $fameles['title_3'] ?>
                        </li>
                        </li>
                        <li>
                            <?php echo $fameles['title_4'] ?>
                        </li>
                    </ul>
                    <div class="price-block">
                        <h2>Всего
                            <?php echo $fameles['price'] ?>₽
                        </h2>
                        <span><s>
                                <?php echo $fameles['old_price'] ?>₽
                            </s></span>
                    </div>

                    <div class="botton-container">
                        <div class="button-block-check">
                            <input type="button" value="Записаться" class="left">
                        </div>
                        <div class="button-block-check">
                            <input type="button" value="Подробнее" class="right">
                        </div>
                    </div>
                </div>
                <img src="http://localhost/RocketBusinessTest/img/doctor-working-table 1.jpg" alt="doctor">

            </div>

        </div>

        <div class="item">
            <div class="check-up-container">
                <div class="text-block flex-item">
                    <?php
                    include "databases.php";
                    $result_2 = mysqli_query($link, "SELECT * FROM `fameles` WHERE `id`='2'");
                    $fameles = mysqli_fetch_assoc($result_2);
                    ?>
                    <h1>CHECK-UP-<?php echo $fameles['id'] ?></h1>
                    <h3>для <?php echo $fameles['gender'] ?></h3>
                    <ul>
                        <li><?php echo $fameles['title_1'] ?></li>
                        <li><?php echo $fameles['title_2'] ?></li>
                        <li><?php echo $fameles['title_3'] ?></li>
                        <li><?php echo $fameles['title_4'] ?> </li>
                    </ul>
                    <div class="price-block">
                        <h2>Всего <?php echo $fameles['price'] ?>₽</h2>
                        <span><s><?php echo $fameles['old_price'] ?>₽</s></span>
                    </div>

                    <div class="botton-container">
                        <div class="button-block-check">
                            <input type="button" value="Записаться" class="left">
                        </div>
                        <div class="button-block-check">
                            <input type="button" value="Подробнее" class="right">
                        </div>
                    </div>
                </div>
                <img src="http://localhost/RocketBusinessTest/img/doctor-working-table 1.jpg" alt="doctor">

            </div>
            <!-- <div class="slideText">Заголовок слайда 2</div> -->
        </div>

        <div class="item">
            <div class="check-up-container">
                <div class="text-block flex-item">
                    <?php
                    include "databases.php";
                    $result_3 = mysqli_query($link, "SELECT * FROM `fameles` WHERE `id`='3'");
                    $fameles = mysqli_fetch_assoc($result_3);
                    ?>
                    <h1>CHECK-UP-<?php echo $fameles['id'] ?></h1>
                    <h3>для <?php echo $fameles['gender'] ?></h3>
                    <ul>
                        <li><?php echo $fameles['title_1'] ?></li>
                        <li><?php echo $fameles['title_2'] ?></li>
                        <li><?php echo $fameles['title_3'] ?></li>
                        <li><?php echo $fameles['title_4'] ?> </li>
                    </ul>
                    <div class="price-block">
                        <h2>Всего <?php echo $fameles['price'] ?>₽</h2>
                        <span><s><?php echo $fameles['old_price'] ?>₽</s></span>
                    </div>

                    <div class="botton-container">
                        <div class="button-block-check">
                            <input type="button" value="Записаться" class="left">
                        </div>
                        <div class="button-block-check">
                            <input type="button" value="Подробнее" class="right">
                        </div>
                    </div>
                </div>
                <img src="http://localhost/RocketBusinessTest/img/doctor-working-table 1.jpg" alt="doctor">

            </div>
            <!-- <div class="slideText">Заголовок слайда 3</div> -->
        </div>
        <div class="item">
            <div class="check-up-container">
                <div class="text-block flex-item">
                    <?php
                    include "databases.php";
                    $result_4 = mysqli_query($link, "SELECT * FROM `fameles` WHERE `id`='4'");
                    $fameles = mysqli_fetch_assoc($result_4);
                    ?>
                    <h1>CHECK-UP-<?php echo $fameles['id'] ?></h1>
                    <h3>для <?php echo $fameles['gender'] ?></h3>
                    <ul>
                        <li><?php echo $fameles['title_1'] ?></li>
                        <li><?php echo $fameles['title_2'] ?></li>
                        <li><?php echo $fameles['title_3'] ?></li>
                        <li><?php echo $fameles['title_4'] ?> </li>
                    </ul>
                    <div class="price-block">
                        <h2>Всего от <?php echo $fameles['price'] ?>₽</h2>
                        <span><s><?php echo $fameles['old_price'] ?>₽</s></span>
                    </div>

                    <div class="botton-container">
                        <div class="button-block-check">
                            <input type="button" value="Записаться" class="left">
                        </div>
                        <div class="button-block-check">
                            <input type="button" value="Подробнее" class="right">
                        </div>
                    </div>
                </div>
                <img src="http://localhost/RocketBusinessTest/img/doctor-working-table 1.jpg" alt="doctor">

            </div>
            <!-- <div class="slideText">Заголовок слайда 4</div> -->
        </div>

        <!-- <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a> -->
    </div>

    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span>
        <span class="slider-dots_item" onclick="currentSlide(2)"></span>
        <span class="slider-dots_item" onclick="currentSlide(3)"></span>
        <span class="slider-dots_item" onclick="currentSlide(4)"></span>

        <div class="scroll-block">

            <button type="button" onclick="minusSlide()"><img src="http://localhost/RocketBusinessTest/img/left.svg" alt="left"></button>
            <div>
                <input id="number" type="button" value="1">
                <span>/ 4</span>
            </div>
            <button type="button" onclick="plusSlide()"><img src="http://localhost/RocketBusinessTest/img/right.svg" alt="right"></button>
        </div>
    </div>


    <div class="modal-window modal-window2" id="modal">
        <nav class="nav-modal">
            <div class="nav-bar-modal">
                <a href="#">
                    О клинике
                </a>
                <a href="#">
                    Услуги
                </a>
                <a href="#">
                    Специалисты
                </a>
                <a href="#">
                    Цены
                </a>
                <a href="#">
                    Контакты
                </a>
                <!-- <div class="button-block">
                    <input type="button" value="Записаться на прием">
                </div> -->
            </div>


        </nav>
    </div>

    <footer>
        <div class="footer-container">
            <a href="/index.html" class="logo">
                <img src="http://localhost/RocketBusinessTest/img/logo_footer.png" alt="Logo" />
            </a>

            <nav class="nav-botton">
                <div class="nav-bar-bottom">
                    <a href="#">
                        О клинике
                    </a>
                    <a href="#">
                        Услуги
                    </a>
                    <a href="#">
                        Специалисты
                    </a>
                    <a href="#">
                        Цены
                    </a>
                    <a href="#">
                        Контакты
                    </a>
            </nav>

            <div class="footer-img-link">
                <a href="#"><img src="http://localhost/RocketBusinessTest/img/instagram.png" alt=""></a>
                <a href="#"><img src="http://localhost/RocketBusinessTest/img/whatsapp.png" alt=""></a>
                <a href="#"><img src="http://localhost/RocketBusinessTest/img/telegram.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>

<script src="http://localhost/RocketBusinessTest/script/index.js"></script>
<script src="http://localhost/RocketBusinessTest/script/modal.js"></script>
<!-- <script>new Sim()</script> -->

</html>