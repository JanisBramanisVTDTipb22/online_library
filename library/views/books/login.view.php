<?php
require "views/components/head.php";
?>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="login-container">
    <h1>Login</h1>

    <form method="POST">
        <label>
            Email:
            <input name="email" type="text" required>
        </label>
        <?php if(isset($errors["email"])): ?>
            <span class="error"><?= $errors["email"] ?></span>
        <?php endif; ?>
        <br><br>
        <label>
            Password:
            <input name="password" type="password" required>
        </label>
        <?php if(isset($errors["password"])): ?>
            <span class="error"><?= $errors["password"] ?></span>
        <?php endif; ?>
        <br><br>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="/register">Register here</a>.</p>

    <?php if (isset($_SESSION["flash"])): ?>
        <p class="flash"><?= $_SESSION["flash"] ?></p>
    <?php endif; ?>
</div>

<?php require "views/components/footer.php"; ?>

