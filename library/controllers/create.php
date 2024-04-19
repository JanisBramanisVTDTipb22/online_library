<?php
require "Validator.php";
require "Database.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["title"], 1, 255)) {
        $errors["title"] = "no title or too long";
    }

    if(!Validator::string($_POST["writer"], 1, 255)) {
        $errors["writer"] = "Not a writer";
    }

    if(!Validator::number($_POST["releasedate"], 1, 255)) {
        $errors["releasedate"] = "Not a valid release date";
    }

    if(!Validator::string($_POST["availability"], 1, 255)) {
        $errors["availability"] = "Not a available";
    }

    if (empty($errors)) {

    $query = "INSERT INTO books (title, writer, releasedate, availability) 
              VALUES (:title, :writer, :releasedate, :availability);";
              $params = [
                  ":title" => $_POST["title"],
                  ":releasedate" => $_POST["releasedate"],
                  ":releasedate" => $_POST["releasedate"],
                  ":availability" => $_POST["availability"]
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
            }
} 

$title = "Create a book";
require "views/books/create.view.php";