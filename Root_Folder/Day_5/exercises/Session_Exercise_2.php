<?php
/*
    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $ _SESSION array

    Step 2: Also post the date of first visit by the client.

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.
 */

session_start();

if (isset($_POST['clearBtn'])) {
    unset($_SESSION['first_time']);
}

if (!isset($_SESSION['first_time'])) {
    $_SESSION['first_time'] = time();
    $_SESSION['count'] = 1;
} else
    $_SESSION['count'] += 1;

echo 'First visit: ' . date('Y-m-d H:i:s', $_SESSION['first_time']) . '<br>';
echo 'Number of visits: ' . $_SESSION['count'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Exercise</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" name="clearBtn" value="RESET SESSION">
    </form>
</body>

</html>