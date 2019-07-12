<?php

/* 
STRTOTIME function will 'transform' date, or string, into timestamp.
! Arhument must be in English
*/

echo strtotime('now') . '<br>';
$timestamp = strtotime('19 October 1990');
echo date('d/m/Y', $timestamp) . '<br>';

$timestamp2 = strtotime('next Monday');
echo date('d/m/Y', $timestamp2);
