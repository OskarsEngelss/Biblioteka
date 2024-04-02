<h2>Username:</h2>
    <p><?=$user[0]["username"]?></p>
<h2>Taken Books:</h2>
    <?php foreach($taken_books as $book_taken) { ?>
        <?php if ($book_taken["user_id"] == $user[0]["id"]) { ?>
            <h3><?=$book_taken["title"]?></h3>
            <ul>
                <li>Author: <?=$book_taken["author"]?></li>
                <li>Release Date: <?=$book_taken["release_date"]?></li>
                <li>Availability: <?=$book_taken["availability"]?></li>
            </ul>
        <?php  } ?>
    <?php  } ?>
