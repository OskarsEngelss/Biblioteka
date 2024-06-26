<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="login-div">
    <form class="login-form" method="POST">
        <label class="login-margin">
            Username:
            <input type="text" name='username' value="<?=($_POST["username"] ?? "")?>"/>
            <?php if(isset($errors["username"])) { ?> 
                <p class="invalid-data"><?= $errors["username"] ?></p>
            <?php } ?>
        </label>
        <label class="login-margin">
            Email:
            <input type="email" name='email' value="<?=($_POST["email"] ?? "")?>"/>
            <?php if(isset($errors["email"])) { ?> 
                <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
        </label>
        <label class="login-margin">
            Password:
            <input type="password" name='password' value="<?=($_POST["password"] ?? "")?>"/>
            <span class="explanation">(8 characters, 1 letter, 1 uppercase, 1 lowercase un 1 special symbol.)</span>
            <?php if(isset($errors["password"])) { ?> 
                <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
        </label>
        <button class="login-margin">Register</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>