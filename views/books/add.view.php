<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Add a post</h1>

<form method="POST">
    <lable>
        Title:
        <input name='title' value="<?=($_POST["title"] ?? "")?>"/>
        <?php if(isset($errors["title"])) { ?> 
            <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Author:
        <input name='author' value="<?=($_POST["author"] ?? "")?>"/>
        <?php if(isset($errors["author"])) { ?> 
            <p class="invalid-data"><?= $errors["author"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Release Date:
        <input type="date" name='release-date' value="<?=($_POST["release-date"] ?? "")?>"/>
        <?php if(isset($errors["release-date"])) { ?> 
            <p class="invalid-data"><?= $errors["release-date"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Amount of available books:
        <input type="number" name='availability' value="<?=($_POST["availability"] ?? "")?>"/>
        <?php if(isset($errors["availability"])) { ?> 
            <p class="invalid-data"><?= $errors["availability"] ?></p>
        <?php } ?>
    </lable>
    
    <button>Create</button>
</form>

<?php require "views/components/footer.php" ?>