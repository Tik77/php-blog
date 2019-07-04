<?php
//function insert_data($data, $table)
//{
//    $columns = implode(",", array_keys($data));
//    $values = "'" . implode("','", $data) . "'";
//    $sql = "INSERT INTO  $table ($columns)VALUES ($values)";
//
//
//}
//


$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "blog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function send_query($conn,$sql)
{
    $test = mysqli_query($conn, $sql);
    if (mysqli_num_rows($test) > 0) {
        $test = mysqli_fetch_all($test, MYSQLI_ASSOC);
    }
    return $test;
}



