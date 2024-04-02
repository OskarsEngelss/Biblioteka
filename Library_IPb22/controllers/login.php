<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$user = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $query = "SELECT * FROM users WHERE username=:username AND password=:password;";
    $params = [
        ":username" => trim($_POST["username"]),
        ":password" => trim($_POST["password"])
    ];
    $user = $db->execute($query, $params)->fetchAll();    
}
$title = "Account login";
require "views/login.view.php";
?>