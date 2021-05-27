<?php
session_start();
if ($_SESSION['user']) {
    header('Location: panel.php');
}
require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `uslugi` WHERE `uslugi`.`id` = '$id'")
?>