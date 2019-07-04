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
function send_query($conn)
{
    $sql = "SELECT categories.id as 'id',categories.name as 'name', COUNT(post_id) as 'posts'
            FROM categories LEFT JOIN post_category
            ON categories.id=post_category.category_id
            GROUP BY categories.id";
    $test = mysqli_query($conn, $sql);
    if (mysqli_num_rows($test) > 0) {
        $test = mysqli_fetch_all($test, MYSQLI_ASSOC);
    }
    return $test;
}

function send_query2($conn)
{
    $sql =  "SELECT id,title,publishDate
            from blog_posts
            order by views desc
            limit 3";

    $test = mysqli_query($conn, $sql);
    if (mysqli_num_rows($test) > 0) {
        $test = mysqli_fetch_all($test, MYSQLI_ASSOC);
    }
    return $test;

}



function send_query3($conn)
{
    $sql = "SELECT categories.name,blog_posts.id,title,text,publishDate
            from blog_posts join categories
            on blog_posts.id=categories.id
            where blog_posts.isactive=\"1\"
            order by publishDate desc
            limit 5";

    $test = mysqli_query($conn, $sql);
    if (mysqli_num_rows($test) > 0) {
        $test = mysqli_fetch_all($test, MYSQLI_ASSOC);
    }
    return $test;

}

