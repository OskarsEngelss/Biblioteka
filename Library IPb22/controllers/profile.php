<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


if (isset($_GET["username"]) && isset($_GET["password"])) {
    $query = "SELECT * FROM users WHERE username=:username AND password=:password;";
    $params = [
        ":username" => trim($_GET["username"]),
        ":password" => trim($_GET["password"])
    ];
    $user = $db->execute($query, $params)->fetchAll();    
}
$title = "Account login";
require "views/profile.view.php";
?>