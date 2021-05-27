<?php
session_start();

require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="update.php?id=<?= $_GET['id'] ?>" method="post">
        <p>Радиус</p>
        <input type="text" name="rad" value="<?= $_GET['rad'] ?>">
        <p>С покрытием лака</p>
        <input type="text" name="no_lak" value="<?= $_GET['no_lak'] ?>">
        <p>Без покрытия лака</p>
        <input type="text" name="lak" value="<?= $_GET['lak'] ?>">
        <button>Изменить</button>
    </form>
</body>
</html>