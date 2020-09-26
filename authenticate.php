<?php
$submitted = isset($_POST['username']) && isset($_POST['password']);
if ($submitted){
    setcookie('username',$_POST['username']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            BookStore
        </title>
    </head>
    <body>
        <?php if ($submitted): ?>
        <p>
            Your login info is
        </p>
        <ul>
            <li>
                <b>
                    username
                </b>:<?php                echo $_POST['username'];?>
            </li>
            <li>
                <b>
                    password
                </b>:<?php echo $_POST['password'];?>
            </li>
        </ul>
        <?php        else: ?>
        <p>
            you did not submit anything.
        </p>
        <?php        endif; ?>
    </body>
</html>
