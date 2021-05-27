<?php
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'polymer');
?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body>
<? include 'module/header.php' ?>

<section class="d-flex flex-column justify-content-center align-items-center"
         style="height: 100vh;width: 100vw;background-image: url('images/pxfuel.com');background-size: cover;">
    <div style="color: white;margin-bottom: 40px" class="text-center">
        <div style="font-size: 53px; font-weight: 700" class="mb-2">ПОКРАСКА ДИСКОВ POLIMER</div>
        <div style="font-size: 35px">ПОРОШКОВАЯ ПОКРАСКА<br>ЗАВОДСКАЯ ПОКРАСКА ПО ТЕХНОЛОГИИ 3L</div>
    </div>
    <div class="btn btn-red pt-1 pb-1 pr-4 pl-4" style="font-size: 28px; font-weight: 600">записаться</div>
</section>


<div class="splide">
    <div class="splide__track">
        <div class="splide__list">
            <?php foreach ($mysqli->query("SELECT * FROM `services`")->fetch_all() as $el){ ?>
            <div class="splide__slide">
                <div class="card" style="width: 700px;background-color: rgba(0,0,0,0.6)">
                    <div class="d-flex flex-row">
                        <img src="img/r13.jpg" style="height: 250px">
                        <div class="col-auto text-white">
                            <div class="card-body">
                                <h5 class="card-title">РАЗМЕР ДИСКА R-<?echo $el[1]?></h5>
                                <h3 class="card-text">Без покрытием лака <?echo $el[2]?></h3>
                                <h3 class="card-text">С покрытием лака <?echo $el[3]?></h3>
                                <p class="card-text" style="width: 400px;"><small>Цена варируется в зависимости от нанесения лакированного покрытия, слоев лакированного покрытия. Цена указана без учета лакированного покрытия.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>
        </div>
    </div>
</div>
<script>
    new Splide('.splide').mount();
</script>

</body>
</html>