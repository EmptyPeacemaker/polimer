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
<section class="d-flex flex-column justify-content-center align-items-center w-100 p-5"
         style="height: 100vh;background-image: url('images/agl47.jpg');background-size: cover;overflow: hidden">
    <div class="pb-3 row justify-content-around">
        <div class="col-auto">
            <div class="card w-100 text-white"
                 style="font-size: 20px;background-color: rgba(0,0,0,0.55); border: 1px solid red;border-radius: 4px">
                <div class="card-body">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9061510bfe10b0cfb7f2fd86f9faa5975b8b68f819f20ef09fc3ee45d38e3ec1&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card p-3 w-100 text-white"
                 style="font-size: 20px;background-color: rgba(0,0,0,0.55); border: 1px solid red;border-radius: 4px">
                <div class="card-header text-center">Как нас найти</div>
                <hr>
                <div class="card-body">
                    <p>адрес нашей компании: <strong>Школьная 2А</strong></p>
                    <p>телефон компании: <strong>8 (906) 108-26-91</strong></p>
                    <p>Режим работы: <strong>ПН-ПТ 9:00-18:00</strong></p>
                    <p>Почта: <strong>aupm1@mail.ru</strong></p>
                </div>
            </div>
        </div>

    </div>
    <div class="btn btn-red pt-1 pb-1 pr-4 pl-4" data-bs-toggle="modal" data-bs-target="#send" style="font-size: 28px; font-weight: 600">записаться</div>
</section>

<? include 'module/foother.php' ?>

</body>
</html>