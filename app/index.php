<?php $page = "";
$title = "Home";
if (!empty($_GET['page'])) {

        $page = $_GET['page'];

}
?>
<?php
require("templates/header.php");
if ($page == "") {
    require 'templates/index.php';
} else {
    require 'templates/'.$page.".php";

}
?>
<?php
require 'templates/aside.php';
require 'templates/footer.php';
require("function.php");
?>

