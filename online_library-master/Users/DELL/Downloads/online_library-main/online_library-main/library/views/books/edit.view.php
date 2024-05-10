<?php 
require "views/components/head.php";
require "views/components/navbar2.php";
?>
    <h1> Edit a book </h1>
    <form method="POST">
        <input name="id" value="<?= $book["id"] ?>" type="hidden"/>
        <label>Title:
            <input name="title" value="<?= $book["title"] ?? "" ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <br></br>
        <label>Writer:
        <input name="Writer" value="<?= $book["Writer"] ?? "" ?>"/>
            <?php if (isset($errors["Writer"])) { ?>
                <p class="invalid-data"> <?= $errors["Writer"] ?> </p>
            <?php } ?>
        </label>
        <label>Release date:
        <input name="releasedate" value="<?= $book["releasedate"] ?? "" ?>"/>
            <?php if (isset($errors["releasedate"])) { ?>
                <p class="invalid-data"> <?= $errors["releasedate"] ?> </p>
            <?php } ?>
        </label>
        <label>Availability:
        <input name="availability" value="<?= $book["availability"] ?? "" ?>"/>
            <?php if (isset($errors["availability"])) { ?>
                <p class="invalid-data"> <?= $errors["availability"] ?> </p>
            <?php } ?>
        </label>
        <button>Edit</button>
    </form>
<?php
require "views/components/footer.php";  
?>