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
        $errors["writer"] = "wrong writer";
    }

    if(!Validator::number($_POST["releasedate"], 1, 255)) {
        $errors["releasedate"] = "no releasedate";
    }

    if(!Validator::string($_POST["availability"], 1, 255)) {
        $errors["availability"] = "not available";
    }

    if (empty($errors)) {
    $query =    "UPDATE books
                SET title = :title, writer = :writer, releasedate = :releasedate, availability = :availability
                WHERE id = :id";

              $params = [
                  ":title" => $_POST["title"],
                  ":writer" => $_POST["writer"],
                  ":releasedate" => $_POST["releasedate"],
                  ":availability" => $_POST["availability"],
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
            }
} 
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $query = "SELECT * FROM books WHERE id = :id";
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();
    $title = "Edit a book";
    require "views/books/edit.view.php";
} else {
    header("Location: /");
    exit;
}
?>
<ul>
    <?php foreach ($books as $book) { ?>
        <li>
            <a href="edit.php?id=<?= $book["id"] ?>"> <?= htmlspecialchars($book["title"])?> </a>
            (<?= $book["writer"] ?> writer)
            <form class="deleteform" method="POST" action="/">
                <button class="test" name="id" value="<?= $book["id"] ?>">Delete</button>
            </form>
        </li>
    <?php } ?>
</ul>