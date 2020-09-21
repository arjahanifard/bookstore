<?php
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <title>
        Bookstore
    </title>
    </head>
    <body>
        <p>
            you are <?php echo $_COOKIE['username'];?>
        </p>
        <p>are you lookin for a book?<?php echo (int) $looking; ?></p>
        <p>
            the book you are looking for is
        </p>
        <ul>
            <li>
                <b>
                    title
                </b>:<?php echo $_GET['title']; ?>
            </li>
            <li>
                <b>
                    Author
                </b>:<?php echo $_GET['author'];?>
            </li>
        </ul>
    </body>
</html>

