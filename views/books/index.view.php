<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<?php function bookList($book) {?>
    <h2><?=$book["title"]?></h2>
    <ul>
        <li>Author: <?=htmlspecialchars($book["author"])?></li>
        <li>Release Date: <?=htmlspecialchars($book["release_date"])?></li>
        <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
        <a href="/user-take?id=<?= $book["id"] ?>">Add</a>
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

<?php require "views/components/footer.php" ?>