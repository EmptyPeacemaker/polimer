<?php
require_once 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ПОДКЛЮЧЕНИЕ ШРИФТА -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">

    <!-- ПОДКЛЮЧЕНИЕ ШРИФТА -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- ПОДКЛЮЧЕНИЕ СТИЛЕЙ -->
    <link rel="stylesheet" href="style3.css">
    <!-- ПОДКЛЮЧЕНИЕ ШРИФТА -->

    <!-- шапка -->
    <title>Polimer-Ufa</title>

</head>
<body>
<header class="header">
    <div class="conteiner">
        <div class="header_inner">
            <div class="header_logo">
                <img src="images/POLIMER_UFA.png" alt="">
            </div>
            <nav class="nav">
                <a class="nav_link" href="index.php">главная</a>
                <a class="nav_link" href="yslygi.php">услуги</a>
                <a class="nav_link" href="Kontakt.html">контакты</a>
            </nav>
        </div>

    </div>
</header>
<div class="intro">
    <div class="container">
        <h1 class="intro__title">покраска дисков polimer</h1>
        <h1 class="intro__title2">Порошковая покраска.Заводская покраска по технологии 3L</h1>
        <a class="bth bth--red open-popup" href="#">записаться</a>
        <div class="popup-bg">
            <div class="popup">
                <img class="close-popup" src="images/close.jpg" alt="icon" width="20">
                <p class="popup_title"> Оставьте ваши контакты и мы свяжемся с вами в ближайшее время.</p>


                <form action="mail.php" id="form" method="POST">
                    <input id="formName" type="text" class="form-control _req " name="NAME" placeholder="Имя">
                    <input id="phone" type="text" class="form-control _req " name="PHONE" placeholder="Телефон">
                    <input type="text" class="form-control _req" name="TEST" placeholder="Ваши пожелания">
                    <button type="submit" class="form-button" id="btn_submit" onClick="ValidPhone">Отправить заявку
                    </button>
                </form>

            </div>
        </div>
        <script src="js/javascript.js"></script>
    </div>


</div>

<div class="intro1">
    <div class="conteiner">

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r13.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-13</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=1");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r14.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-14</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=2");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r15.png" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-15</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=3");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

    </div>
</div>

<div class="intro1">
    <div class="conteiner">


        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r16.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-16</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=4");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r17.png" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-17</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=5");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r18.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-18</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=6");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

    </div>
</div>

<div class="intro1">
    <div class="conteiner">


        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r19.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-19</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=7");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r20.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-20</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=8");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r21.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-21</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=9");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

        <div class="rad">
            <div class="rad1">
                <img class="radius" src="images/r22.jpg" alt="icon" width="300" height="auto">
            </div>
            <div class="rad2">
                <h1 class="store1">Размер диска R-22</h1>
                <h1 class="store">Цена варируется в зависимости от нанесения лакированного покрытия,
                    слоев лакированного покрытия. Цена указана без учета лакированного покрытия. </h1>


                <table>
                    <tr>

                        <th class="dim">Без Лака</th>
                        <th class="dimas">С покрытием лака</th>

                    </tr>

                    <?php

                    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` WHERE `id`=10");
                    $uslugi = mysqli_fetch_all($uslugi);
                    foreach ($uslugi as $uslugi) {
                        ?>
                        <tr>
                            <td class="dim1"><?= $uslugi[2] ?></td>
                            <td class="dimas1"><?= $uslugi[3] ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>

    </div>
</div>

<div class="podval1">
    <div class="conteiner">
        <div class="podval2">
            <div class="g">
                <h1 class="oka1">Респ. Башкортостан, г.Уфа, с.Чесноковка, ул. Школьная 2А:</h1>
            </div>

            <div class="g">
                <h1 class="oka1">2010-2021
                    © Все права защищены.:</h1>
            </div>
            <div class="g">
                <h1 class="oka1">Пн - Пт 9:00 - 18:00
                    aupm1@mail.ru
                    8 (960) 382-76-87:</h1>
            </div>
        </div>
    </div>
</div>


</body>
</html>
