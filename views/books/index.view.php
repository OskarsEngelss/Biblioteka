<?php require "views/components/head.php" ?>

<?php function bookList($book) {?>
    <div class="bookInfo">
    <a href="/borrow?id=<?= $book["id"] ?>">
            <h3><?=$book["title"]?></h3>
            <ul>
                <li>Author: <?=htmlspecialchars($book["author"])?></li>
                <li>Release Date: <?=htmlspecialchars($book["released"])?></li>
                <li>Availability: <?=htmlspecialchars($book["availability"])?></li>
            </ul>
    </a>
    <?php if (isset($_SESSION["is_admin"])) { ?>
        <form method="POST" action="/book-edit?id=<?= $book["id"] ?>" class="edit-form">
            <button class="edit-button">Edit</button>
        </form>
    <?php } ?>
    </div>
<?php } ?>
<?php function takenBookList($book) {?>
    <li>
        <div>
            <p>Book: <?=htmlspecialchars($book["title"])?></p>
            <p>Reserved till: <?=htmlspecialchars($book["reserveTime"])?></p>
        </div>
    </li>
<?php } ?>

<body>
    <header>
        <h1 class="storeName">Angelss Reads</h1>
        <?php if (isset($_SESSION["user"])) { ?>
            <div class="adminPannel">
                <?php if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) { ?>
                        <form action="/book-add" class="adminButtonCircle">
                            <button class="adminButtons">New Book</button>
                        </form>
                        <form action="/book-delete" class="adminButtonCircle">
                            <button class="adminButtons">Delete</button>
                        </form>
                <?php } ?>
                <form method="POST" action="/logout" class="adminButtonCircle">
                    <button class="adminButtons">Logout</button>
                </form>
            </div>
        <?php } ?>
    </header>

    <main>
        <article class="bookList">
            <section class="bookAvailabilityBox">
                <h2>Available Books</h2>
                <?php foreach($books as $book) { ?>
                    <?php if ($book["availability"] > 0) { ?>
                        <?php bookList($book); ?>
                    <?php } ?>
                <?php } ?>
            </section>
            <section class="bookAvailabilityBox">
                <h2>Unavailable Books</h2>
                <?php foreach($books as $book) { ?>
                    <?php if ($book["availability"] <= 0) { ?>
                        <?php bookList($book); ?>
                    <?php } ?>
                <?php } ?>
            </section>
        </article>

        <article class="profile">
            <?php if (isset($_SESSION["user"])) { ?>
                <header class="profileHeader">
                    <h4><?=$user["username"]?></h4>
                    <img class="profileImage" src="https://www.pngkey.com/png/full/121-1219231_user-default-profile.png"/>
                </header>
                <section class="reservedInfo">
                    <p style="margin:30px 0 0; width: fit-content; height: fit-content; font-size: 30px;">Reserved books:</p>
                    <ul class="reservedBooks">
                        <?php foreach($taken_books as $book) { ?>
                            <?php takenBookList($book); ?>
                        <?php } ?>
                    </ul>
                </section>
            <?php } else { ?>
                <form action="/login">
                    <label>
                        You need to log in:
                        <button>Login</button>
                    </label>
                </form>
            <?php } ?>
        </article>
    </main>
</body>


<?php require "views/components/footer.php" ?>