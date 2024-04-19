<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<?php foreach($taken_books as $book) { ?>
    <h3><?=$book["title"]?></h3>
    <ul>
        <li>Author: <?=htmlspecialchars($book["author"])?></li>
        <li>Release Date: <?=htmlspecialchars($book["released"])?></li>
        <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
    </ul>
    <form method="POST" action="/return?id=<?= $book["id"] ?>&taken_id=<?= $book["taken_id"] ?>" class="delete-form">
        <button class="delete-button">Return</button>
    </form>
<?php } ?>

<div class="button-holder">
    <form class="back-circle" action="/">
        <button class="back-button">Main Page</button>
    </form>
    <?php if ($user["is_admin"] == true) { ?>
        <form class="back-circle" action="/book-add">
            <button class="back-button">Add books</button>
        </form>
        <form method="POST" class="back-circle" action="/">
            <input type="hidden" name="edit" value=true/>
            <button class="back-button">Edit books</button>
        </form>
        <form class="back-circle" action="/book-delete">
            <button class="back-button">Delete books</button>
        </form>
    <?php } ?>
    <form method="POST" class="back-circle" action="/logout">
        <button class="back-button">Log out</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>