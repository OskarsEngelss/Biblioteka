<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM books WHERE id=:id;";
$params = [
    ":id" => $_GET["id"]
];
$book = $db->execute($query, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
        $query = "UPDATE books SET availability = availability - 1 WHERE id=:id; INSERT INTO taken_books (book_id, user_id) VALUES ((SELECT id FROM books WHERE title=" . $book["title"] . " AND author=" . $book["author"] . "), (SELECT id FROM users WHERE username=:username AND password=:password));";

        $params = [
            ":id" => $_GET["id"],
            ":username" => trim($_POST["username"]),
            ":password" => trim($_POST["password"])
        ];
        $db->execute($query, $params); 

    }
    header("Location: /");
    die();
}

$title = "Taking book";
require "views/users/take.view.php";
?>