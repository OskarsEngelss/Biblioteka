<?php
session_start();
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
        $query = "SELECT * FROM users WHERE username=:username AND password=:password;";
        $params = [
            ":username" => trim($_POST["username"]),
            ":password" => trim($_POST["password"])
        ];
        $user = $db->execute($query, $params)->fetch();    
        $_SESSION["user_id"] = $user["id"];
    }
    header("Location: /user-profile");
    die();
}
?>