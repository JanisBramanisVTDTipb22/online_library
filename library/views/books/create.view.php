<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Create a Book </h1>
    <form method="POST">
        <label>Title
            <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <label>Writer
    <?php if (isset($errors["writer"])) { ?>
        <p class="invalid-data"> <?= $errors["cwriter"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "views/components/footer.php";  
?>