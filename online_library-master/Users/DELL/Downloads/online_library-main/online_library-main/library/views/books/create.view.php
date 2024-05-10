<?php 
require "views/components/head.php";
require "views/components/navbar2.php";
?>
    <h1> Add a Book </h1>
    <form method="POST">
        <label>Title:
            <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
    <?php if (isset($errors["title"])) { ?>
        <p class="invalid-data"> <?= $errors["title"] ?> </p>
    <?php } ?>
        </label>
        <br></br>
        <label>Writer:
        <input name="writer" value="<?= $_POST["writer"] ?? "" ?>"/>
    <?php if (isset($errors["writer"])) { ?>
        <p class="invalid-data"> <?= $errors["writer"] ?> </p>
    <?php } ?>
        </label>
        <br></br>
        <label>Releasedate:
        <input name="releasedate" value="<?= $_POST["releasedate"] ?? "" ?>"/>
    <?php if (isset($errors["releasedate"])) { ?>
        <p class="invalid-data"> <?= $errors["releasedate"] ?> </p>
    <?php } ?>
        </label>
        <br></br>
        <label>Availability:
        <input name="availability" value="<?= $_POST["availability"] ?? "" ?>"/>
    <?php if (isset($errors["availability"])) { ?>
        <p class="invalid-data"> <?= $errors["availability"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "views/components/footer.php";  
?>