<?php
session_start();
if ($_SESSION['user']) {
    header('Location: panel.php');
}

require_once 'connect.php';

$id_uslugi = $_GET['id'];
$time = $_POST['rad'];
$garanty = $_POST['no_lak'];
$cost = $_POST['lak'];


mysqli_query($connect, "UPDATE `uslugi` SET `radius` = '$time', `no_lak` = '$garanty', `lak` = '$cost' WHERE `id` = '$id_uslugi' " );
?>