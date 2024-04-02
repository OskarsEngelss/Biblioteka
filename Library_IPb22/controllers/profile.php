<?php
$query = "SELECT books.id, books.title, books.author, books.release_date, books.availability, taken_books.user_id FROM taken_books INNER JOIN books ON books.id = taken_books.book_id;";
$params = [];
$taken_books = $db->execute($query, $params)->fetchAll();


$title = "Profile";
require "views/profile.view.php";
?>