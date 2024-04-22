<?php
require "views/components/head.php";
require "views/components/navbar.php";
?>

<h1>Login</h1>

<form method="POST">
    <label>
        Email:
        <input name="email">
    </label>
    <?php if(isset($errors["email"])): ?>
        <span class="error"><?= $errors["email"] ?></span>
    <?php endif; ?>
    <label>
        Password: <span class="explanation">(should be 8 characters long, contain at least 1 uppercase letter, 1 lowercase letter, 1 digit, and 1 special character)</span>:
        <input name="password" type="password"/>
    </label>
    <?php if(isset($errors["password"])): ?>
        <span class="error"><?= $errors["password"] ?></span>
    <?php endif; ?>
    <button type="submit">Login</button>
</form>

<?php if (isset($_SESSION["flash"])): ?>
    <p class="flash"><?= $_SESSION["flash"] ?></p>
<?php endif; ?>

<?php require "views/components/footer.php"; ?>
