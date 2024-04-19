<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<?php function bookList($book) {?>
    <h2><?=$book["title"]?></h2>
    <ul>
        <li>Author: <?=htmlspecialchars($book["author"])?></li>
        <li>Release Date: <?=htmlspecialchars($book["released"])?></li>
        <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
        <form method="POST" action="/book-delete" class="delete-form">
            <input type="hidden" name="id" value="<?= $book["id"] ?>" />
            <button class="delete-button">Delete</button>
        </form>
    </ul>
<?php } ?>

<section>
    <h1>Availble books:</h1>

    <?php foreach($books as $book) { ?>
        <?php if ($book["availability"] > 0) { ?>
            <?=bookList($book)?>
        <?php } ?>
    <?php } ?>
</section>

<section>
    <h1>Unavailable books:</h1>

    <?php foreach($books as $book) { ?>
        <?php if ($book["availability"] == 0) { ?>
            <?=bookList($book)?>
        <?php } ?>
    <?php } ?>
</section>

<div class="button-holder">
    <form class="back-circle" action="/profile">
        <button class="back-button">Back</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>