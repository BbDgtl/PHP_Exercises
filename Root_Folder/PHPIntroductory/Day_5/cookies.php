<?php

// TODO Create a COOKIE
// This cookie will expire after 2 minutes (120 seconds)
setcookie("username", "simon", time() + 120);
setcookie("date", "2019-07-02", time() + 120);

var_dump($_COOKIE); // ! <- This is a GLOBAL PHP VARIABLE (This is also an ARRAY)
