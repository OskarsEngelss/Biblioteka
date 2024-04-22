<?php
auth();

$taken_books_query = "SELECT books.*, taken_books.reserveTime, taken_books.id AS taken_id FROM books JOIN taken_books ON books.id=taken_books.book_id AND taken_books.user_id=:id";
$params = [
    ":id" => $_SESSION["user_id"]
];

return $db->execute($taken_books_query, $params)->fetchAll();
?>