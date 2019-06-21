<?php
require "function.php";
$page = "";
$title = "Home";
if (!empty($_GET['page'])) {

    $page = $_GET['page'];

} else {
    $page = "index";
}

require("templates/header.php");
include_template($page);
require 'templates/aside.php';
require 'templates/footer.php';






