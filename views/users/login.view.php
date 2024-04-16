<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>You need to log in:</h1>

<form method="POST" action="/user-login">
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

<div class="button-holder">
    <form class="back-circle" action="/">
        <button class="back-button">Back</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>