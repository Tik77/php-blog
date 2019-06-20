<?php

function include_template($name)
{
    require 'controllers/' . $name . '.php';
    require 'templates/' . $name . '.php';
}
