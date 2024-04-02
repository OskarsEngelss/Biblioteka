<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["operation"])) {
    if ($_POST["operation"] == "add") {
        $query = "UPDATE books SET availability = availability - 1 WHERE title=:title  AND author=:author; INSERT INTO taken_books (book_id, user_id) VALUES ((SELECT id FROM books WHERE title=:title), (SELECT id FROM users WHERE username=:username AND password=:password));";
    } else if ($_POST["operation"] == "remove") {
        $query = "UPDATE books SET availability = availability + 1 WHERE title=:title  AND author=:author; DELETE FROM taken_books WHERE book_id=(SELECT id FROM books WHERE title=:title) AND user_id=(SELECT id FROM users WHERE username=:username AND password=:password);";
    }
    
    $params = [
        ":title" => $_POST["title"],
        ":author" => $_POST["author"],
        ":username" => $_POST["username"],
        ":password" => $_POST["password"],
    ];
    $db->execute($query, $params); 
    header("Location: /");
    die();
}



$title = "Add or Remove Books";
require "views/interchange-book.view.php";
?>