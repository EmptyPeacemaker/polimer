<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ПОДКЛЮЧЕНИЕ ШРИФТА -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- ПОДКЛЮЧЕНИЕ ШРИФТА -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <!-- ПОДКЛЮЧЕНИЕ СТИЛЕЙ -->
    <link rel="stylesheet" href="style.css">
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

<?php if ($_GET['send']==true){?>
    <div>
        <div class="modal-overlay" id="modal-overlay"></div>

        <div class="modal" id="modal">
            <div class="modal-guts" style="font-size: 30px">
                Ваша заявка успешно принята
            </div>
        </div>

        <button id="open-button" class="open-button">Open Button</button>
    </div>
    <style>
        .modal {
            border-radius: 2px;
            /* This way it could be display flex or grid or whatever also. */
            display: block;

            /* Probably need media queries here */
            width: 600px;
            max-width: 100%;

            height: 150px;

            position: fixed;

            z-index: 100000;

            left: 50%;
            top: 50%;

            /* Use this for centering if unknown width/height */
            transform: translate(-50%, -50%);

            /* If known, negative margins are probably better (less chance of blurry text). */
            /* margin: -200px 0 0 -200px; */

            background: white;
            box-shadow: 0 0 60px 10px rgba(0, 0, 0, 0.9);
        }
        .closed {
            display: none;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 5000;

            background: rgba(0, 0, 0, 0.6);
        }
        .modal-guts {
            flex-direction: column;
            height: 150px;
            color: black;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: auto;
            padding: 20px 50px 20px 20px;
        }
    </style>
    <script>
        $(document).click(function (){
            window.location='/'
        })
    </script>
<?php }?>
<!-- интро -->

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

<!-- о нас -->
<div class="container">
    <div class="bg">
        <h1 class="anas">О компании</h1>
    </div>

    <div class="text">
        <div class="box">
            <h1 class="anas2">«POLIMER» — специализированный центр по ремонту, покраске, полировке и восстановлению авто
                и мото дисков. Качественный бережный шиномонтаж, только профессиональное оборудование и
                высококвалифицированные мастера.</h1>
            <h1 class="anas3">Мы обладаем огромной технической базой и большим опытом реставрации дисков, что позволяет
                нам принять в работу практически любой поврежденный диск.</h1>
            <h1 class="anas4">Вы получаете полную и безоговорочную гарантию на производимые работы, в кратчайшие сроки
                без привычной волокиты. Репутация, порядочность, честность, индивидуальный подход и лояльность - важные
                аспекты при выборе места ремонта и ухода за вашими колёсами.</h1>
        </div>
    </div>
</div>
<!-- квасс -->
<div class="container">
    <div class="bg">
        <h1 class="kvas">Технология 3L</h1>
    </div>

    <div class="box1">


        <div class="box2">
            <div class="box_text">

                <h1 class="oka1">Окраска по технологии «3L» обеспечивает:</h1>
                <h1 class="oka2">— Безупречный привлекательный вид цветов и оттенков металликов:</h1>
                <h1 class="oka2">— Надежную защиту дисков от внешней среды:</h1>
                <h1 class="oka2">— 100% обновленное колесо:</h1>
                <h1 class="oka2">— Только профессиональное специальное оборудование и материалы:</h1>

            </div>
            <img class="kvas1" src="images/nology.png" alt="" width="auto" height="500px">
        </div>


    </div>
</div>


<div class="bg">
    <h1 class="kvas">Примеры работ</h1>
</div>
<div class="container">
    <div class="splide" id="splide">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide"><img class="works__photo" src="images/1.png" alt=""></div>
                <div class="splide__slide"><img class="works__photo" src="images/2.png" alt=""></div>
                <div class="splide__slide"><img class="works__photo" src="images/3.png" alt=""></div>
                <div class="splide__slide"><img class="works__photo" src="images/4.png" alt=""></div>
                <div class="splide__slide"><img class="works__photo" src="images/5.png" alt=""></div>
                <div class="splide__slide"><img class="works__photo" src="images/6.png" alt=""></div>
            </div>
        </div>
    </div>
</div>


<style>
    .splide__slide{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<script>
    new Splide( '#splide', {
        type   : 'loop',
        perPage: 3,
        rewind : true,
    } ).mount();
</script>
<!-- картины -->
<!--<div class="conteiner">-->
<!--    <div class="works1">-->

<!--        <img class="works__photo" src="images/1.png" alt="">-->
<!--        <img class="works__photo" src="images/2.png" alt="">-->
<!--        <img class="works__photo" src="images/3.png" alt="">-->
<!--    </div>-->

<!--    <div class="works1">-->

<!--        <img class="works__photo" src="images/4.png" alt="">-->
<!--        <img class="works__photo" src="images/5.png" alt="">-->
<!--        <img class="works__photo" src="images/6.png" alt="">-->
<!--    </div>-->
<!--</div>-->

<div class="bg">

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
