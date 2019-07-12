<?php
// ! Start the SESSION before anything else. MANDATORY!
session_start();

// TODO Create (or update) a session value.
$_SESSION['page_view'] = 1;
var_dump($_SESSION);
var_dump($_COOKIE);

// TODO DELETE the SESSION
// Check the lifespan of the session
if (isset($_SESSION['LAST_ACTIVITY']) && ($_SESSION['LAST_ACTIVITY']) > 120) {
  // Delete the session from the script
  session_unset();
  // Delete the session from the file system (server)
  session_destroy();
}

// Regenerate the session ID
session_regenerate_id();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions</title>
</head>

<body>
  
</body>

</html>