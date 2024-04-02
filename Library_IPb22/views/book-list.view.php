<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<?php function bookList($book) {?>
    <h2><?=$book["title"]?></h2>
    <ul>
        <li>Author: <?=$book["author"]?></li>
        <li>Release Date: <?=$book["release_date"]?></li>
        <li>Availability: <?=$book["availability"]?></li>
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

<?php require "components/footer.php" ?>