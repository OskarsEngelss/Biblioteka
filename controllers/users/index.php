<?php
session_start();

if (isset($_SESSION["user_id"]) && is_numeric($_SESSION["user_id"])) {
    require "Database.php";
    $config = require("config.php");
    $db = new Database($config);

    $user_query = "SELECT * FROM users WHERE id=:id;";
    $params = [
        ":id" => $_SESSION["user_id"]
    ];
    $user = $db->execute($user_query, $params)->fetch();

    $title = $user["username"];
    require "views/users/index.view.php";
} else {
    $title = "Login page";
    require "views/users/login.view.php";
}
?>