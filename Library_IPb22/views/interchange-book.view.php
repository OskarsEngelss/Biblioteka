<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Add a book to your account:</h1>
<section>
    <form method="POST">
        <label>
            Title: 
            <input name="title" value='<?= ($_POST["title"] ?? "") ?>'>
        </label>
        <label>
            Author: 
            <input name="author" value='<?= ($_POST["author"] ?? "") ?>'>
        </label>

        <br>

        <label>
            username: 
            <input name="username" value='<?= ($_POST["username"] ?? "") ?>'>
        </label>
        <label>
            password: 
            <input type="password" name="password" value='<?= ($_POST["password"] ?? "") ?>'>
        </label>
        <br>
        <label>
            Choose operation:
            <select name="operation">
                <option value="add">Add</option>
                <option value="remove">Remove</option>
            </select>
        </label>
        <br>
        <button>Complete</button>
    </form>
</section>

<?php require "components/footer.php" ?>