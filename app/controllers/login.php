<?php
$email = "valod@example.com";
$pass = "12345678";
$error = [];
if (!empty($_POST)) {
    if (empty($error)) { (header("Location:?page=profile"));
    }
    if (empty($_POST["email"])) {
        $error["email"] = "Please fill out your email";
    }
    if ($_POST['email'] != $email) {
        $error['password'] = "Wrong email or password";
    }

}
if (!empty($_POST)) {
    if (empty($_POST["password"])) {
        $error["password"] = "Please fill out your password";
        if ($_POST["password"] != $pass) {
            $error['password'] = "Wrong email or password";
        }
    } else {
        if (!empty($_POST["password"])) {
            if (!preg_match('/\d{8,}|[A-Z]{8,}/i', $_POST["password"])) {
                $error["password"] = "Please fill out your password true";

            }

        }

    }
}
