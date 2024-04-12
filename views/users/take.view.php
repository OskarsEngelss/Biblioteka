<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Log in to take the book <?= $book["title"] ?>, log in!</h1>


<form method="POST" action="/user-take?id=<?= $book["id"] ?>">
    <lable>
        Username:
        <input name='username' value="<?=($_POST["username"] ?? "")?>"/>
        <?php if(isset($errors["username"])) { ?> 
            <p class="invalid-data"><?= $errors["username"] ?></p>
        <?php } ?>
    </lable>
    <lable>
        Password:
        <input type="password" name='password' value="<?=($_POST["password"] ?? "")?>"/>
        <?php if(isset($errors["password"])) { ?> 
            <p class="invalid-data"><?= $errors["password"] ?></p>
        <?php } ?>
    </lable>
    
    <button>Log In</button>
</form>

<?php require "views/components/footer.php" ?>