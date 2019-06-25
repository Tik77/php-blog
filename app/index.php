<?php
session_start();
require "function.php";
$data=[];
$page = "";
$title = "Home";
if (!empty($_GET['page'])) {

    $page = $_GET['page'];

} else {
    $page = "index";
}
$data['isAuth'] = checkAuth();
require 'controllers/' . $page . '.php';
require("templates/header.php");
require 'templates/' . $page . '.php';
require 'templates/aside.php';
require 'templates/footer.php';
if (empty($_SESSION)) {
    header("Location:?page=login");
}
require 'config.php';








