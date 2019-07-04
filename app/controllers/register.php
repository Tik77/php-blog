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
