<?php

// TODO `get-viewed.php`
// TODO The page will display a message 'You have visited the page
// TODO create-session ', if the 'viewed' variable is assigned.

session_start();

$msg = '';

if (isset($_SESSION['viewed']) == true) {
  $msg = 'Page Viewed';
} else {
  $msg = 'You have not visited the create-sessions page.';
}
echo $msg;
