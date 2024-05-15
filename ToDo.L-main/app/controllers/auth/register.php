<?php

require "../app/core/Validator.php";
require "../app/core/Database.php";
require "../app/models/User.php";
$config = require("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);

    $errors = [];

    if (!Validator::email($_POST["email"])) {
        $errors["email"] = "Nepareiz epasta formāts";
    }
    
    // Check if password is not complete
    if (!Validator::password($_POST["password"])) {
        $errors["password"] = "Parolē ir nepilnības";
    }

    $userModel = new User();

    // Check if the email already exists
    if ($userModel->findUserByEmail($_POST["email"])) {
        $errors["email"] = "Konts jau pastāv";
    }

    if (empty($errors)) {
        // Call the register method of the User model
        $registered = $userModel->register($_POST["email"], $_POST["password"]);

        if ($registered) {
            // Registration successful
            echo "User registered successfully!";
        } else {
            // Registration failed
            echo "User registration failed!";
        }
    }
}

$title = "Register";
require "../app/views/auth/register.view.php";
