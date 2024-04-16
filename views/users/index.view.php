<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h2>Taken books:</h2>
<h2><?=$book["title"]?></h2>
<ul>
    <li>Author: <?=htmlspecialchars($book["author"])?></li>
    <li>Release Date: <?=htmlspecialchars($book["released"])?></li>
    <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
</ul>


<div class="button-holder">
    <form class="back-circle" action="/">
        <button class="back-button">Main Page</button>
    </form>
    <?php if ($user["is_admin"] == true) { ?>
        <form class="back-circle" action="/book-add">
            <button class="back-button">Add books</button>
        </form>
        <form class="back-circle" action="/book-delete">
            <button class="back-button">Delete books</button>
        </form>
    <?php } ?>
    <form class="back-circle" action="/logout">
        <button class="back-button">Log out</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>