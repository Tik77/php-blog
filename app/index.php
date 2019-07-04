<?php
session_start();
require 'db.php';
require "function.php";
require 'config.php';
$data = [];
$page = "";
$title = "Home";
if (!empty($_GET['page'])) {

    $page = $_GET['page'];

} else {
    $page = "index";
}

require 'controllers/' . $page . '.php';
$data['isAuth'] = checkAuth();
require "templates/header.php";
require 'templates/' . $page . '.php';
require 'templates/aside.php';
require 'templates/footer.php';










