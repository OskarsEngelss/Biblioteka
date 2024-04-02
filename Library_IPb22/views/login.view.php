<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<?php if (isset($user) && $user != "" && $user != []) {?>
    <?php require "controllers/profile.php" ?>
<?php } else { ?>
    <h1>Login into your account:</h1>
    <form method="POST">
        <input name='username' value='<?= ($_POST["username"] ?? "") ?>'/>
        <input type="password" name='password' value='<?= ($_POST["password"] ?? "") ?>'/>
        <button>Enter your information</button>
    </form>
<?php }?>

<?php require "components/footer.php" ?>