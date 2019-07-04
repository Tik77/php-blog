<?php

function include_template($name)
{
//    require 'controllers/' . $name . '.php';
    require 'templates/' . $name . '.php';
}

function logout()
{
    $_SESSION = [];
}

function checkAuth()
{
    return isset($_SESSION["loggedIn"]);
}

