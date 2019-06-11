<?php $page = "";
$title = "Home";
require("../templates/header.php");
if ($page == "") {
    require '../templates/index.php';

}
require '../templates/aside.php';
require '../templates/footer.php';
require("function.php");