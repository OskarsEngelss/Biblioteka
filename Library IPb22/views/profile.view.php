<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<form>
  <input name='username' value='<?= ($_GET["username"] ?? "") ?>'/>
  <input name='password' value='<?= ($_GET["password"] ?? "") ?>'/>
  <button>Enter your information</button>
</form>

<?php if (isset($user) && $user != "") { ?>
    <h2>Username:</h2>
        <p><?=$user["username"]?></p>
    <h2>Taken Books:</h2>
        <ol>
            <li><?=$user?></li>
        </ol>
<?= } ?>

<?php require "components/footer.php" ?>