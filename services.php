<?php
$mysqli = new mysqli('127.0.0.1', 'u105639_u105639_tort', '5547321a', 'u105639_vova2');
$elements=$mysqli->query("SELECT * FROM `uslugi`")->fetch_all();
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
         style="height: 100vh;background-image: url('images/pxfuel.com');background-size: cover;overflow: hidden">
    <div style="color: white;margin-bottom: 40px" class="text-center">
        <div style="font-size: 53px; font-weight: 700" class="mb-2">ПОКРАСКА ДИСКОВ POLIMER</div>
        <div style="font-size: 35px">ПОРОШКОВАЯ ПОКРАСКА<br>ЗАВОДСКАЯ ПОКРАСКА ПО ТЕХНОЛОГИИ 3L</div>
    </div>
    <div class="btn btn-red pt-1 pb-1 pr-4 pl-4" data-bs-toggle="modal" data-bs-target="#send" style="font-size: 28px; font-weight: 600">записаться</div>
</section>
<section class="p-2" style="background-color: black">
    <div class="container d-flex flex-column">
        <div>
            <label for="customRange1" class="form-label text-white">Радиус</label>
            <input type="range" min="0" max="<?echo count($elements)-1 ?>" value="1" class="form-range" id="customRange1">
        </div>
        <div class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php foreach ($elements as $el){ ?>
                        <div class="splide__slide d-flex justify-content-center align-items-center">
                            <div class="card pb-4" style="width: 700px;background-color: rgba(0,0,0,0.6)">
                                <div class="d-flex flex-row">
                                    <img src="img/R/r<?echo $el[1]?>.jpg" style="height: 250px;border-radius: 4px">
                                    <div class="col-auto text-white">
                                        <div class="card-body">
                                            <h5 class="card-title">РАЗМЕР ДИСКА R-<?echo $el[1]?></h5>
                                            <h3 class="card-text">Без покрытием лака <?echo $el[2]?></h3>
                                            <h3 class="card-text">С покрытием лака <?echo $el[3]?></h3>
                                            <p class="card-text" style="width: 400px;"><small>Цена варируется в зависимости от нанесения лакированного покрытия, слоев лакированного покрытия. Цена указана без учета лакированного покрытия.</small></p>
                                            <div class="btn btn-red select" data-r="<?echo $el[1]?>" data-bs-toggle="modal" data-bs-target="#select">Выбрать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="select" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" action="../mail.php" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставьте ваши контакты и мы свяжемся с вами в ближайшее
                    время.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="NAME" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Телефон</label>
                    <input type="text" class="form-control" name="PHONE" id="exampleFormControlInput2">
                </div>
                <hr>
                <div class="mb-3">
                    <label>Радиус</label>
                    <div id="R"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Цвет</label>
                    <select class="form-select" id="exampleFormControlInput1" name="color" aria-label="Default select example">
                        <option value="Красный">Красный</option>
                        <option value="Золотой">Золотой</option>
                        <option value="Черный">Черный</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lak" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            С лаком
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lak" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Без лака
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-red">Отправить заявку</button>
            </div>
        </form>
    </div>
</div>
<script>
    let slider=new Splide('.splide',{type:'loop'}).mount();
    slider.on('move',()=>{
        $('#customRange1').val(slider.index)
    })
    $('#customRange1').change(function (){
        slider.go($(this).val())
    });
    $('.select').click(function (){
        $('#R').html('R-'+$(this).data('r'))
    })
</script>

<? include 'module/foother.php' ?>

</body>
</html>