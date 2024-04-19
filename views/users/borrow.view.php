<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<p>Are you sure you want to borrow the book - <?=$book["title"]?> - written by: <?=$book["author"]?>?<p>

<form method="POST" action="/borrow?id=<?= $book["id"] ?>">
    <input type="hidden" name="id" value="<?= $book["id"] ?>" />
    <button>Borrow</button>
</form>

<div class="button-holder">
    <form class="back-circle" action="/">
        <button class="back-button">Back</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>