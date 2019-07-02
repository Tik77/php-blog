<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, "blog");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function insert_data($data, $table)
{
    $columns = implode(",", array_keys($data));
    $values = "'" . implode("','", $data) . "'";
    $sql = "INSERT INTO  $table ($columns)VALUES ($values)";
    insert_data(["name" => "Valod",
        "email" => "valod@example.com",
        "avatar" => "",
        "password" => '$2y$10$cky47Mzm/5JIWmyNF0W7tOeM81ttpYPBoSE0sUXpf1SM6MgtnUR7i',
        'isActive' => 1],
        'users');

}

