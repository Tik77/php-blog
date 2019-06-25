<?php
logout();
$email = "valod@example.com";
$pass = '$2y$10$cky47Mzm/5JIWmyNF0W7tOeM81ttpYPBoSE0sUXpf1SM6MgtnUR7i';
$error = [];
if (!empty($_POST)) {

    if (empty($_POST["email"])) {
        $error["email"] = "Please fill out your email";
    } else if ($_POST['email'] != $email) {
        $error['password'] = "Wrong email or password";
    } else if (empty($_POST["password"])) {
        $error["password"] = "Please fill out your password";

    } else if (!password_verify ( $_POST['password'] , $pass )) {
        $error['password'] = "Wrong email or password";
    } else if (!empty($_POST["password"]) ) {
        if (!preg_match('/\d{8,}|[A-Z]{8,}/i', $_POST["password"])) {
            $error["password"] = "Please fill out your password true";

        }

    }
    if (empty($error)) {
        $_SESSION["user"] = $_POST['email'];
        $_SESSION["loggedIn"] = true;
        header("Location: ?page=profile");
    }


}


