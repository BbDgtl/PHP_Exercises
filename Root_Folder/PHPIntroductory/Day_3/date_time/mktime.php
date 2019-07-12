<?php

// ! MKTime takes as arguments : 
// ! -- Hour
// ! -- Minutes
// ! -- Seconds
// ! -- Month
// ! -- Day
// ! -- Year

// TODO Return a TIMESTAMP for this date : 2019/04/22 at 19h00m30s;
$timestamp = mktime(19, 00, 30, 04, 19, 1979);

// TODO Display a FORMAT PAGE for a specific TIMESTAMP
echo date('Y-m-d H:i:s', $timestamp) . '<br>';
echo date('Y-m-d H:i:s', date('U'));
