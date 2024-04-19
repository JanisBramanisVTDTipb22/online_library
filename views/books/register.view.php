<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>

<h1>register</h1>

<form method="POST">
    <label>
        email:
        <input name="email">
    </label>
    <?php if(isset($errors["email"])) {?>
    <?php } ?>
</form>
<form method="POST">
    <label>
        Password <span class=explenation>(jābūt 8 rakstzīmēm, 1 lielam, 1 mazam, 1 īpašam simbolam un 1 burtam)</span>:
        <input name="password" />
    </label>
    <button>register</button>
</form>



<?php 
require "views/components/footer.php";
?>