<?php
$send=send_query($conn,"SELECT categories.id as 'id',categories.name as 'name', COUNT(post_id) as 'posts'
                        FROM categories LEFT JOIN post_category
                        ON categories.id=post_category.category_id
                        GROUP BY categories.id");
$send2=send_query($conn,"SELECT id,title,publishDate
                            from blog_posts
                            order by views desc
                            limit 3");
$send3=send_query($conn,"SELECT categories.name,blog_posts.id,title,text,publishDate
                        from blog_posts join categories
                        on blog_posts.id=categories.id
                        where blog_posts.isactive=\"1\"
                        order by publishDate desc
                        limit 5");
$error = [];
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


