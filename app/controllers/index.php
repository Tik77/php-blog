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