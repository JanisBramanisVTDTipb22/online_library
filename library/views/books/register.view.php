<?php require "views/components/head.php"; ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="register-container">
    <h1>Register</h1>

    <form method="POST">
        <label>
            Email:
            <input name="email" type="email" required>
            <?php if(isset($errors["email"])): ?>
                <span class="error"><?= $errors["email"] ?></span>
            <?php endif; ?>
        </label>
        <br>
        <label>
            Password:
            <input name="password" type="password" required>
            <?php if(isset($errors["password"])): ?>
                <span class="error"><?= $errors["password"] ?></span>
            <?php endif; ?>
        </label>
        <br>
        <button type="submit">Register</button>
    </form>
</div>

<?php require "views/components/footer.php"; ?>
