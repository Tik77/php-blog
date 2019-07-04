<?php
$send=send_query($conn);
$send2=send_query2($conn);
$send3=send_query3($conn);
$error = [];

if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        $error["name"] = "Please fill out your name";

    } else {
        if (strlen($_POST['name']) < 3) {
            $error["name"] = "Name will contain more than 3 letters";
        }
    }

}
if (!empty($_POST)) {
    if (empty($_POST["email"])) {
        $error["email"] = "Please fill out your email";
    }

}
if (!empty($_POST)) {
    if (empty($_POST["password"])) {
        $error["password"] = "Please fill out your password";

    } else {
        if (!empty($_POST["password"])) {
            if (!preg_match('/\d{8,}|[A-Z]{8,}/i', $_POST["password"])) {
                $error["password"] = "Please fill out your password true";

            }
        }

    }
}
