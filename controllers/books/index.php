<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM books";
$params = [];

if (isset($_SESSION["user"])) {
    $books = $db->execute($query, $params)->fetchAll();

    $userQuery = "SELECT * FROM users WHERE id=:id";
    $params = [
        ":id" => $_SESSION["user_id"]
    ];
    $user = $db->execute($userQuery, $params)->fetch();
    $taken_books = require "controllers/users/taken-book-list.php";
} else {
    $books = $db->execute($query, $params)->fetchAll();
}

$differentStyle = "mainStyle";
$title = "List of books";
require "views/books/index.view.php";
?>