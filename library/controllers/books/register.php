<?php

require "Validator.php";
require "Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database($config);

  $errors = [];

  if (!Validator::email($_POST["email"])) {
    $errors["email"] = "Nepareiz epasta formāts";
  }
  if (!Validator::password($_POST["password"])) {
    $errors["password"] = "Parolē ir nepilnības";
  }

  $query = "SELECT * FROM users WHERE email = :email";
  $params = [":email" => $_POST["email"]];
  $result = $db->execute($query, $params)->fetch();

  if ($result) {
    $errors["email"] = "Konts jau pastāv";
  }

  if (empty($errors)) {
    $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $params = [
      ":email" => $_POST["email"],
      ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
    ];
    $db->execute($query, $params);
  }
}

$title = "Register";
require "views/books/register.view.php";