<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
  if (trim($_POST["title"]) == "") {
    $errors["title"] = "Title can't be empty!";
  }
  if (strlen($_POST["title"]) > 255) {
    $errors["title"] = "Title can't be longer than 255 characters!";
  }
  if (trim($_POST["author"]) == "") {
    $errors["author"] = "Author can't be empty!";
  }
  if (strlen($_POST["author"]) > 255) {
    $errors["author"] = "Author can't be longer than 255 characters!";
  }
  if (trim($_POST["released"]) == "") {
    $errors["released"] = "Release date can't be empty!";
  }
  if ($_POST["availability"] < 0) {
    $errors["availability"] = "Availability can't be less than less than 0 characters!";
  }
  
  if (empty($errors)) {
    $query = "INSERT INTO books (title, author, released, availability) VALUES (:title, :author, :released, :availability);";
    $params = [
      ":title" => $_POST["title"],
      ":author" => $_POST["author"],
      ":released" => $_POST["released"],
      ":availability" => $_POST["availability"],
    ];

    $db->execute($query, $params);
    header("Location: /");
    die();
  }
}


$title = "Add new book";
require "views/books/add.view.php";
?>