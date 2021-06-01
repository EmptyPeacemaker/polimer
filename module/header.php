<section class="p-3 fixed-top" style="background-color: white">
    <div class="container">
        <div class="row justify-content-between">
            <a href="/" class="col-auto">
                <img src="../images/POLIMER_UFA.png">
            </a>
            <div class="col-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link link-secondary fw-bold" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary fw-bold" href="../services.php">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary fw-bold" href="../contacts.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php if ($_GET['send'] == true) { ?>
    <div class="modal" id="seccuse" tabindex="-1" style="opacity: 1;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ваша заявка успешно принята</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#seccuse').show()
    </script>
<?php } ?>

<div class="modal fade" id="send" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-red">Отправить заявку</button>
            </div>
        </form>
    </div>
</div>