<?php
auth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION = [];
    session_destroy();
    session_regenerate_id();
    setcookie(session_name(), '', time() - 1);
    header("Location: /login");
    exit;
}

require "views/books/logout.view.php";
?>
