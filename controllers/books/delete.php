<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


$query = "SELECT * FROM books";
$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "DELETE FROM books WHERE id=:id";
    $params = [
        ":id" => $_POST["id"]
    ];
    
    $db->execute($query, $params);

    header("Location: /book-delete");
    die();
}

$books = $db->execute($query, $params)->fetchAll();

$title = "Delete Book";
require "views/books/delete.view.php";
?>