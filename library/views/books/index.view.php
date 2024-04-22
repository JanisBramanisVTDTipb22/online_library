<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1>Secret dashboard</h1>
    
<form action="/logout" method="POST">
    <button>Logout</button>
</form>

<ul>
    <?php foreach ($books as $book) { ?>
        <li>
            <a href="/show?id=<?= $book["id"] ?>"> <?= htmlspecialchars($book["title"])?> </a>
            (<?= $book["writer"] ?> writer)
            <form class="deleteform" method="POST" action="/delete">
                <input type="hidden" name="writer" value="<?= $book["writer"] ?>">
                <input type="hidden" name="id" value="<?= $book["id"] ?>">
                <button class="test" name="delete" type="submit">Delete</button>
            </form>
        </li>
    <?php } ?>
</ul>

<?php 
require "views/components/footer.php";
?>