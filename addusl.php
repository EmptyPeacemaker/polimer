<?php
session_start();
if ($_SESSION['user']) {
    header('Location: panel.php');
}

require_once 'connect.php';


$time = $_POST['rad'];
$garanty = $_POST['no_lak'];
$cost = $_POST['lak'];


mysqli_query($connect, "INSERT INTO `uslugi` (`id`, `radius`, `no_lak`, `lak`) VALUES (NULL, '$time' ,'$garanty' , '$cost')");
?>