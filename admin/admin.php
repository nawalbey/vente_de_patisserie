<?php
session_start();
//si $_SESSION['role'] est definie mais que sa valeur est differente de "ademin" ou encore que $_SESSION ['role'] n'est pas definie
if (isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location: http:/localhost/login.php");
}
include_once "../inc/header.php";
?>