CREATE DATABASE blog;
use blog;
CREATE TABLE blog_posts
(
    id          int primary key,
    title       varchar(100),
    text        varchar(250),
    author      varchar(100),
    publishDate date,
    isActive    BOOLEAN,
    views       varchar(30)
);
CREATE TABLE categories
(
    id   int primary key,
    name varchar(100)
);
CREATE TABLE users
(
    id       int primary key,
    name     varchar(100),
    email    varchar(40) UNIQUE,
    avatar   varchar(100),
    password varchar(20),
    isActive BOOLEAN
);
