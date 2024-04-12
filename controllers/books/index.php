<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM books";
$params = [];

$books = $db
          ->execute($query, $params)
          ->fetchAll();
          
$title = "List of books";
require "views/books/index.view.php";
?>