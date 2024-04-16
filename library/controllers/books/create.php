<?php
require "Validator.php";
require "Database.php";
$config = require("./config.php");
$db = new Database($config);



//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) != "" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <= 255) {
    // dd("Pos");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["title"], 1, 255)) {
        $errors["title"] = "no title or too long";
    }

    if(!Validator::number($_POST["category-id"], 1, 255)) {
        $errors["category-id"] = "wrong category-id";
    }
    if (empty($errors)) {


    $query = "INSERT INTO posts (title, category_id) 
              VALUES (:title, :category_id);";
              $params = [
                  ":title" => $_POST["title"],
                  ":category_id" => $_POST["category-id"]
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
            }
} 

$title = "Create stuff";
require "views/books/create.view.php";