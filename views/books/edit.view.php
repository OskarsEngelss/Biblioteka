<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Add a book:</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $book["id"] ?>" />
    <lable>
        Title:
        <input name='title' value="<?=($_POST["title"] ?? $book["title"])?>"/>
        <?php if(isset($errors["title"])) { ?> 
            <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Author:
        <input name='author' value="<?=($_POST["author"] ?? $book["author"])?>"/>
        <?php if(isset($errors["author"])) { ?> 
            <p class="invalid-data"><?= $errors["author"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Release Date:
        <input type="date" name='released' value="<?=($_POST["released"] ?? $book["released"])?>"/>
        <?php if(isset($errors["released"])) { ?> 
            <p class="invalid-data"><?= $errors["released"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Amount of available books:
        <input type="number" name='availability' value="<?=($_POST["availability"] ?? $book["availability"])?>"/>
        <?php if(isset($errors["availability"])) { ?> 
            <p class="invalid-data"><?= $errors["availability"] ?></p>
        <?php } ?>
    </lable>
    
    <button>Update</button>
</form>

<div class="button-holder">
    <form class="back-circle" action="/profile">
        <button class="back-button">Back</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>