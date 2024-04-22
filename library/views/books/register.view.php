<?php require "views/components/head.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Register</h1>

<form method="POST">
    <label>
        Email:
        <input name="email">
        <?php if(isset($errors["email"])): ?>
            <span class="error"><?= $errors["email"] ?></span>
        <?php endif; ?>
    </label>
    <br>
    <label>
        Password: <span class="explanation">(should be 8 characters long, contain at least 1 uppercase letter, 1 lowercase letter, 1 digit, and 1 special character)</span>:
        <input name="password" type="password"/>
        <?php if(isset($errors["password"])): ?>
            <span class="error"><?= $errors["password"] ?></span>
        <?php endif; ?>
    </label>
    <br>
    <button type="submit">Register</button>
</form>

<?php require "views/components/footer.php"; ?>
