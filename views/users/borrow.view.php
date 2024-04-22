<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<p>Are you sure you want to borrow the book - <?=$book["title"]?> - written by: <?=$book["author"]?>?<p>

<form method="POST" action="/borrow?id=<?= $book["id"] ?>">
    <input type="hidden" name="id" value="<?= $book["id"] ?>" />
    <lable>
        Borrow Time:
        <input type="datetime-local" name="reserveTime" value="<?=($_POST["reserveTime"] ?? "")?>" />
        <?php if(isset($errors["reserveTime"])) { ?> 
            <p class="invalid-data"><?= $errors["reserveTime"] ?></p>
        <?php } ?>
    </lable>
    <button>Borrow</button>
</form>

<div class="button-holder">
    <form class="back-circle" action="/">
        <button class="back-button">Back</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>