<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body>
<? include 'module/header.php' ?>

<section class="d-flex flex-column justify-content-center align-items-center w-100"
         style="height: 100vh;background-image: url('images/intro.png');background-size: cover;overflow: hidden">
    <div style="color: white;margin-bottom: 40px" class="text-center">
        <div style="font-size: 53px; font-weight: 700" class="mb-2">ПОКРАСКА ДИСКОВ POLIMER</div>
        <div style="font-size: 35px">ПОРОШКОВАЯ ПОКРАСКА<br>ЗАВОДСКАЯ ПОКРАСКА ПО ТЕХНОЛОГИИ 3L</div>
    </div>
    <div class="btn btn-red pt-1 pb-1 pr-4 pl-4" data-bs-toggle="modal" data-bs-target="#send"
         style="font-size: 28px; font-weight: 600">записаться
    </div>
</section>
<section class="w-100 text-center text-white p-2"
         style="background-color: black;border-top: 1px solid red;border-bottom: 1px solid red;">
    <h2 style="font-weight: 400">О КОМПАНИИ</h2>
</section>
<section class="d-flex flex-column justify-content-center align-items-center w-100 p-5"
         style="background-image: url('images/bg.jpg');background-size: cover;overflow: hidden">

    <div class="card w-50 p-3 text-white"
         style="font-size: 20px;background-color: rgba(0,0,0,0.55);; border: 1px solid red;border-radius: 4px">
        <div class="card-body">
            <p class="card-text">
                «POLIMER» — СПЕЦИАЛИЗИРОВАННЫЙ ЦЕНТР ПО РЕМОНТУ, ПОКРАСКЕ, ПОЛИРОВКЕ И ВОССТАНОВЛЕНИЮ АВТО И МОТО
                ДИСКОВ. КАЧЕСТВЕННЫЙ БЕРЕЖНЫЙ ШИНОМОНТАЖ, ТОЛЬКО ПРОФЕССИОНАЛЬНОЕ ОБОРУДОВАНИЕ И ВЫСОКОКВАЛИФИЦИРОВАННЫЕ
                МАСТЕРА.
                <br>
                <br>
                МЫ ОБЛАДАЕМ ОГРОМНОЙ ТЕХНИЧЕСКОЙ БАЗОЙ И БОЛЬШИМ ОПЫТОМ РЕСТАВРАЦИИ ДИСКОВ, ЧТО ПОЗВОЛЯЕТ НАМ ПРИНЯТЬ В
                РАБОТУ ПРАКТИЧЕСКИ ЛЮБОЙ ПОВРЕЖДЕННЫЙ ДИСК.
                <br>
                <br>
                ВЫ ПОЛУЧАЕТЕ ПОЛНУЮ И БЕЗОГОВОРОЧНУЮ ГАРАНТИЮ НА ПРОИЗВОДИМЫЕ РАБОТЫ, В КРАТЧАЙШИЕ СРОКИ БЕЗ ПРИВЫЧНОЙ
                ВОЛОКИТЫ. РЕПУТАЦИЯ, ПОРЯДОЧНОСТЬ, ЧЕСТНОСТЬ, ИНДИВИДУАЛЬНЫЙ ПОДХОД И ЛОЯЛЬНОСТЬ - ВАЖНЫЕ АСПЕКТЫ ПРИ
                ВЫБОРЕ МЕСТА РЕМОНТА И УХОДА ЗА ВАШИМИ КОЛЁСАМИ.</p>
        </div>
    </div>

</section>
<section class="w-100 text-center text-white p-2"
         style="background-color: black;border-top: 1px solid red;border-bottom: 1px solid red;">
    <h2 style="font-weight: 400">ТЕХНОЛОГИЯ 3L</h2>
</section>
<section class="d-flex flex-column justify-content-center align-items-center w-100 p-5"
         style="background-image: url('images/bg.jpg');background-size: cover;overflow: hidden">
    <div class="row justify-content-around">
        <div class="col-4">
            <div class="card p-3 w-100 text-white"
                 style="font-size: 20px;background-color: rgba(0,0,0,0.55); border: 1px solid red;border-radius: 4px">
                <div class="card-header text-center">ОКРАСКА ПО ТЕХНОЛОГИИ «3L» ОБЕСПЕЧИВАЕТ</div>
                <hr>
                <div class="card-body">
                    <p class="card-text">— БЕЗУПРЕЧНЫЙ ПРИВЛЕКАТЕЛЬНЫЙ ВИД ЦВЕТОВ И ОТТЕНКОВ МЕТАЛЛИКОВ</p>
                    <p class="card-text">— НАДЕЖНУЮ ЗАЩИТУ ДИСКОВ ОТ ВНЕШНЕЙ СРЕДЫ</p>
                    <p class="card-text">— 100% ОБНОВЛЕННОЕ КОЛЕСО</p>
                    <p class="card-text">— ТОЛЬКО ПРОФЕССИОНАЛЬНОЕ СПЕЦИАЛЬНОЕ ОБОРУДОВАНИЕ И МАТЕРИАЛЫ</p>
                </div>
            </div>
        </div>
        <div class="col-auto"><img class="kvas1" src="images/nology.png" alt="" width="auto" height="500px"></div>
    </div>
</section>
<section class="w-100 text-center text-white p-2"
         style="background-color: black;border-top: 1px solid red;border-bottom: 1px solid red;">
    <h2 style="font-weight: 400">ПРИМЕРЫ РАБОТ</h2>
</section>
<section class="d-flex flex-column justify-content-center align-items-center w-100 p-3"
         style="background-color: black;background-size: cover;overflow: hidden">
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
</section>
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
<? include 'module/foother.php' ?>

</body>
</html>