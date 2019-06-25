<?php
logout();
$email = "valod@example.com";
$pass = '$2y$10$cky47Mzm/5JIWmyNF0W7tOeM81ttpYPBoSE0sUXpf1SM6MgtnUR7i';
$error = [];
if (!empty($_POST)) {

    if (empty($_POST["email"])) {
        $error["email"] = "Please fill out your email";
    }
    if (empty($_POST["password"])) {
        $error["password"] = "Please fill out your password";
    }

    if (empty($error)) {
        // Admin login and password checking
        if ($_POST["email"] == ADMIN_LOGIN &&
            password_verify($_POST['password'], ADMIN_PASS)) {
            $_SESSION["user"] = "admin";
            $_SESSION["loggedIn"] = true;
            header("Location: admin?page=dashboard");
        }

        // User login and password checking
        if ($_POST['email'] == $email &&
            password_verify($_POST['password'], $pass)) {
            $_SESSION["user"] = $_POST['email'];
            $_SESSION["loggedIn"] = true;
            header("Location: ?page=profile");
        }

    }


}


