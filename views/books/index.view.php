<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<?php function bookList($book) {?>
    <a href="/borrow?id=<?= $book["id"] ?>">
        <h3><?=$book["title"]?></h3>
        <ul>
            <li>Author: <?=htmlspecialchars($book["author"])?></li>
            <li>Release Date: <?=htmlspecialchars($book["released"])?></li>
            <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
        </ul>
    </a>
    <?php if (isset($_POST["edit"])) { ?>
        <form method="POST" action="/book-edit?id=<?= $book["id"] ?>" class="delete-form">
            <button class="delete-button">Edit</button>
        </form>
    <?php } ?>
<?php } ?>

<section>
    <h2>Availble books:</h2>

    <?php foreach($books as $book) { ?>
        <?php if ($book["availability"] > 0) { ?>
            <?=bookList($book)?>
        <?php } ?>
    <?php } ?>
</section>

<section>
    <h2>Unavailable books:</h2>

    <?php foreach($books as $book) { ?>
        <?php if ($book["availability"] == 0) { ?>
            <?=bookList($book)?>
        <?php } ?>
    <?php } ?>
</section>

<div class="button-holder">
    <form class="back-circle" action="/profile">
        <button class="back-button">Profile</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>