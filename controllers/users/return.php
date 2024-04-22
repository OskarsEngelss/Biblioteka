<?php
auth();

require "Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);
    $query = "UPDATE books SET availability = availability + 1 WHERE id=:id; DELETE FROM taken_books WHERE id=:taken_id;";

    $params = [
        ":id" => $_GET["id"],
        ":taken_id" => $_GET["taken_id"],
        ":user_id" => $_SESSION["user_id"]
    ];

    $db->execute($query, $params); 
    header("Location: /");
    die();
}
?>