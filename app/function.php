<?php

function include_template($name)
{
    require 'controllers/' . $name . '.php';
    require 'templates/' . $name . '.php';
}

function logout()
{
    if (!empty($_SESSION)) {
        $_SESSION = [];
    }
}

function checkAuth()
{
    return !empty($_SESSION["loggedIn"]);
}

