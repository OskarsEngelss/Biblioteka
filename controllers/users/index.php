<?php
auth();

require "Database.php";
$config = require("config.php");
$db = new Database($config);

$user_query = "SELECT * FROM users WHERE id=:id";
$taken_books_query = "SELECT books.*, taken_books.id AS taken_id FROM books JOIN taken_books ON books.id=taken_books.book_id AND taken_books.user_id=:id";
$params = [
    ":id" => $_SESSION["user_id"]
];

$user = $db->execute($user_query, $params)->fetch();
$taken_books = $db->execute($taken_books_query, $params)->fetchAll();

$title = $user["email"];
require "views/users/index.view.php";
?>