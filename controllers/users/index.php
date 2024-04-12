<?php
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    require "Database.php";
    $config = require("config.php");
    $db = new Database($config);

    $query = "SELECT * FROM users WHERE id=:id;";
    $params = [
        ":id" => $_GET["id"]
    ];
    $user = $db->execute($query, $params)->fetch();

    $title = "Home page";
    require "views/users/index.view.php";
} else {
    $title = "Login page";
    require "views/users/login.view.php";
}
?>