
<?php
require_once 'functions.php';
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
           <?php
          echo loginMessage();
           ?>
        </p>
        <?php
        if (isset($_GET['title']) && isset($_GET['author'])){
            ?>
        <p>
            the book you are looking for is
        </p>
        <ul>
            <li>
                <b>
                    Title
                </b>
                : <?php 
                echo $_GET['title'];?>
            </li>
            <li>
                <b>
                    Author
                </b>
                :<?php
                echo $_GET['author'];?>
            </li>
        </ul>
        <?php
        } else {
        ?>
        <p>
            you are not looking for a book?
        </p>
        <?php
        }
        $books =[
            [
                'title' => 'to kill a mochingbird',
                'author' => 'harper lee',
                'available' => true,
                'pages' => 336,
                'isbn' => 9780061120084
            ],
            [
                'title' => '1984',
                'author' => 'george orwell',
                'available'=> true,
                'pages'=>267,
                'isbn'=>9780547249643
            ],
            [
                'title'=>'one hundres years of solitude',
                'author'=>'gabriel garsia marquez',
                'available'=>true,
                'page'=>457,
                'isbn'=>9785267006323
            ],
        ];
        
        ?>
        <ul>
            <?php
                    foreach ($books as $book):?>
            <li>
                <?php
                echo printableTitle($book);
                ?>
            </li>
            <?php                    endforeach;?>
        </ul>
    </body>
</html>
