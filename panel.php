<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: admin.php');
}

require_once 'connect.php';
?>
<a href="logout.php">Выход</a>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<table>
    <tr>

        <th class="dim">id</th>
        <th class="dimas">radius</th>
        <th class="dim">Без Лака</th>
        <th class="dimas">С покрытием лака</th>
    </tr>

    <?php

    $uslugi = mysqli_query($connect, "SELECT * FROM `uslugi` ");
    $uslugi = mysqli_fetch_all($uslugi);
    foreach ($uslugi as $uslugi) {
        ?>
        <tr>
            <td class="dim1"><?= $uslugi[0] ?></td>
            <td class="dimas1"><?= $uslugi[1] ?></td>
            <td class="dim1"><?= $uslugi[2] ?></td>
            <td class="dimas1"><?= $uslugi[3] ?></td>
            <td><a href="delete.php?id=<?= $uslugi[0] ?>">Удалить</a></td>
            <td>
                <a href="up.php?id=<?= $uslugi[0] ?>&rad=<?= $uslugi[1] ?>&no_lak=<?= $uslugi[2] ?>&lak=<?= $uslugi[3] ?>">Изменить</a>
            </td>
        </tr>
        <?php
    }
    ?>


</table>

<form action="addusl.php" method="post">
    <p>Радиус</p>
    <input type="text" name="rad">
    <p>Без лака</p>
    <input type="text" name="no_lak">
    <p>С покрытием лака</p>
    <input type="text" name="lak">
    <button>Добавить</button>
</form>


</body>
</html>